<?php

/**
 * Register application modules
 */
$application->registerModules(array(
    'frontend' => array(
        'className' => 'Adceo\Frontend\Module',
        'path' => __DIR__ . '/../apps/frontend/Module.php'
    ),
	'backend' => array(
		'className' => 'Adceo\Backend\Module',
		'path' => __DIR__ . '/../apps/backend/Module.php'
	)
));