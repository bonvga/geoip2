# Bonvga/Geoip2Bundle

This Symfony 2 bundle is a helper for Maxmind Geocity2 database installation.

Installation
------------

 1. Add the Geoip2Bundle to your dependencies:

        // composer.json

        {
           // ...
           "require": {
               // ...
               "bonvga/geoip2": "dev-master"
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

    AND / OR

        // composer.json

        "scripts": {
            "post-install-cmd": [
                "Bonvga\\Bundle\\Geoip2Bundle\\Composer\\ScriptHandler::installDatabase"
            ],
            "post-update-cmd": [
                "Bonvga\\Bundle\\Geoip2Bundle\\Composer\\ScriptHandler::installDatabase"
            ]
        },

Usage
-----

TODO
