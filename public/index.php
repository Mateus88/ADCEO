<?php

use Phalcon\Mvc\Application;

error_reporting(E_ALL);

try {

    /**
     * Include services
     */
    require __DIR__ . '/../config/services.php';

    /**
     * Handle the request
     */
    $application = new Application($di);

    /**
     * Include modules
     */
    require __DIR__ . '/../config/modules.php';
    
    /**
     * Include Routes
     */
    $di->set('router', function(){
    	require __DIR__.'/../config/routes.php';
    	return $router;
    });

    
    echo $application->handle()->getContent();


} catch (Exception $e) {
    echo $e->getMessage();
}
