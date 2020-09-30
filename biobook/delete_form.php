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
<td>User_Name</td>
</tr>

<?php
include "includes/database.php";

$res = mysqli_query($connection,"SELECT * FROM a_user");

while($row = mysqli_fetch_array($res))
{
	echo "<tr>";
	echo "<td>".$row['user_id']."</td>";
	echo "<td>".$row['username']."</td>";
	echo "<td><a href = \"delete_acc_admin.php?user_id=$row[user_id]\" onClick=\"return confirm('Are You Sure Do you Want to Delete ?')\"><button class=\"btn-sign-in\" value=\"delete\">Delete</button></a></td>";
	echo "</tr>";
}

?>
<tr></tr><tr></tr><tr></tr><tr></tr>
<td></td>
<td><center><a href="home1.php" title="Home"><button class="btn-sign-in" value="back">Back</button></a></td>
</table>

</body>
</html>