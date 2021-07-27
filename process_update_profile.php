<?php
if(isset($_POST['update_profile'])){
	require "database/connect.php";
	$firstname = trim($_POST['firstname']);

	$lastname = trim($_POST['lastname']);


	$password = trim($_POST['password']);

	if(isset($_SESSION['email'])){
		//that means a user is logged in
		
		$email = trim($_SESSION['email']);


		//check if the user exists
		$check_user_query = "SELECT * FROM `users` WHERE
							`email`='$email' AND
							`password`='$password'";

		$check_result = mysqli_query($connection, $check_user_query);

		if($check_result){
			//the check query ran
			
			if(mysqli_num_rows($check_result) == 1){

				//there is a match, 
				//therefore we can update the user's info
				$update_user_query = "UPDATE `users` SET 
							`firstname` = '$firstname', 
							`lastname` ='$lastname' WHERE 
							`email` = '$email' AND 
							`password` = '$password'";

				//run the query
						$result = mysqli_query($connection, $update_user_query);

				if($result){

							echo "<script>
									alert('Names updated!');
								</script>";

							$_SESSION['firstname'] = $firstname;
							$_SESSION['lastname'] = $lastname;

							header('Location: profile.php');


						}else{

							echo "There was an error while attempting to update your profile";

						} 
 
			}else{
				//there is no match for the user
				echo "Invalid User";
			}


		}else{
			//the check query failed
		}


	}else{
		//No user is logged in
		header("Location: login.php");
		exit();

	}



}