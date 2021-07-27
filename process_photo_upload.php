<?php 
if(isset($_POST['update_profile'])){

	/*echo "<pre>";
	print_r($_FILES);
	echo "</pre>";
	*/

	$allowed_types = array(
				'image/png',
				'image/jpeg'
		);

	$temporary_storage = $_FILES['upload']['tmp_name'];
	$destination = $_FILES['upload']['name'];
	$mime_type = $_FILES['upload']['type'];


	if(in_array($mime_type, $allowed_types)){
			if(move_uploaded_file($temporary_storage, $destination)){

				//save to database
				

					echo "<strong style='color: green;'> ✔︎ Image uploaded</strong>";




				}
	}else{

		echo "<strong style='color: red;'> ✖︎ Invalid File Format</strong>";

	}

	



}