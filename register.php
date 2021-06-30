<?php 
	include "includes/head.inc.php";
?>

<body>
	<?php 
		include "process_register_user.php";
	?>
	<h4>Register</h4>
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



		<div class="form-group">
			<h4>Already registered? <a href='login.php'>Login instead</a></h4>
		</div>



	</form>

	
</body>
</html>