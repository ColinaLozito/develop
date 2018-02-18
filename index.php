<?php  
require 'core/url.php';
require 'core/countries.php';
$url = url();
define('URL',$url);
define('COUNTRIES',$countries);

require_once('views/header.php');
require_once('Routes.php');
require 'vendor/autoload.php';
// require_once('start.php');

// $loader = new Twig_Loader_Filesystem('views');
// $twigh = new Twig_Environment($loader);

// echo $twigh->render('index.twig', ['name'=>'Luis']);

// $user = UserController::create_user('user1','colombia','user1@example.com','123456');

?>