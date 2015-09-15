<?php
namespace Bonvga\Bundle\Geoip2Bundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;
use Bonvga\Bundle\Geoip2Bundle\Lib\Geoip2Manager;

class Geoip2Command extends ContainerAwareCommand
{
    protected function configure()
    {
        $this
            ->setName('bonvga:geoip2_database_update')
            ->setDescription('Updating Geoip 2 Maxmind Database')
        ;
    }

    protected function execute(InputInterface $input, OutputInterface $output)
    {
        Geoip2Manager::updateGeoip2Database();
    }
}