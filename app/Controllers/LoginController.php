<?php 

namespace App\Controllers;

require './config.php';
use App\Models\User;
use App\Models\Database;
use Aura\Session\SessionFactory;

new Database();

class LoginController {


	public static function login(){
		
		$email = $_REQUEST['email'];
		$password = $_REQUEST['password'];
		$password = base64_encode($password);

		$user = User::where('email', $email)->where('password', $password)->first();

		$session = SessionFactory::newInstance($_COOKIE);
		$segment = $session->getSegment('Aura\Session\SessionFactory');
		$segment->set('user', $user);

		if (!empty($segment->get('user'))) {
			header("Location:".URL."users_list");
		}else{
			header("Location:".URL);
		}
	}

	public static function get_session(){
		$session = SessionFactory::newInstance($_COOKIE);
		$segment = $session->getSegment('Aura\Session\SessionFactory');
		$session = $segment->get('user');
		return $session;
	}

	public static function session_status(){
		$session = SessionFactory::newInstance($_COOKIE);
		$segment = $session->getSegment('Aura\Session\SessionFactory');
		$session = $segment->get('user');

		if (!empty($session)) {
			return $session = $segment->get('user');
		}else{
			header("Location:".URL);
		}
	}

	public static function logout(){

		$session = SessionFactory::newInstance($_COOKIE);
		$session->destroy();
		header('Location: '.URL);		
	}

}