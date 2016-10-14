<?php
$router = new \Phalcon\Mvc\Router ();

$router->setDefaultModule('frontend');
$router->setDefaultNamespace('Adceo\Frontend\Controllers');


$router->setDefaultController('index');
$router->setDefaultAction('index');

// Routes Frontend
$router->add ( "/Adceo/", array (
		'module' => 'frontend',
		'namespace' => 'Adceo\Frontend\Controllers',
		'controller' => 'index',
		'action' => 'index' 
) );

// Routes Backend
$router->add ( "/admin", array (
		'module' => 'backend',
		'namespace' => 'Adceo\Backend\Controllers',
		'controller' => 'index',
		'action' => 'index' 
) );

$router->add ( "/admin/", array (
		'module' => 'backend',
		'namespace' => 'Adceo\Backend\Controllers',
		'controller' => 'index',
		'action' => 'index'
) );


return $router;
