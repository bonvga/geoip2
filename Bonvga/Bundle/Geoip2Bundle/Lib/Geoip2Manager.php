<?php
namespace Bonvga\Bundle\Geoip2Bundle\Lib;

use Symfony\Component\Process\Process;

class Geoip2Manager
{
    static public function getGeoip2LiteCityDatabasePath()
    {
        $path = self::getGeoip2DatabasePath().'/GeoLite2-City.mmdb';
        if (!file_exists($path)) {
            throw new \Exception("Geoip2LiteCity Database not found");
        }

        return $path;
    }

    static public function updateGeoip2Database()
    {
        $path = self::getGeoip2DatabasePath();

        $process = new Process('curl -o '.$path.'/GeoLite2-City.mmdb.gz http://geolite.maxmind.com/download/geoip/database/GeoLite2-City.mmdb.gz; gunzip -f '.$path.'/GeoLite2-City.mmdb.gz');
        $process->setTimeout(3600);
        $process->run(function ($type, $buffer) {
            echo $buffer;
        });
        if (!$process->isSuccessful()) {
            throw new \RuntimeException($process->getErrorOutput());
        }
    }

    static protected function getGeoip2DatabasePath()
    {
        return realpath(dirname(__FILE__).'/../Resources/database');
    }
}