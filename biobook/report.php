<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css/home.css">
	</head>

<body>

<header class="my-display-container my-wide bgimg my-grayscale-min" id="home">
<br><h1 class="my-center" style="color:white">Biobook</h1>
  <div class="my-display-middle my-text-black my-center header " id="header">
  
	<!--<br><br><br><br><br><ul style="color:white">
		<li>BioBook</li>
	</ul>-->
  </div>
</header>
<?php include ('session.php');?>

<nav class="my-sidebar my-bar-block my-card my-top my-medium my-animate-left" style="background-color:black;color:white;display:none;z-index:2;width:18%;min-width:300px" id="mySidebar">
	<div id="header">
		<div class="head-view">
		<div class="globalsearch">
			<ul>
				<br><li><a href="home.php" title="Biobook"><b>biobook</b></a></li>
				<li></li>
				<li><a href="javascript:void(0)" onclick="my_close()" class="my-bar-item my-button">☰</a></li>
				<li><a href="timeline.php" title="<?php echo $username ?>"><label><?php echo $username ?></label></a></li><br>
				<li><a href="home.php" title="Home"><label class="active">Home</label></a></li><br>
				<li><a href="profile.php" title="Home"><label>Profile</label></a></li><br>
				<li><a href="photos.php" title="Settings"><label>Photos</label></a></li><br>
				<li><a href="friendreq.php" title="Requests"><label>Requests</label></a></li><br>
				<li><a href="friends.php" title="Friends"><label>Friends</label></a></li><br>
				<li><a href="feedback.php" title="Feedback"><label>Feedback</label></a></li><br>
				<li><a href="logout.php" title="Log out"><button class="btn-sign-in" value="Log out">Log out</button></a></li><br>
				
			</ul>
		</div>
	</div>
</nav>


	<div class="my-top" id="navi">
  <div class="my-black my-large" style="max-width:1400px;margin:auto">
  <form method="get" action="search.php" class="my-display-topmiddle my-small"> <!-- Ensure there are no enter escape characters.-->
						<select name="location">
							<option value="emails">Emails</option>
							<option value="names">Names</option>
						</select> <input type="text" style="width:250px;height:20px" placeholder="Search" name="query" id="query"><input type="submit" value="Search"  class=" my-btn my-button" id="querybutton">
				</form>
    <div class="my-button my-padding-10 my-left" onclick="my_open()">☰</div>
    <div class="my-right my-padding-10 my-button"><a href="logout.php"><img src="image/signout.png" height="25px" width="25px"></img></a></div>
    <div class="my-center my-padding-16"></div>
  </div>
</div>

<script>
// Script to open and close sidebar
function my_open() {
    document.getElementById("mySidebar").style.display = "block";
}
 
function my_close() {
    document.getElementById("mySidebar").style.display = "none";
}
</script>
<br><br>

<?php

if($_SERVER['REQUEST_METHOD'] == 'POST') 
{
	$current_id = $_POST['id'];
	$_SESSION['id']=$current_id;
	
	if(isset($_POST['submit']))
	{	
		$cur=$current_id;
		$content = $_POST['content'];

		$sql3 = "insert into report(user1_id,user2_id,report_text,status) values('$id','$cur','$content',0)";
		
		$query3 = mysqli_query($connection, $sql3);
		
		if(!$query3)
		{
			echo mysqli_error($connection);
		}
		else
		{		
			echo "<script>window.location.href='home.php'</script>";
		}
	}
}

?>

<form method='POST'>

<input type='hidden' name='id' value=<?php echo $_SESSION['id']?>>

<center><label>Why ? </label>&nbsp;&nbsp;
<select name="content">
<option>1</option>
<option>2</option>
<option>3</option>
<option>4</option>
<option>5</option>
</select></center>

<br><br><br><br>

<center><button class="btn-sign-in" value="Submit" name="submit">Submit</button></center><br>

</form>	