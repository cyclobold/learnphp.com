<?php
//ini_set("display_errors", 'on');
//
//Add PHPMailer
//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
require 'PHPMailer/src/Exception.php';
require 'PHPMailer/src/PHPMailer.php';
require 'PHPMailer/src/SMTP.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;



require "database/connect.php";




//check whether the form has been submitted
if(isset($_POST['register_user'])){



	$firstname = trim($_POST['firstname']);
	$lastname = trim($_POST['lastname']);
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);


	$errors = [];//create an empty array for holding error messages
	//$errors = array();

	if(empty($firstname)){
		$errors[] = "<div class='danger'>Please enter your firstname</div>";
	}
	if(empty($lastname)){
		$errors[] = "<div class='danger'>Please enter your lastname</div>";
	}

	if(empty($email)){
		$errors[] = "<div class='danger'>Please enter your email</div>";
	}

	if(empty($password)){
		$errors[] = "<div class='danger'>Please enter your password</div>";
	}


	//Check if there are error messages inside the errors array
	if(empty($errors)){
		//there are no error messages
		//echo "Welcome ".$firstname." ".$lastname;
		
		//check if this email address has been used before
		$check_email_query = "SELECT * FROM `users` WHERE `email` = '$email'";

		//run the query
		$result = mysqli_query($connection, $check_email_query);

		if($result){
			//the query ran
			if(mysqli_num_rows($result) == 1){
				//the user exists already
				echo "A user has been registered with this email address already!";
			}else{
				//the user does not exist..
				//therefore create the user
				$query = "INSERT INTO `users` (`firstname`, `lastname`, `email`, `password`) VALUES('$firstname', '$lastname', '$email', '$password')";

						//run the query
						$result = mysqli_query($connection, $query);

						if($result){
							echo "User registered successfully!";
						}else{
							echo "We could not register this user at this moment: ".mysqli_error($connection);
						}
			}
		}else{
			//the query failed
		}




	}else{
		//there are error messages
		//Loop through the $errors array
		//This is an example of simple array looping
		foreach($errors as $error){
			echo $error;
		}

	}


}


?>