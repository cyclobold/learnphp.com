<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Register</title>
	<link rel="stylesheet" href="style.css">
</head>


<body>
	<?php 
		include "process_register_user.php";
	?>

	<form action="" method='POST'>
		<div>
			<label>First name</label>
			<input type='text' name='firstname'>
		</div>

		<div>
			<label>Last name</label>
			<input type='text' name='lastname'>
		</div>

		<div>
			<label>Email</label>
			<input type='email' name='email'>
		</div>

		<div>
			<label>Password</label>
			<input type='password' name='password'>
		</div>

		<div>
			<button type='submit' name='register_user'>Register</button>
		</div>



	</form>

	
</body>
</html>