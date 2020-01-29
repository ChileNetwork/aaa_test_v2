<?php 
//declare(strict_types=1);

//use App\Factory\RouteFactory;
//use DI\ContainerBuilder; 
/*
* Dependency injection is where components are given their dependencies through their constructor, methods 
* directly into fields;
*/
use App\User;
use App\SessionStorage;
require_once __DIR__ . '/../vendor/autoload.php';

//$_SESSION['language'] = 'es';

//$user_language = $_SESSION['language'];

//$user = new User();
//$user->setLanguage('es');
//$user_language = $user->getLanguage();

$storage = new SessionStorage('SESSION_ID_CHILENETWORK');
//Constructor Injection:
//$user = new User($storage);//

//Property Injection:
$user = new User();//$storage
$user->setSessionStorage($storage);

dump($user);