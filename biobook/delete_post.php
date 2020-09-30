<?php

include('includes/database.php');

$get_id =$_GET['id'];

	// sending query
	mysqli_query($connection,"DELETE FROM post WHERE post_id = '$get_id'")
	or die(mysqli_connect_errno());  	
	header("Location: home.php");

?>
