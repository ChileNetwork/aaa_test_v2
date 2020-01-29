<?php 
namespace App;
/*
User class that provides a nice high-level interface
*/


class User
{
	protected $storage;

	public function __construct()
	{
		//$this->storage = new SessionStorage();
		//Hardcode the name in the User class in the SessionStorage constructor
		//$this->storage = new SessionStorage('SESSION_ID');
		$this->storage = new SessionStorage(STORAGE_SESSION_NAME);
	}

	public function setLanguage($language)
	{
		$this->storage->set('language', $language);
	}

	public function getLanguage()
	{
		return $this->storage->get('language');
	}

	// ...
}

//Define a constant outside of the User class:
define('STORAGE_SESSION_NAME', 'SESSION_ID_NINO');