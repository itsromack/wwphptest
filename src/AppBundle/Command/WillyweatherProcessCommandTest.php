<?php

namespace AppBundle\Command;

use AppBundle\Command\WillyweatherProcessCommand;
use Symfony\Bundle\FrameworkBundle\Console\Application;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;
use Symfony\Component\Console\Tester\CommandTester;

class WillyweatherProcessCommandTest extends KernelTestCase
{
    public function testExecute()
    {
        $kernel = $this->createKernel();
        $kernel->boot();

        $application = new Application($kernel);

        $application->add(new WillyweatherProcessCommand());

        $command = $application->find('willyweather:process');
        $tester = new CommandTester($command);

        $fields = [
            'DEWP',
            'FRSHTT',
            'GUST',
            'MAX',
            'MIN',
            'MXSPD',
            'PRCP',
            'SLP',
            'SNDP',
            'STP',
            'STN',
            'TEMP',
            'VISIB',
            'WBAN',
            'WDSP',
            'YEARMODA'
        ];

        echo "\n" . $command->getName() . " [PARAM]\n";
        foreach ($fields as $field)
        {
            $tester->execute([
                'command' => $command->getName(),
                'field' => $field
            ]);
            $output = $tester->getDisplay();
            echo "\t" . $field.' >>> '.$output;
            $this->assertTrue(strlen($output) > 0);
            $this->assertTrue(!empty($output));
        }
    }
}
