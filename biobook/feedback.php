<?php
function time_stamp($session_time) 
{ 
 
$time_difference = time() - $session_time ; 
$seconds = $time_difference ; 
$minutes = round($time_difference / 60 );
$hours = round($time_difference / 3600 ); 
$days = round($time_difference / 86400 ); 
$weeks = round($time_difference / 604800 ); 
$months = round($time_difference / 2419200 ); 
$years = round($time_difference / 29030400 ); 

if($seconds <= 60)
{
echo"$seconds seconds ago"; 
}
else if($minutes <=60)
{
   if($minutes==1)
   {
     echo"one minute ago"; 
    }
   else
   {
   echo"$minutes minutes ago"; 
   }
}
else if($hours <=24)
{
   if($hours==1)
   {
   echo"one hour ago";
   }
  else
  {
  echo"$hours hours ago";
  }
}
else if($days <=7)
{
  if($days==1)
   {
   echo"one day ago";
   }
  else
  {
  echo"$days days ago";
  }


  
}
else if($weeks <=4)
{
  if($weeks==1)
   {
   echo"one week ago";
   }
  else
  {
  echo"$weeks weeks ago";
  }
 }
else if($months <=12)
{
   if($months==1)
   {
   echo"one month ago";
   }
  else
  {
  echo"$months months ago";
  }
 
   
}

else
{
if($years==1)
   {
   echo"one year ago";
   }
  else
  {
  echo"$years years ago";
  }

}
 
} 

?>

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

	<div id="container">
	
		<div id="left-nav">
				
				<div class="clip1">

				<img src="<?php echo $row['profile_picture'] ?>">
				</div>
				
				<div class="user-details">
					<h3><?php echo $firstname ?>&nbsp;<?php echo $lastname ?></h3>
					<h2><?php echo $username ?></h2>
				</div>
		</div>
		
		
		
		<div id="right-nav">
			<h1>Feedback</h1>
	<div>
			<form method="post" action="feed.php" enctype="multipart/form-data">
				<textarea placeholder="Whats on your mind?" name="content" class="post-text" required></textarea>
				
				<center><label>Enter Your Ratings :  </label>
				<select name="rating">
				<option>1</option>
				<option>2</option>
				<option>3</option>
				<option>4</option>
				<option>5</option>
				</select>
				<button class="btn-share" name="Submit" value="Log out">Share</button>
			</form>
	</div>
	
		</div>
		
<?php
	include("includes/database.php");
			$query1="SELECT * from `a_user` where user_id='$id' order by `user_id` DESC";
			$query=mysqli_query($connection,$query1);
			$query3=mysqli_query($connection,"SELECT photo_id from `photos` where `user_id`='$id' ");
			while($row=mysqli_fetch_array($query)){
				$id = $row['user_id'];
				
?>	
		<div id="left-nav1">
			<h2>Personal Info</h2>
			<table>
				<tr>
					<td><label>Username:</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['username']; ?></b></td>
				</tr>
				<tr>
					<td><label>Birthday :</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['birthday']; ?></b></td>
				</tr>
				<tr>
					<td><label>Gender :</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['gender']; ?></b></td>
				</tr>
				<tr>
					<td><label>Contact :</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['num']; ?></b></td>
				</tr>
				<tr>
					<td><label>Email:</label></td>
					<td width="20"></td>
					<td><b><?php echo $row['email']; ?></b></td>
				</tr>
				<tr>
					<td><label>Image :</label></td>
					<td width="20"></td>
					<td><img src="<?php echo $row['profile_picture']; ?>"></td>
				</tr>
			</table>
		</div>
<?php
}
?>

<?php
			include("includes/database.php");
			$query=mysqli_query($connection,"select * from a_user where user_id='$id'");
			$row1=mysqli_fetch_array($query);
			
			$query1=mysqli_query($connection,"SELECT * from feedback where users_id='{$_SESSION['user_id']}' and status=0") or die (mysqli_connect_errno());
			
			
				while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
				{
					$posted_by = $row1['firstname']." ".$row1['lastname'];
					
					$profile_picture = $row1['profile_picture'];
					$content=$row['content']; 
					$feed_id = $row['feed_id'];
					$rating=$row['rating'];
					$time=$row['created'];	
			
?>
		<div id="right-nav1">
			<div class="profile-pics">
			<img src="<?php echo $profile_picture ?>">
			<b><?php echo $posted_by ?></b>
			<strong><?php echo $time = time_stamp($time); ?></strong>
			</div>
		<br />
			<div class="post-content">
				<?php
				
				
				echo '<div class="delete-post">';
				echo '<a href="delete_feed.php?id='.$feed_id. '" title="Delete your Feedback"><button class="btn-delete">X</button></a>';
				echo '</div>';
				
				?>
				<p><?php echo "&nbsp;Feedback : ".$row['content'];?><br>
				&nbsp;<?php echo " Ratings &nbsp;&nbsp;&nbsp;: ".$row['rating'];?></p>
			
			
				
				<br>
		
		</div>
	</div>
</div>

			<?php
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
						
						echo '<a href="frndprofile.php?id=' . $row['user_id'] . '" class="my-button" style="width:70%">' . $row['firstname'] . ' ' . $row['lastname'] . '</a>';
						if($row['status']==1)
						{
							echo '&nbsp;&nbsp;<img src= "image/status" width="10px">';
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