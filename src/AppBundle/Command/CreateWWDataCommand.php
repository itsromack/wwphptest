<?php

namespace AppBundle\Command;

use Symfony\Component\Console\Command\Command;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Output\OutputInterface;
use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;

/**
 * Description of CreateWWDataCommand
 *
 * @author romack
 */
class CreateWWDataCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this->setName('willyweather:load')
            ->setDescription('Loads the Willy Weather Data (sample php exam)')
            ->setHelp('This command allows you to load the sample data');
    }
    
    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $output->writeln([
            'Willy Weather Data Loader',
            '=========================',
            ''
        ]);
        $manager = $this->getContainer()->get('app.wwdata');

        $filereader = $this->getContainer()->get('file.reader');
        $filename = 'app/Resources/data/007034-99999-2012.op';
        $contents = $filereader->getFileContents($filename);

        if (!empty($contents))
        {
            $wwdataManager = $this->getContainer()->get('wwdata.loader');
            foreach ($contents as $content)
            {
                $wwdata = $wwdataManager->prepare($content);
                $this->saveData($wwdata);
            }
        }
    }

    private function saveData($data)
    {
        echo "saving data...\n";
        $doctrine = $this->getContainer()->get('doctrine');
        $manager = $doctrine->getManager();
        $manager->persist($data);
        $manager->flush();
    }
}
