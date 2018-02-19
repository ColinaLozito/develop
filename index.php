<?php  
// Load the autoload dependencies file
require 'vendor/autoload.php';

// define and declare the BASE URL as global
require 'core/url.php';
$url = url();
define('URL',$url);

// define and declare the COUNTRIES as global
require 'core/countries.php';
define('COUNTRIES',$countries);

// Load the html structure
require 'views/header.php';

// Load all ROUTES
require 'Routes.php';

?>	