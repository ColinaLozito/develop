<?php 

namespace App\Controllers;

use App\Controllers\LoginController;
use App\Controllers\ViewController;	

	class IndexController
	{		
		public static function index()
		{
			$session = LoginController::get_session();

			if (!empty($session)) {
				header("Location: ".URL."users_list");
			}

			$view = new ViewController('Login');
    		// $view->assign();
		}
		public static function register()
		{
			$session = LoginController::get_session();

			if (!empty($session)) {
				header("Location: ".URL."users_list");
			}

			$view = new ViewController('Register');
    		// $view->assign();
		}

		public static function _404(){
			$view = new ViewController('404');
		}
	}
