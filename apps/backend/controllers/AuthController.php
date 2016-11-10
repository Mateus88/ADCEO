<?php

namespace Adceo\Backend\Controllers;

use Adceo\Frontend\Models\User;

class AuthController extends ControllerBase
{
	private function _registerSession($user)
	{
		$this->session->set('auth', array(
				'id'    	=> $user->Id,
				'username'  => $user->User,
				'email'  	=> $user->Email,
				'type'		=> $user->Type,
		));
	}
	
	public function indexAction(){
		
	}
	
	/**
	 * This action authenticate and logs a user into the application
	 */
	public function startAction() {
		
		if ($this->request->isPost()) {
			// Get the data from the user
			$email = $this->request->getPost("email");
			$password = $this->request->getPost("password");
			// 			$crypted = $this->generateHash($password, PASSWORD_DEFAULT);
			$user=User::getAdmin($email);
			
				
			if (!$user) {
				$this->flash->error("Nao tem permissoes para aceder ao Backoffice");
				return $this->response->redirect('admin/login');
			}
			// Find the user in the database
			if ($user !== false && $this->security->checkHash($password, $user->Password)) {
				$this->_registerSession($user);
	
				$this->flash->success("Welcome " . $user->User);
				
				// Forward to the 'index'  if the user is valid
				return $this->response->redirect('admin');
			}
				
			$this->flash->error("Wrong email/password");
		}
	
		// Forward to the login form again
		return $this->response->redirect('admin/login');
	}
	
	public function logoutAction()
	{
		$this->session->destroy();
		return $this->response->redirect('admin/login');
	}

}