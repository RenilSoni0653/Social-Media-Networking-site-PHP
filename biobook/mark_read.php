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
<br>
<center><table width=70% style="font-size:30px;color:white;">
<tr>
<td>User_id</td>
<td>Feedback_content</td>
<td>Ratings</td>
</tr>

<?php
include "includes/database.php";

$res = mysqli_query($connection,"SELECT * FROM feedback where status=1");

while($row = mysqli_fetch_array($res))
{
	echo "<tr>";
	echo "<td>".$row['users_id']."</td>";
	echo "<td>".$row['content']."</td>";
	echo "<td>".$row['rating']."</td>";
	echo "</tr>";
}

?>
<tr></tr><tr></tr><tr></tr><tr></tr>
<td></td>
<td><center><a href="admin_feedback.php" title="Home"><button class="btn-sign-in" value="back">Back</button></a></td>
</table>

</body>
</html>