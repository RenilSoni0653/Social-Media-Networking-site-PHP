<?php
	include "includes/database.php";
	
	$id = $_GET['user_id'];
	
	$qu = mysqli_query($connection,"DELETE FROM a_user where user_id='$id'");
	
	if($qu)
	{
		echo "<script>alert('Account successfully deleted!'); </script>";
		echo "<script>window.location.href='delete_form.php'</script>";
	}
	else
	{
		echo "No";
	}
?>