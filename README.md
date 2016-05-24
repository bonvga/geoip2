# Bonvga/Geoip2Bundle

This Symfony 2 bundle is a helper for Maxmind Geocity2 database installation.

Requirements
------------

You need the Curl binary package. (https://curl.haxx.se/)

Installation
------------

 1. Add the Geoip2Bundle to your dependencies:

        // composer.json

        {
           // ...
           "require": {
               // ...
               "bonvga/geoip2": "1.0"
           }
        }

 2. Use Composer to download and install the Geoip2Bundle:

        $ php composer.phar update bonvga/geoip2

 3. Register the bundle in your application:

        // app/AppKernel.php

        public function registerBundles()
        {
            $bundles = array(
                // ...
                new Bonvga\Bundle\Geoip2Bundle\Geoip2Bundle()
            );
        }

 4. Optional, updating Maxmind Geocity2 database during composer

        // composer.json

        "scripts": {
            "post-install-cmd": [
                "Bonvga\\Bundle\\Geoip2Bundle\\Composer\\ScriptHandler::installDatabase"
            ],
            "post-update-cmd": [
                "Bonvga\\Bundle\\Geoip2Bundle\\Composer\\ScriptHandler::installDatabase"
            ]
        },

        // or with command

        $ php app/console bonvga:geoip2_database_update

Usage
-----

With the geoip2/geoip2 bundle :

        // composer requirement
        "geoip2/geoip2": "~2.0"

Or see https://packagist.org/packages/geoip2/geoip2

        // PHP sample

        use Bonvga\Bundle\Geoip2Bundle\Lib\Geoip2Manager;
        use GeoIp2\Database\Reader;

        $reader = new Reader(Geoip2Manager::getGeoip2LiteCityDatabasePath());
