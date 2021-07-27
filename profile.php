<?php
require 'includes/user_data.php';

echo "

<h3>Welcome home {$firstname} {$lastname}</h3>

<hr>

<h4>Update Profile</h4>
<a href='profile.php'>Update Profile</a> | 
<a href='logout.php'>Log out</a> |


";
?>
<a href='change_photo.php'>Change Profile Photo</a> | 
<!--<a href='delete_user_account.php'>Delete Account</a>-->
<a href='#' onclick="confirmDelete()">Delete Account</a>

<?php require "process_update_profile.php"; ?>
<form action='' method='POST' style='margin-top: 40px;'>
	<div>
		<label>First name</label>
		<input type='text' name='firstname' value="<?php echo $firstname; ?>">
	</div>

	<div>
		<label>Last name</label>
		<input type='text' name='lastname' value="<?php echo $lastname; ?>">
	</div>

	<div>
		<label>Password</label>
		<input type='password' name='password'>
		<small>For confirmation</small>
	</div>

	<div style='margin-top: 20px;'>
		<button type='submit' name='update_profile'>Apply Changes</button>
	</div>
</form>

<script type="text/javascript">
	
	function confirmDelete(){

		const option = confirm("Do you want to delete account?");

		


	}
</script>









