<?php
namespace Bonvga\Bundle\Geoip2Bundle\Composer;

use Composer\Script\CommandEvent;
use Symfony\Component\Process\Process;

class ScriptHandler
{

    static public function installDatabase(CommandEvent $event)
    {

        //var_dump($event);
        $options = self::getOptions($event);
        $appDir = $options['symfony-app-dir'];
        var_dump($appDir);

        //var_dump($options);
        echo 'TEST.'.PHP_EOL;

    }
}