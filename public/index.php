<?php 
//declare(strict_types=1);

//use App\Factory\RouteFactory;
//use DI\ContainerBuilder; 

use App\User;

require_once __DIR__ . '/../vendor/autoload.php';

//$_SESSION['language'] = 'es';

//$user_language = $_SESSION['language'];

$user = new User();
$user->setLanguage('es');
$user_language = $user->getLanguage();

dump($user);