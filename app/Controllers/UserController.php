<?php

namespace App\Controllers;

require './config.php';

use App\Controllers\ViewController;
use App\Models\User;
use App\Models\Database;
use App\Controllers\LoginController;
use Aura\Session\SessionFactory;

new Database();

//Initialize Illuminate Database Connection

	class UserController extends Database {

	    public static function create_user(){

	    	$username = $_POST['username'];
	    	// validate if the name contain only letters
			$username_regex = preg_match("/^([a-zA-Z]).{3,25}/", $username);
			if ($username_regex == true) {
				$username = ucwords($username);
			}else{
				die("user name invalid");
			}
	    	
	    	$email = $_POST['email'];
	    	// validate if the email have valid format
	    	if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
	    		die("Invalid email address");
			}

	    	$password = $_POST['password'];
			// validate if the password contain at least one numeric char
			$password_regex = preg_match('^(?=.*\d)(?=.*[a-zA-Z]).{6,16}$^', $password);
			if ($password_regex == true) {
	    		$password = base64_encode($password);
			}else {
				die("your password must have ant least one NUMBER and be longer than 4 character to 16");
			}

	    	$country = $_POST['country'];
			
			// validate if email exist
	    	$mail_uniq = User::where('email',$email)->first();
	    		if (!empty($mail_uniq)) {
	    			die("mail alredy exist");
	    		}

        	$user = User::create(['username'=>$username,'country'=>$country,'email'=>$email,'password'=>$password]);
        	// return $user;
        	header("Location:".URL."users_list");
		        	
			// }
	  	}


	  	public static function delete_user($id){

	  		$session = LoginController::session_status();
	  		
	  		$user = User::where('id',$id)->delete();
	  		header("Location:".URL."users_list");
	  	}

	  	public static function edit($id){
	  		
	  		$session = LoginController::session_status();

	  		$user = User::where('id', $id)->first();
	  		$view = new ViewController('User');
	  		$view->assign('user',$user);
	  	}

	  	public static function edit_user($id){
	  		
	  		// $user = User::where('id', $id)->where('email', $_POST['email'])->save();
	  		$session = LoginController::session_status();

	  		$user= User::where([['id', $id],['email', $_REQUEST['email']]])
	  					->update(['username'=>$_POST['username'],'country'=>$_POST['country'],'password'=>$_POST['password']]);
	  		header("Location:".URL."users_list");
	  	}

	  	public static function get_users(){

	  		$session = LoginController::session_status();

	  		if ((!empty($_REQUEST['filter']))) {
	  			$users = User::where('email','LIKE','%'.$_REQUEST['filter'].'%')->orWhere('username','LIKE','%'.$_REQUEST['filter'].'%')->get();
	  		}else{
		  		$users = User::all();			
	  		}

			$view = new ViewController('UsersList');
    		$view->assign('users',$users);
	  	}

	}
