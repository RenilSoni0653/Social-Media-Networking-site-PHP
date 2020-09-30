<?php
#mysql_select_db('biobook',mysql_connect('localhost','root',''))or die(mysql_error());

$connection=mysqli_connect('localhost','root','','biobook');

if(!$connection)
{
	echo "Not Written in db";
}

?>
