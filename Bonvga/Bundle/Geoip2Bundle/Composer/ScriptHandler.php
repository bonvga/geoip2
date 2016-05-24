<?php
namespace Bonvga\Bundle\Geoip2Bundle\Composer;

use Composer\Script\Event;
use Bonvga\Bundle\Geoip2Bundle\Lib\Geoip2Manager;

class ScriptHandler
{
    static public function installDatabase(Event $event)
    {
        Geoip2Manager::updateGeoip2Database();
    }
}