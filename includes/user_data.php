<?php
ini_set("display_errors", 'on');
session_start();

//check if user is logged in
if(!isset($_SESSION['email'])){
	header("Location: login.php");
	exit();
}



$firstname = $_SESSION['firstname'];
$lastname = $_SESSION['lastname'];
$email = $_SESSION['email'];
$id = $_SESSION['id'];
