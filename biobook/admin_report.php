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
<center><a href="ignored.php" title="Ignored"><button class="btn-sign-in" value="Ignore">Ignored</button></a>
<br>
<center><table width=70% style="font-size:30px;color:white;">
<tr>
<td>User1_name</td>
<td>User2_name</td>
<td>Content</td>
</tr>

<?php
include "includes/database.php";

$res = mysqli_query($connection,"SELECT * FROM report where status=0");

while($row = mysqli_fetch_array($res))
{
	echo "<tr>";
	echo "<td>".$row['user1_id']."</td>";
	echo "<td>".$row['user2_id']."</td>";
	echo "<td>".$row['report_text']."</td>";
	echo "<td><a href = \"ignore.php?user1_id=$row[user1_id]&user2_id=$row[user2_id]\" onClick=\"return confirm('Are You Sure Do you Want to ignored it ?')\"><button class=\"btn-sign-in\" value=\"Ignore\">Ignore</button></a> | <a href = \"del.php?user1_id=$row[user1_id]&user2_id=$row[user2_id]\" onClick=\"return confirm('Are You Sure Do you Want to Delete it ?')\"><button class=\"btn-sign-in\" value=\"delete\">Delete</button></a></td>";
	echo "</tr>";
}

?>
<tr></tr><tr></tr><tr></tr><tr></tr>
<td></td>
<td><center><a href="home1.php" title="Home"><button class="btn-sign-in" value="back">Back</button></a></td>
</table>

</body>
</html>