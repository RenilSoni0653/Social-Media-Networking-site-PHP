<?php
	include "includes/database.php";
	
	$id1 = $_GET['user1_id'];
	$id2=$_GET['user2_id'];
	
	$qu = mysqli_query($connection,"update report set status=1 where user1_id='$id1' and user2_id='$id2'");
	header("location:admin_report.php");
?>