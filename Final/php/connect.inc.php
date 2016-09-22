<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "a_database";

	$mysqli = new mysqli($servername, $username,$password, $db) or die("unable to connect");
	
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
    	exit();
	}

//??????
define('DB_HOST', 'localhost');
//???
define('DB_USER', 'root');
//??
define('DB_PASSWORD', '');
//????
define('DB_NAME','a_database') ;

?>