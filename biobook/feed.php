<?php
	include('includes/database.php');
	include('session.php');
							
							if (isset($_POST["Submit"])) 
							{
							
										$user=$_SESSION['user_id'];
										$content=$_POST['content'];
										$time=time();
										$rating=$_POST['rating'];
										
										
										$update=mysqli_query($connection," INSERT INTO feedback (users_id,content,created,rating,status)
										VALUES ('$id','$content','$time','$rating',0) ") or die (mysqli_connect_errno());
							
									
										
										header('location:feedback.php');					
										
										
								}
							
							
?>