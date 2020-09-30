<?php
include("includes/database.php");

session_start();

if(!isset($_SESSION['user_id']))
{
	$result="select `user_id` from `a_user`";
	$fireQuery=mysqli_query($connection,$result);
						
	if(mysqli_num_rows($fireQuery)>0)
	{
		$row=mysqli_fetch_assoc($fireQuery);
		$_SESSION['user_id']=$row['user_id'];
	}
}

$id = $_SESSION['user_id'];
$query1="SELECT * FROM `a_user` WHERE `user_id` ='$id'";

$query=mysqli_query($connection,$query1);
$row=mysqli_fetch_array($query);

$cover_picture=$row['cover_picture'];
$profile_picture=$row['profile_picture'];
$firstname=$row['firstname'];
$lastname=$row['lastname'];
$username=$row['username'];

?>