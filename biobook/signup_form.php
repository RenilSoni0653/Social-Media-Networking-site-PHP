<?php include ('session.php');?>
<?php
	include "includes/database.php";
	
	if(isset($_POST['submit']))
	{	
		$email=$_POST['email'];
	
		$que1=mysqli_query($connection,"select * from a_user where email='$email'");
		$count=mysqli_num_rows($que1);

		if($count > 0)
		{
			echo "<script>
					alert('There is an existing account associated with this email.');window.location='signup.php'
				</script>";
		}
		else
		{
			$firstname=$_POST['firstname'];
			$lastname=$_POST['lastname'];
			$username=$_POST['username'];
			$username2=$_POST['username2'];
			$birthday=$_POST['day']."/".$_POST['month']."/".$_POST['year'];
			$gender=$_POST['gender'];
			$num=$_POST['num'];
			$email=$_POST['email'];
			$email2=$_POST['email2'];
			$password=$_POST['pwd'];
			$password2=$_POST['password2'];
			
			
			if(strcmp($email,$email2)==0 and strcmp($password,$password2)==0)
			{
				$Query = mysqli_query($connection,"INSERT INTO `a_user`(`firstname`,`lastname`,`username`,`username2`,`birthday`,`gender`,`num`,`email`,`email2`,`pwd`,`password2`,`profile_picture`,`cover_picture`,`status`)
				VALUES ('$firstname','$lastname','$username','$username2','$birthday','$gender','$num','$email','$email2','$password','$password2','','',0)");
				
				echo "<script>alert('Account successfully created!'); window.location='signin.php'</script>";
			}
			else
			{
				echo "<script>alert('Account not created successfully!'); window.location='signup.php'</script>";
			}
		}
	}
?>