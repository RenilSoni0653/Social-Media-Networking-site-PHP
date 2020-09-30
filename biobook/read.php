<?php
	include "includes/database.php";
	
	$id = $_GET['users_id'];
	$feed_id=$_GET['feed_id'];
	
	$qu = mysqli_query($connection,"update feedback set status=1 where feed_id='$feed_id' and users_id='$id'");
	header("location:admin_feedback.php");
?>