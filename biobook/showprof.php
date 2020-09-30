<!DOCTYPE html>
<html>

	<head>
		<title>Welcome  To Biobook - Sign up, Log in, Post </title>
		<link rel="stylesheet" type="text/css" href="css/showprof.css">
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
				<li><a href="home.php" title="Home"><label>Home</label></a></li><br>
				<li><a href="profile.php" title="Home"><label>Profile</label></a></li><br>
				<li><a href="photos.php" title="Settings"><label>Photos</label></a></li><br>
				<li><a href="friendreq.php" title="Requests"><label>Requests</label></a></li><br>
				<li><a href="friends.php" title="Friends"><label>Friends</label></a></li><br>
				<li><a href="feedback.php" title="Feedback"><label>Feedback</label></a></li><br>
				<li><a href="chat.php" title="Chat"><label>Chat</label></a></li><br>
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
	include("includes/database.php");
			$id=$_GET['id'];
			$query=mysqli_query($connection,"SELECT * from `a_user` where `user_id`='$id' order by `user_id` DESC");
			if($query){
			while($test1=mysqli_fetch_array($query,MYSQLI_ASSOC)){
				$id = $test1['user_id'];
				$proimg=$test1['profile_picture'];
				$fname=$test1['firstname'];
				$lname=$test1['lastname'];
				$uname=$test1['username'];
			}
			}
?>

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">
				<img src="<?php echo $proimg ?>"></a>
				</div>
				
				<div class="user-details">
					<h3><?php echo $fname ?>&nbsp;<?php echo $lname ?></h3>
					<h2><?php echo $uname ?></h2>
				</div>
				<center><hr style='width:80%'>
				
				
				<form method="post">
				
				<?php
					$id1 = $_GET['id'];
					
					$sql = "select * from friendship where ((friendship.user1_id=$id1 and friendship.user2_id={$_SESSION['user_id']} and friendship.friendship_status=1)
					or
					(friendship.user2_id=$id1 and friendship.user1_id={$_SESSION['user_id']} and friendship.friendship_status=1))";
					
					$query = mysqli_query($connection, $sql);
					
					if($query)
					{
						if(mysqli_num_rows($query) == 0)
						{
							echo "<input type=\"submit\" value=\"Send Friend Request\" name=\"request\" class=\"my-btn-request my-button-request\">";
						} 
						else 
						{
							echo "<a href=\"chatbox.php?id=$id\"><input type=\"button\" value=\"Send message\" name=\"msg\" class=\"my-btn-request my-button-request\"></a>";
						}
					}
				?>
				
				</form>
				
		</div>
		
		<center><div id="right-nav">
			<h1>Your Photos</h1><hr>
	<div>
			

	</div>
	

<?php
	include("includes/database.php");
			$query=mysqli_query($connection,"SELECT * from `photos` where `user_id`='$id' ");
			if($query){
			while($row=mysqli_fetch_array($query,MYSQLI_ASSOC)){
				$id = $row['photo_id'];
?>

		<div class="photo-select">
			<center>
				<img src="<?php echo $row['location']; ?>">
				
				
			</center>
		</div>
		
<?php
			}}
?>
		</div>

		
	</div>
	
	
	
	<div id="container">
	<div id="right-nav1">
			<h1>Personal Info</h1>
			<hr />
			<br />
			
			<?php
			
			
			$id=$_GET['id'];
			$result=mysqli_query($connection,"SELECT * FROM `a_user` where `user_id`='$id' ");
			
			while($test = mysqli_fetch_array($result))
			{
				$id = $test['user_id'];	
				echo " <div class='info-user'>";
				echo " <div>";
				echo " <label>Firstname</label>&nbsp;&nbsp;&nbsp;<b>".$test['firstname']."</b>";
				echo "</div> ";
				echo "<hr /> ";		
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Lastname</label>&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['lastname']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Username</label>&nbsp;&nbsp;&nbsp;<b>".$test['username']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Birthday</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['birthday']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Gender</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['gender']."</b>";
				echo "</div> ";
				echo "<hr /> ";	
				echo "<br /> ";		
				echo " <div>";
				echo " <label>Number</label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<b>".$test['num']."</b>";
				echo "</div> ";
				
				echo "<br /> ";	
				echo "</div> ";
				echo "<br /> ";	
				echo "<hr /> ";	
				echo "<br /> ";					
				
				
			}
			
			?>
		</div>
		
		
		
	</div>
	
	
	<?php
if(isset($_GET['id']) && $_GET['id'] != $_SESSION['user_id']) {
    $current_id = $_GET['id'];
    //$flag = 1;
} else {
    $current_id = $id;
   // $flag = 0;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') { // A form is posted
    if (isset($_POST['request'])) { // Send a Friend Request
        $sql3 = "INSERT INTO friendship(user1_id, user2_id, friendship_status)
                 VALUES ({$_SESSION['user_id']}, $current_id, 0)";
        $query3 = mysqli_query($connection, $sql3);
        if(!$query3){
            //echo mysqli_error($connection);
        }
    } else if(isset($_POST['remove'])) { // Remove
        $sql3 = "DELETE FROM friendship
                 WHERE ((friendship.user1_id = $current_id AND friendship.user2_id = {$_SESSION['user_id']})
                 OR (friendship.user1_id = {$_SESSION['user_id']} AND friendship.user2_id = $current_id))
                 AND friendship.friendship_status = 1";
        $query3 = mysqli_query($connection, $sql3);
        if(!$query3){
            //echo mysqli_error($connection);
        }
    }
}
?>


	
	
	<nav class="my-sidebar my-bar-block my-card my-medium my-display-bottomright my-animate-bottom" style="background-color:black;color:white;display:none;z-index:2;width:18%;min-width:300px;height:90%" id="mySidebar1">
	<div class="container">
		
			
			<?php
				
				$sql = "SELECT a_user.user_id, a_user.firstname, a_user.lastname, a_user.gender, a_user.profile_picture,a_user.status
						FROM a_user
						JOIN (
							SELECT friendship.user1_id AS user_id
							FROM friendship
							WHERE friendship.user2_id = {$_SESSION['user_id']} AND friendship.friendship_status = 1
							UNION
							SELECT friendship.user2_id AS user_id
							FROM friendship
							WHERE friendship.user1_id = {$_SESSION['user_id']} AND friendship.friendship_status = 1
						) userfriends
						ON userfriends.user_id = a_user.user_id";
				$query = mysqli_query($connection, $sql);
				//$width = '168px';
				//$height = '168px';
				echo '<a href="javascript:void(0)" onclick="my_close1()" class="my-bar-item my-button my-center">FRIENDS</a>';
				if($query){
					if(mysqli_num_rows($query) == 0){
					
						echo 'You don\'t yet have any friends.';
						
					
					} else {
						while($row = mysqli_fetch_array($query)){
						
					   // include 'includes/profile_picture.php';
					
						echo '<img src= ' .$row['profile_picture']. ' width="58px">';
						
						echo '<a href="profile.php?id=' . $row['user_id'] . '" class="my-button" style="width:70%">' . $row['firstname'] . ' ' . $row['lastname'] . '</a>';
						if($row['status']==1)
						{
							echo '&nbsp; <img src= "image/status" width="10px">';
						}
						}
					}
				}
			
			?>
		</div>
	</nav>
	
	
    <div class="my-button my-padding-10 my-display-bottomright" onclick="my_open1()" style="background-color:black;color:white;width:18%;min-width:300px">FRIENDS</div>
    

<script>
// Script to open and close sidebar
function my_open1() {
    document.getElementById("mySidebar1").style.display = "block";
}
 
function my_close1() {
    document.getElementById("mySidebar1").style.display = "none";
}
</script>

</body>
</html>