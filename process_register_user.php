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






//check whether the form has been submitted
if(isset($_POST['register_user'])){

	/*
	echo "<pre>";
	print_r($_POST);
	echo "</pre>";
	*/




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
		echo "Welcome {$firstname} {$lastname}";


		//send email
		//Instantiation and passing `true` enables exceptions
		$mail = new PHPMailer(true);
		try {
		    //Server settings
		    $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
		    $mail->isSMTP();                                            //Send using SMTP
		    $mail->Host       = 'smtp.gmail.com';              //Set the SMTP server to send through
		    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
		    $mail->Username   = 'testwitholu@gmail.com';                     //SMTP username
		    $mail->Password   = 'put your own password here';                               //SMTP password
		    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;         //Enable TLS encryption; `PHPMailer::ENCRYPTION_SMTPS` encouraged
		    $mail->Port  = 587; //TCP port to connect to, use 465 for `PHP  ` above

		    //Recipients
		    $mail->setFrom('no-reply@learnwitholu.com', 'Welcome New User');
		    $mail->addAddress('testwitholu@gmail.com', "{$firstname} {$lastname}");     //Add a recipient
		   

		    //Content
		    $mail->isHTML(true); //Set email format to HTML
		    $mail->Subject = 'A new User has registered';
		    $mail->Body    = "firstname: {$firstname}<br>
		    				  lastname: {$lastname}<br>
		    				  email: {$email}<br>
		    				  password: {$password}";
		   

		    $mail->send();
		    echo 'Message has been sent';
		} catch (Exception $e) {
		    echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
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