<?php
namespace Bonvga\Bundle\Geoip2Bundle\Command;

use Symfony\Bundle\FrameworkBundle\Command\ContainerAwareCommand;
use Symfony\Component\Console\Input\InputArgument;
use Symfony\Component\Console\Input\InputInterface;
use Symfony\Component\Console\Input\InputOption;
use Symfony\Component\Console\Output\OutputInterface;

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
        die(__FILE__);


        /*$this->printTitle($output);

        $am = $this->getContainer()->get('praxis_bo.annotations_manager');
        $rm = $this->getContainer()->get('praxis_bo.right_manager');
        $application = $this->getContainer()->getParameter('praxis_bo.application');

        // déclaration de l'application
        $rm->saveApplication($application['name'], $application['title']);
        $output->writeln("Application update <info>Done</info>");

        // collecte et controle des annotations
        $annotations = $am->collectAllAnnotations();
        $output->writeln("Groups collected <info>".count($annotations['groups'])."</info>");
        $output->writeln("Routes collected <info>".count($annotations['routes'])."</info>");
        $output->writeln("Menus collected <info>".count($annotations['menus'])."</info>");
        $output->writeln("Features collected <info>".count($annotations['features'])."</info>");
        $output->writeln("Options collected <info>".count($annotations['options'])."</info>");

        // injection des groupes dans groups
        foreach($annotations['groups'] as $group) {
            $rm->saveGroup($group['group_name'], $group['label'], $group['attributes']);
        }
        $output->writeln("Groups update <info>Done</info>");

        // purge des items "non live"
        $rm->purgeNotLive();
        $output->writeln("Purge zombies <info>Done</info>");

        // injection des routes dans items
        foreach($annotations['routes'] as $route) {
            $rm->addAnnotationRoute($route);
        }
        $output->writeln("Routes update <info>Done</info>");

        // injection des menus dans items
        foreach($annotations['menus'] as $menu) {
            $rm->addAnnotationMenu($menu);
        }
        $output->writeln("Menus update <info>Done</info>");

        // injection des features dans items
        foreach($annotations['features'] as $feature) {
            $rm->addAnnotationFeature($feature);
        }
        $output->writeln("Features update <info>Done</info>");

        // injection des options dans items
        foreach($annotations['options'] as $option) {
            $rm->addAnnotationOption($option);
        }
        $output->writeln("Options update <info>Done</info>");

        // ajout des groupes praxisbo pour le ou les utilisateurs par défaut
        $praxisBoGroups = array();
        foreach($annotations['groups'] as $group) {
            if (preg_match('/^praxisbo_/', $group['group_name'])) {
                $praxisBoGroups[] = $group['group_name'];
            }
        }
        foreach($application['default_users'] as $username) {
            $output->writeln("Update default rights for <info>".$username."</info>");
            $rm->saveUserGroups($username, $praxisBoGroups);
        }

        // passage en mode live
        $rm->goinToLive();
        $output->writeln("Going live <info>Done</info>");*/
    }
}