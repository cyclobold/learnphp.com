<?php 
	$connect_user = "root";
	$connect_password = "root";
	$hostname = "localhost";
	$database = "learnphp";

	$connection = mysqli_connect($hostname, $connect_user, $connect_password, $database) or die("Could not connect to the database at the moment");


?>