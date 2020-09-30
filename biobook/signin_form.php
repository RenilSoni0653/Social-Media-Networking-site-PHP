<?php include "session.php" ?>
<?php
include "includes/database.php";
						if(isset($_POST['submit']))
						{
							$email=$_POST['email'];
							$password=$_POST['pwd'];
						
							#$result = "SELECT * FROM `a_user` WHERE `email` = '$email' AND `pwd`='$password'";
							$result="select `user_id`,`email`,`pwd` from `a_user` where `email` like '$email' and `pwd` like '$password'";
							
							$que=mysqli_query($connection,"UPDATE `a_user` SET `status`='1' where `email`='$email'");
							$fireQuery=mysqli_query($connection,$result);
							
							
							if(mysqli_num_rows($fireQuery)>0)
							{
								$row=mysqli_fetch_assoc($fireQuery);
								$_SESSION['user_id']=$row['user_id'];
								//echo "<script>window.alert('Logged in Succesfully..');</script>";
								echo "<script>window.location.href='home.php'</script>";
							}
							else
							{
								echo "<script>window.alert('Login Failed');</script>";
								echo "<script>window.location.href='signin.php'</script>";
							}
							/*$row1 = mysql_fetch_array($result);
							$count = mysql_num_rows($result);				
							
								if ($count == 0) 
									{
									echo "<script>alert('Please check your username and password!'); window.location='signin.php'</script>";
									} 
								else if ($count > 0)
									{
										session_start();
										$_SESSION['id'] = $row['user_id'];
										header("location:home.php");
									}*/
						
						}
?>