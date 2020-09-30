<?php
include "session.php";
include "includes/database.php";

session_destroy();


$logout=mysqli_query($connection,"update `a_user` set `status`='0' where `user_id`=$id");

header('location:index.php');
?>