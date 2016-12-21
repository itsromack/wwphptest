<?php

namespace AppBundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

class WillyweatherProcessCommand extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('willyweather:process')
            ->setDescription('Prints the field values (rounded format)')
            ->addArgument('field', InputArgument::OPTIONAL, 'Field name from the WillyWeather Data (sample php exam)')
            ->addOption('argument', null, InputOption::VALUE_NONE, 'Load Original Data')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        $argument = $input->getArgument('argument');

        if ($input->getOption('orig-data')) {
            $output->writeln('Writing Original Data');
        }

        $output->writeln('Command result.');
    }

}
