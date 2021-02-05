<?php

    require_once __DIR__ . '/../vendor/autoload.php';

    use engine\Cms;
    use engine\DI\DI;

    try{
        // Dependency injection
        $di = new DI();

        $service = require __DIR__ . '/config/Service.php';
        // Init services
        foreach ($service as $service) {
            $provider = new $service($di);
            $provider->init();
        }
        //
        $cms = new Cms($di);
        $cms->run();
    } catch(\ErrorException $e) {
        echo $e->getMessage();
    }
