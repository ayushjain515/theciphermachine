<?php


// 1. Create a database connection
$connection = mysql_connect('localhost','root','');
if (!$connection) {
	die("Database connection failed: " . mysql_error());
}

// 2. Select a database to use 
$dbselect = mysql_select_db('user',$connection);
if (!$dbselect) {
	die("Database selection failed: " . mysql_error());
}
?>
