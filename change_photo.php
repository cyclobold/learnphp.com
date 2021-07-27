<?php
require 'includes/user_data.php';

echo "

<h3>Welcome home {$firstname} {$lastname}</h3>

<hr>

<h4>Update Profile Photo</h4>
<a href='profile.php'>Update Profile</a> | 
<a href='logout.php'>Log out</a> |


";
?>
<a href='change_photo.php'>Change Profile Photo</a> | 
<!--<a href='delete_user_account.php'>Delete Account</a>-->
<a href='#' onclick="confirmDelete()">Delete Account</a>

<?php require "process_photo_upload.php"; ?>
<form action='' method='POST' style='margin-top: 40px;' enctype="multipart/form-data">
	
	<div>
		<label>Upload Photo</label>
		<input type='file' name='upload'>
	</div>

	<div style='margin-top: 20px;'>
		<button type='submit' name='update_profile'>Save Photo</button>
	</div>
</form>

<script type="text/javascript">
	
</script>










