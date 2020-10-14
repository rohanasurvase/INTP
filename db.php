<?php
	$server = "localhost";
	$username = "Admin";

	$password = "admin";
	$db ="intp";
	// Create connection
	$conn = mysqli_connect($server, $username, $password, $db);


	// Check connection
	if (!$conn) {
	  die("Connection failed: " . mysqli_connect_error());
	  }
?>
