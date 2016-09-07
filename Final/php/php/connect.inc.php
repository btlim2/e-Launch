<?php

	$servername = "localhost";
	$username = "root";
	$password = "";
	$db = "business_register";

	$mysqli = new mysqli($servername, $username,$password, $db) or die("unable to connect");
	
	if ($mysqli->connect_errno) {
		printf("Connect failed: %s\n", $mysqli->connect_error);
    	exit();
	}

?>