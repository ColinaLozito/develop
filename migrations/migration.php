<?php 

require ('../config.php');

$mysqli = new mysqli(DBHOST, DBUSER, DBPASS);

/* check connection */
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}

// Drop DATABASE first after create a new one

$query = "DROP DATABASE ".DBNAME;

$drop = $mysqli->query($query);

if (!$drop) {
	echo "unable to delete DATABASE ".DBNAME."\n";
}else{
	echo "DATABASE ".DBNAME." Droped successfully\n";
}

// Create a DATABASE
$query = "CREATE DATABASE ".DBNAME;

$create = $mysqli->query($query);

if (!$create) {
	print_r("unable to CREATE DATABASE ".DBNAME."\n");
}else {
	echo ("DATABASE ".DBNAME." Created successfully\n");
}


// Create user table

$sql = "CREATE TABLE `users` (
 `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
 `username` varchar(100) DEFAULT NULL,
 `country` varchar(100) DEFAULT NULL,
 `email` varchar(200) DEFAULT NULL UNIQUE,
 `password` varchar(200) DEFAULT NULL,
 `created_at` timestamp NULL DEFAULT NULL,
 `updated_at` timestamp NULL DEFAULT NULL,
 `deleted_at` timestamp NULL DEFAULT NULL,
 PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;";


$mysqli = new mysqli(DBHOST, DBUSER, DBPASS, DBNAME);

if ($mysqli->query($sql) === TRUE) {
    echo "Table ".DBNAME." created successfully";
} else {
    echo "Error creating table ".DBNAME.": " . $mysqli->error;
}

// close database session
$mysqli->close();

?>