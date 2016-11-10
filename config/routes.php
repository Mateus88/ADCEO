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

$router->add ( "/Adceo/institucional/estatutos", array (
		'module' => 'frontend',
		'namespace' => 'Adceo\Frontend\Controllers',
		'controller' => 'institucional',
		'action' => 'statutes'
) );

$router->add ( "/Adceo/institucional/sociais", array (
		'module' => 'frontend',
		'namespace' => 'Adceo\Frontend\Controllers',
		'controller' => 'institucional',
		'action' => 'socials'
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

$router->add ( "/admin/login", array (
		'module' => 'backend',
		'namespace' => 'Adceo\Backend\Controllers',
		'controller' => 'auth',
		'action' => 'index'
) );

$router->add ( "/admin/logout", array (
		'module' => 'backend',
		'namespace' => 'Adceo\Backend\Controllers',
		'controller' => 'auth',
		'action' => 'logout'
) );

$router->add ( "/admin/auth/start", array (
		'module' => 'backend',
		'namespace' => 'Adceo\Backend\Controllers',
		'controller' => 'auth',
		'action' => 'start'
) );

$router->add ( "/admin/institucional/club", array (
		'module' => 'backend',
		'namespace' => 'Adceo\Backend\Controllers',
		'controller' => 'institucional',
		'action' => 'club'
) );


return $router;
