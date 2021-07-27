<?php
	require "includes/user_data.php";

	require "database/connect.php";

	$delete_query = "DELETE FROM `users` WHERE id=$id LIMIT 1";

	//run the query
	$result = mysqli_query($connection, $delete_query);

	if($result){

		//user deleted ...
		header("Location: logout.php");

	}


?>