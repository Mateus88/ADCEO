<?php

/**
 * Services are globally registered in this file
 */

use Phalcon\Mvc\Url as UrlResolver;
use Phalcon\DI\FactoryDefault;
use Phalcon\Session\Adapter\Files as SessionAdapter;
use Phalcon\Loader;
use Phalcon\Flash\Session as FlashSession;

/**
 * The FactoryDefault Dependency Injector automatically registers the right services to provide a full stack framework
 */
$di = new FactoryDefault();

/**
 * The URL component is used to generate all kinds of URLs in the application
 */
$di['url'] = function () {
    $url = new UrlResolver();
    $url->setBaseUri('/');

    return $url;
};

/**
 * Starts the session the first time some component requests the session service
 */
$di['session'] = function () {
    $session = new SessionAdapter();
    $session->start();

    return $session;
};


//Register the flash service with custom CSS classes
$di->set('flash', function(){
    $flash = new FlashSession(array(
        'error'   	     => 'alert alert-danger',
        'success' 		 => 'alert alert-success',
        'notice'  	     => 'alert alert-info',
    ));
    return $flash;
});

//Register the flash service with custom CSS classes
// $di->set('flashBackend', function(){
// 	$flash = new FlashSession(array(
// 			'error'   	     => 'alert alert-danger',
// 			'success' 		 => 'alert alert-success',
// 			'notice'  	     => 'alert alert-info',
// 	));
// 	return $flash;
// });


$loader = new Loader ();

$loader->registerNamespaces ( array (
		'Adceo\Libraries' =>'../apps/libraries/'
) );

$loader->register ();
