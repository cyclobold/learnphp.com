<?php 
	session_start();
	if(isset($_SESSION['email'])){
		//the user is logged in already
		//therefore dont show the login form
		header('Location: user.php');
		exit();


	}

	include "includes/head.inc.php";
?>

<body>

	<h4>Log in</h4>
	<?php 
		include "process_login_user.php";
	?>
	<form action="" method='POST'>
		
		<div>
			<label>Email</label>
			<input type='email' name='email'>
		</div>

		<div>
			<label>Password</label>
			<input type='password' name='password'>
		</div>

		<div>
			<button type='submit' name='login_user'>Log in</button>
		</div>

		<div class="form-group">
			<h4>Not registered? <a href='register.php'>Sign Up</a></h4>
		</div>



	</form>

	
</body>
</html>