<?php 
namespace App;


use App\User;
use App\SessionStorage;

/**
 * Container Class
 */
class Container
{
	protected $parameters = array();

	public function __construct(array $parameters = array())
  	{
    	$this->parameters = $parameters;
  	}

	protected function getSessionStorage()
	{
		$cookie_name = $this->parameters['user.session_id'];
		//$cookie_name = SESSION_ID_CHILENETWORK;
		return new SessionStorage($cookie_name);
	}

	public function getUser()
	{
		$user = new User();
		$user->setSessionStorage($this->getSessionStorage());

		return $user;
	}
}

define('SESSION_ID_CHILENETWORK', 'SESSION_ID_COSOasdfasdf');