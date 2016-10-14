<?php

namespace Adceo\Frontend;

use Phalcon\Loader;
use Phalcon\Mvc\View;
use Phalcon\Db\Adapter\Pdo\Mysql as DbAdapter;
use Phalcon\Mvc\ModuleDefinitionInterface;

class Module implements ModuleDefinitionInterface {
	
	/**
	 * Registers the module auto-loader
	 */
	public function registerAutoloaders(\Phalcon\DiInterface $di=null) {
		$loader = new Loader ();
		
		$loader->registerNamespaces ( array (
				'Adceo\Frontend\Controllers' => __DIR__ . '/controllers/',
				'Adceo\Frontend\Models' => __DIR__ . '/models/',
				'Adceo\Backend\Models' => __DIR__ . '/../backend/models/' 
		) );
		
		$loader->register ();
	}
	
	/**
	 * Registers the module-only services
	 *
	 * @param Phalcon\DI $di        	
	 */
	public function registerServices(\Phalcon\DiInterface $di=null) {
		
		/**
		 * Read configuration
		 */
		$config = include __DIR__ . "/config/config.php";
		
		// Registering a dispatcher
		$di->set ( 'dispatcher', function () {
			$dispatcher = new \Phalcon\Mvc\Dispatcher ();
			
			$dispatcher->setDefaultNamespace ( "Adceo\Frontend\Controllers\\" );
			return $dispatcher;
		} );
		
		$di->set ( 'volt', function ($view, $di) {
			
			$volt = new Phalcon\Mvc\View\Engine\Volt ( $view, $di );
			
			$volt->setOptions ( array (
					"compileAlways" => true,
					"compiledPath" => "../apps/frontend/cache/"
			) );
			
			return $volt;
		} );
		
		// Registering Volt as template engine
		$di->set ( 'view', function () {
			
			$view = new \Phalcon\Mvc\View ();
			
			$view->setViewsDir ( '../apps/frontend/views/' );
			
			$volt = new \Phalcon\Mvc\View\Engine\Volt ( $view );
			
			$volt->setOptions ( array (
					'compileAlways' => true,
					"compiledPath" => "../apps/frontend/cache/",
					'stat' => true 
			) );
			
			/**
			 * Register Volt
			 */
			$view->registerEngines ( array (
					'.volt' => $volt 
			) );
			
			return $view;
		} );
		
		/**
		 * Database connection is created based in the parameters defined in the configuration file
		 */
		$di ['db'] = function () use($config) {
			return new DbAdapter ( array (
					"host" => $config->database->host,
					"username" => $config->database->username,
					"password" => $config->database->password,
					"dbname" => $config->database->dbname,
					"charset" => $config->database->charset 
			) );
		};
	}
}
