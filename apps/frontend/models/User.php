<?php

namespace Adceo\Frontend\Models;

class User extends \Phalcon\Mvc\Model
{

	/**
	 *
	 * @var integer
	 */
	public $Id;

	/**
	 *
	 * @var string
	 */
	public $User;
	
	/**
	 *
	 * @var string
	 */
	public $FirstName;
	
	/**
	 *
	 * @var string
	 */
	public $LastName;
	
	/**
	 *
	 * @var string
	 */
	public $FacebookId;
	
	/**
	 *
	 * @var string
	 */
	public $Email;

	/**
	 *
	 * @var string
	 */
	public $Password;

	/**
	 *
	 * @var integer
	 */
	public $Type;

	/**
	 * Initialize method for model.
	 */
	public function initialize()
	{
	}
	
	/**
	 * 
	 * @return string[]
	 */
	public function columnMap()
	{
		return array(
				'Id' => 'Id',
				'User' => 'User',
				'FirstName' => 'FirstName',
				'LastName' => 'LastName',
				'FacebookId' => 'FacebookId',
				'Email' => 'Email',
				'Password' => 'Password',
				'Type' => 'Type',
		);
	}

	/**
	 * Returns table name mapped in the model.
	 *
	 * @return string
	 */
	public function getSource()
	{
		return 'User';
	}
	
	/**
	 * 
	 * @param $email 
	 * @return user[]
	 */
	public static function getUser($email){
		$user= parent::findFirst("Email="."'$email'");
		return $user;
	}
	
	/**
	 * 
	 * @param  $id
	 * @return user[]
	 */
	public static function getFacebookId($id){
		$user=parent::findFirst("FacebookId="."'$id'");
		return $user;
	}
	
	/**
	 *
	 * @param $email
	 * @return user[]
	 */
	public static function getAdmin($email){
		$user= parent::findFirst("Email="."'$email' and Type=1");
		return $user;
	}

	

}