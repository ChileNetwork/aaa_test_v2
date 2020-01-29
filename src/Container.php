<?php 
namespace App;


//use App\User;
use App\SessionStorage;

/**
 * Container Class
 */
class Container
{
	protected $parameters = array();

	static protected $shared = array();

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
		/* With the introduction of the static $shared property, 
		** each time you call the getMailer() method, the object 
		** created for the first call will be returned.
		*/
		if (isset(self::$shared['user'])):
	      	return self::$shared['user'];
	    endif;

		$class = $this->parameters['user.class'];
		//dump($class);exit;
		$user = new $class();
		$user->setSessionStorage($this->getSessionStorage());

		//return $user;
		return self::$shared['user'] = $user;
	}
}

define('SESSION_ID_CHILENETWORK', 'SESSION_ID_COSOasdfasdf');