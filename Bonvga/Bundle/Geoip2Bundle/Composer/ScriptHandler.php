<?php
namespace Bonvga\Bundle\GeoipBundle\Composer;

use Composer\Script\CommandEvent;
use Symfony\Component\Process\Process;

class ScriptHandler
{

    static public function installDatabase(CommandEvent $event)
    {

        var_dump($event);

        die('TOTO');

    }
}