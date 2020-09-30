<?php
include("includes/database.php");
include('session.php');

if(isset($_POST['submit']))
{
	$email = $_POST['email'];
	$pwd = $_POST['pwd1'];
	$pwd1 = $_POST['pwd2'];
	
	if(empty($email) and empty($pwd) and empty($pwd1))
	{
		echo "Please emter Correct data";
		header("location:forgot.php");
	}
	else
	{
		$qu = mysqli_query($connection,"update a_user set pwd='$pwd',password2='$pwd1' where email='$email'");
		header("location:signin.php");
	}
}

?>

<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sin up, Log in, Chat </title>
		<link rel="stylesheet" type="text/css" href="css/signin.css">
	</head>

<body>

	<center><div id="container">
		<div class="sign-in-form">
			<table>
			<h1>Welcome to Biobook</h1>
			<h2>Log in</h2>
	<form method="post" enctype="multipart/form-data">
				<tr>
					<td><label>Email</label></td>
					<td><input type="email" name="email" placeholder="example@gmail.com" class="form-1" title="Enter your email" required /></td>
				</tr>
				<tr>
					<td><label>Password</label></td>
					<td><input type="password" name="pwd1" placeholder="Enter New Password" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>				
					<td><label>Re-enter Password</label></td>
					<td><input type="password" name="pwd2" placeholder="Enter Re-enter password" class="form-1" title="Enter your password" required /></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td></td>
					<td></td>
				</tr>
				<tr>
					<td colspan="2">
					<input type="submit" name="submit" value="Log in" class="btn-sign-in" title="Log in" />
					<input type="reset" name="cancel" value="Cancel" class="btn-sign-up" title="Cancel" />
					</td>
				</tr>
	</form>
			</table>
		<br>
		</div>
	</div>

</body>

</html>