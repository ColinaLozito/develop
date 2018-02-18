<?php 

	// GET BASE URL
	function url()
	{
		$url = $_SERVER['REQUEST_URI']; //returns the current URL
		$parts = explode('/',$url);
		$dir = $_SERVER['SERVER_NAME'];
		return "http://".$dir."/".$parts[1]."/";
	}


