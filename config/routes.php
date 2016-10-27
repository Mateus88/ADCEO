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

$router->add ( "/Adceo/institucional/clube", array (
		'module' => 'frontend',
		'namespace' => 'Adceo\Frontend\Controllers',
		'controller' => 'institucional',
		'action' => 'club'
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
