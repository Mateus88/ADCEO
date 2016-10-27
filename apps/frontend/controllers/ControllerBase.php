<?php

namespace Adceo\Frontend\Controllers;

use Phalcon\Mvc\Controller;

class ControllerBase extends Controller
{
	
	public function indexAction()
	{
		header('Content-Type: text/html; charset=UTF-8');
	}

}
