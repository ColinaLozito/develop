<?php 

namespace App\Controllers;

require_once('./core/View.php');
// require_once('./core/url.php');

	class IndexController
	{		
		public static function index()
		{
			// $url = url(); //path to the form method

			$view = new view('Login');
    		// $view->assign();
		}
		public static function register()
		{
			// $url = url(); //path to the form method

			$view = new view('Register');
    		// $view->assign();
		}
		public static function get()
		{
			// $view = new view('index');
    		// $view->assign('','');
		}
	}
