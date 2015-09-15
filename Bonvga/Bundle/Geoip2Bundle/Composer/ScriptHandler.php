<?php
namespace Bonvga\Bundle\Geoip2Bundle\Composer;

use Composer\Script\CommandEvent;
use Bonvga\Bundle\Geoip2Bundle\Lib\Geoip2Manager;

class ScriptHandler
{
    static public function installDatabase(CommandEvent $event)
    {
        Geoip2Manager::updateGeoip2Database();
    }
}