<html>
<head>
	<link rel="stylesheet" type="text/css" href="css/signin.css">
</head>

<body>
<center><div id="header">
<div class="head-view">

	<h1 style="font-size:40px"><b>Biobook</b></h1>

</div>
</div>
<center><a href="mark_read.php" title="Mark as Read"><button class="btn-sign-in" value="Mark as Read">Marked as Read</button></a>
<br>
<center><table width=70% style="font-size:30px;color:white;">
<tr>
<td>User_id</td>
<td>Feedback_content</td>
<td>Ratings</td>
</tr>

<?php
include "includes/database.php";
session_start();

$res = mysqli_query($connection,"SELECT * FROM feedback where status=0");

while($row = mysqli_fetch_array($res))
{
	echo "<tr>";
	$SESSION['feed_id']=$row['feed_id'];
	echo "<td>".$row['users_id']."</td>";
	echo "<td>".$row['content']."</td>";
	echo "<td>".$row['rating']."</td>";
	echo "<td><a href = \"read.php?users_id=$row[users_id]&feed_id=$row[feed_id]\" onClick=\"return confirm('Are You Sure Do you Want to read it ?')\"><button class=\"btn-sign-in\" value=\"read\">Read</button></a></td>";
	echo "</tr>";
}

?>
<tr></tr><tr></tr><tr></tr><tr></tr>
<td></td>
<td><center><a href="home1.php" title="Home"><button class="btn-sign-in" value="back">Back</button></a></td>
</table>

</body>
</html>