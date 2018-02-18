<?php  
require 'core/url.php';
require 'core/countries.php';

$url = url();
define('URL',$url);
define('COUNTRIES',$countries);

require_once('views/header.php');
require_once('Routes.php');
require 'vendor/autoload.php';

?>