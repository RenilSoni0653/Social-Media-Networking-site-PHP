<?php

include('includes/database.php');

$get_id =$_GET['id'];
	
	// sending query
	mysqli_query($connection,"DELETE FROM photos WHERE photo_id = '$get_id'")
	or die(mysql_error());  	
	header("Location:photos.php");

?>
