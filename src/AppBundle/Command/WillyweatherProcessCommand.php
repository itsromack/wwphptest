<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use AppBundle\Processors\ProcessorFactory;

class WillyweatherProcessCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('willyweather:process')
            ->setDescription('Prints the field values (rounded format)')
            ->addArgument(
                'field',
                InputArgument::OPTIONAL,
                'Field name from the WillyWeather Data (sample php exam)'
            )
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $field = $input->getArgument('field');
        $result = null;

        $logger = $this->getContainer()->get('logger');
        $logger->info('Executing command for ' . $field);

        $doctrine = $this->getDoctrine();
        if (!is_null($doctrine))
        {
            $repository = $doctrine->getRepository('AppBundle:WWData');
            $items = $repository->findAll();

            $processor = ProcessorFactory::create($field);

            if (!is_null($processor))
            {
                $result = $processor->process($items);
            }
        }

        $output->writeln($result);
    }

    public function getDoctrine()
    {
        if (!$this->getContainer()->has('doctrine')) {
            throw new Exception('The DoctrineBundle is not registered in your application.');
        }

        return $this->getContainer()->get('doctrine');
    }

}
