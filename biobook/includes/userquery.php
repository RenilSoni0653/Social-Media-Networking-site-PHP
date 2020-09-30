<?php

$query = mysqli_query($connection, $sql);
if(!$query){
    echo mysqli_error($connection);
}
$width = '168px';
$height = '168px';
if(mysqli_num_rows($query) == 0){
    echo '<div class="userquery">';
    echo 'We couldn\'t find any results for these keywords: ' . $key;
    echo '<br><br>';
    echo '</div>';
} else {
    while($row = mysqli_fetch_assoc($query)){
        echo '<div class="userquery">';
        //include 'includes/profile_picture.php';
		echo '<img src= ' .$row['profile_picture']. ' width="120px">';
        echo '<br>';
        echo '<h4><a class="profilelink" href="showprof.php?id=' . $row['user_id'] .'">' . $row['firstname'] . ' ' . $row['lastname'] . '<a></h4>';
        echo '</div>';
        echo '<br>';
    }
}


?>