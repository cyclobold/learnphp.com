<?php
//ini_set("display_errors", 'on');
if(isset($_POST['login_user'])){
	//bring in the connection file
	
	require "database/connect.php";


	//extract data
	$email = trim($_POST['email']);
	$password = trim($_POST['password']);

	//check if fields are empty

	$errors = [];

	if(empty($email)){
		$errors[] = "Please enter email address";
	}

	if(empty($password)){
		$errors[] = "Please enter password";
	}


	if(empty($errors)){
		//there is no error
		//log in the user
		$login_query = "SELECT * FROM `users` WHERE `email` = '$email' AND `password` = '$password'";

		//run the query
		$result = mysqli_query($connection, $login_query);

		//check if query ran
		if($result){
			//the query ran
			if(mysqli_num_rows($result) == 1){
				//there is a match
				
				//Log in the user 
				// 1. Start a session
				session_start();
			
				$_SESSION = mysqli_fetch_array($result, MYSQLI_ASSOC);

				//redirect to user's home page
				header("Location: user.php");
				

			}else{
				//there is no match
			}
		}else{
			//the query did not run
		}



	}else{
		//there are errors
		foreach($errors as $error){
			echo "{$error}<br>";
		}


	}



}