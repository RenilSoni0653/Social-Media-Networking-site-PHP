<?php
	if(isset($_POST['submit']))
	{		
		$email1 = $_POST['email'];
		$pwd1 = $_POST['pwd'];
						
		$email = "admin@gmail.com";
		$pwd = "admin123";
							
		if(strcmp($email,$email1)==0 and strcmp($pwd,$pwd1)==0)
		{
			echo "<script>window.alert('Logged in Succesfully..');</script>";
			echo "<script>window.location.href='home1.php'</script>";
		}
		else
		{
			echo "<script>window.alert('Login Failed');</script>";
			echo "<script>window.location.href='signin_form-admin.php'</script>";
		}
	}
?>