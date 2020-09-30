<?php
include('session.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    $current_id = $_POST['id'];
	
    if(isset($_POST['remove'])) 
	{
        $sql3 = "DELETE FROM friendship
                 WHERE ((friendship.user1_id = $current_id AND friendship.user2_id = {$_SESSION['user_id']})
                 OR (friendship.user1_id = {$_SESSION['user_id']} AND friendship.user2_id = $current_id))
                 AND friendship.friendship_status = 1";
				 	
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