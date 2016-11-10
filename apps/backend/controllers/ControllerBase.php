<?php
namespace Adceo\Backend\Controllers;

use Phalcon\Mvc\Controller;
use Adceo\Frontend\Models\User;

class ControllerBase extends Controller
{
	protected $userId = null;
	protected $userName = null;
	protected $userEmail = null;
	protected $currentUser = null;
	
	public function initialize()
	{
		header('Content-Type: text/html; charset=UTF-8');
	
		date_default_timezone_set('EUROPE/LONDON');
	
		$this->view->setVar ( "currentUser",null);
	
		if ($this->session->get ( 'auth' ) != null) {
			// Username
			$auth = $this->session->get ( 'auth' );
	
			$this->userId = $auth['id'];
			$this->userName = $auth['username'];
			$this->userEmail = $auth['email'];
	
			$this->view->user = User::findFirst($this->userId);
		}
		else{
 			if(empty($this->session->get("userName")) && $this->router->getControllerName() != "auth")
			{
				$this->response->redirect('admin/login');
			}
		}
	}

}
