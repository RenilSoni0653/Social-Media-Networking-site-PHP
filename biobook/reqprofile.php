<?php
include('session.php');
echo '<div class="profile">';
echo '<center>';
$id=$_GET['id'];
$query1="SELECT * FROM `a_user` WHERE `user_id` ='$id'";
$query=mysqli_query($connection,$query1);
$row = mysqli_fetch_array($query);

$fname=$row['firstname'];
//echo $fname;
// Name and Nickname
if(!empty($row['username']))
    echo $row['firstname'] . ' ' . $row['lastname'] . ' (' . $row['username'] . ')';
else
    echo $row['firstname'] . ' ' . $row['lastname'];
echo '<br>';
// Profile Info & View
$width = '168px';
$height = '168px';
//include 'includes/profile_picture.php';
echo '<br>';
// Gender
if($row['gender'] == "M")
    echo 'Male';
else if($row['gender'] == "F")
    echo 'Female';
echo '<br>';
// Status
/*if(!empty($row['status'])){
    if($row['user_status'] == "S")
        echo 'Single';
    else if($row['user_status'] == "E")
        echo 'Engaged';
    else if($row['user_status'] == "M")
        echo 'Married';
    echo '<br>';
}*/
// Birthdate
echo $row['birthday'];
// Additional Information
/*if(!empty($row['user_hometown'])){
    echo '<br>';
    echo $row['user_hometown'];
}
if(!empty($row['user_about'])){
    echo '<br>';
    echo $row['user_about'];
}*/
// Friendship Status
//if($flag == 1){
    echo '<br>';
    if(isset($row['friendship_status'])) {
        if($row['friendship_status'] == 1){
            echo '<form method="post">';
            echo '<input type="submit" value="Friends" disabled="disabled" id="special">';
            echo '</form>';
        } else if ($row['friendship_status'] == 0){
            echo '<form method="post">';
            echo '<input type="submit" value="Request Pending" disabled="disabled" id="special">';
            echo '</form>';
        }
    } else {
		
        echo '<form method="post">';
		$id=$_GET['id'];
		$query1="SELECT `profile_picture` from `a_user` where user_id='$id' ";
		$query=mysqli_query($connection,$query1);
		while($row=mysqli_fetch_array($query))
		{
				//$photo = $row['profile_picture'];
				echo '<img src= ' .$row['profile_picture']. ' width="168px">';
				//echo $photo.'<br>';
		}
		//echo '<img src= ' .$row['profile_picture']. '>';
		echo '<br>';
		echo $fname." ".$row['lastname'].'<br>';
        echo '<input type="submit" value="Send Friend Request" name="request">';
        echo'</form>';
		
    }
//}
echo '<a href="home.php"> Go Home</a>';
echo '<center>'; 


/*$query4 = mysqli_query($connection, "SELECT num FROM a_user WHERE user_id = {$row['user_id']}") or die(mysqli_connect_errno());

if(mysqli_num_rows($query4) > 0){
    echo '<br>';
    echo '<div class="profile">';
    echo '<center class="changeprofile">'; 
    echo 'Phones:';
    echo '<br>';
    while($row4 = mysqli_fetch_assoc($query4)){
        echo $row4['a_user'];
        echo '<br>';
    }
    echo '</center>';
    echo '</div>';
}*/

?>

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
            echo mysqli_error($connection);
        }
    } else if(isset($_POST['remove'])) { // Remove
        $sql3 = "DELETE FROM friendship
                 WHERE ((friendship.user1_id = $current_id AND friendship.user2_id = {$_SESSION['user_id']})
                 OR (friendship.user1_id = {$_SESSION['user_id']} AND friendship.user2_id = $current_id))
                 AND friendship.friendship_status = 1";
        $query3 = mysqli_query($connection, $sql3);
        if(!$query3){
            echo mysqli_error($connection);
        }
    }
}
?>