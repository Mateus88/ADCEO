<?php

namespace Adceo\Frontend\Controllers;

use Adceo\Frontend\Models\User;

class LoginController extends ControllerBase {
	
	private function _registerSession($user)
	{
		$this->session->set('auth', array(
				'id'    	=> $user->Id,
				'username'  => $user->User,
				'email'  	=> $user->Email,
				'type'		=> $user->Type,
		));
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
			$user=User::getUser($email);
			
			if (!$user) {
				$this->flash->error("Utilizador nao existe");
				return $this->response->redirect('index');
			}
			// Find the user in the database
			if ($user !== false && $this->security->checkHash($password, $user->Password)) {
				$this->_registerSession($user);
				
				$this->flash->success("Welcome " . $user->User);
				
				// Forward to the 'index'  if the user is valid
				return $this->response->redirect('index');
			}
			
			$this->flash->error("Wrong email/password");
		}
		
		// Forward to the login form again
		return $this->response->redirect('index');
	}
	
	
	/**
	 *  Register user
	 */
	public function registerAction(){
		$assocTokens = ($this->view->tokensVolt);
		if($this->request->isPost())
		{
			if ($this->security->checkToken()) {
				$username = $this->request->getPost('username');
				$email = $this->request->getPost('email');
				$password=$this->request->getPost('password');
				
				if($email != "" && $password != "")
				{
					$user = User::getUser($email);
					 
					if (!empty($user)){
						$this->flash->error("Utilizador já existente <button class='close' data-close='alert'></button>");
						return $this->response->redirect('index');
					}
					else{
						$user = new User();
						
						$user->User = $username;
						$user->Email = $email;
						$user->Password = password_hash($password, PASSWORD_DEFAULT);
						$user->Type = 2;
							
						if ($user->save() == false) {
							$this->flash->error($assocTokens['erroCreateUser']." <button class='close' data-close='alert'></button>");
							return $this->response->redirect('homepage');
						} else {
								
							$this->_registerSession($user);
						}
					}
				}
				else
				{
					$this->flash->error("Email registado <button class='close' data-close='alert'></button>");
					return $this->response->redirect('index');
				}
				$this->flash->success("Sucesso ao criar utilizador<button class='close' data-close='alert'></button>");
				return $this->response->redirect('index');
			}
		}
	
	}
	
 	public function logoutAction()
 	{
		$this->session->destroy();
		return $this->response->redirect('index');
	}
	
	public function faceLoginAction()
	{
		$assocTokens = ($this->view->tokensVolt);
		// Check whether the request was made with method POST
		if ($this->request->isPost ()) {
			// Check whether the request was made with Ajax
			if ($this->request->isAjax ()) {
				$this->view->disable ();
				
				$id=$this->request->getPost("id");
				$name=$this->request->getPost("name");
				$email = $this->request->getPost("email");
				$name =explode(" ",$name);
				$userName = $name[0];
				$lastName = $name[1];
				
				$findEmail =User::getFacebookId($id);
					
				if (!empty($findEmail)) {
					$this->_registerSession($findEmail);
				} else {
					$user = new User ();
					$user->User=$userName;
					$user->FirstName=$userName;
					$user->LastName=$lastName;
					$user->FacebookId=$id;
					$user->Email=$email;
					$user->Password=" ";
					$user->Type=3;
					$user->save();
					
					$this->_registerSession($user);
				
				}
			}
		}
	}
}