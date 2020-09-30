<?php
include "includes/database.php";
include("session.php");

$id1=$_GET['user1_id'];
$id2=$_GET['user2_id'];

$_SESSION['user_id'] = $id2;

$query = mysqli_query($connection,"delete report,a_user
		from report 
		INNER JOIN a_user
		ON a_user.user_id=report.user2_id
		where
		report.user1_id='$id1'");
				
if(!$query)
{
	echo mysqli_error($connection);
}
else
{		
	echo "<script>window.location.href='admin_report.php'</script>";
}
header("location:admin_report.php");
?>