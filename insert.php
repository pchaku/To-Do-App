<?php
// Connecting, selecting database
$db = mysql_connect('localhost', 'root', '')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('pooja') or die('Could not select database');

$taskName = $_POST['task'];

$query = 'insert into tasks value (NULL, \'' . $taskName . '\')';
//echo "Query is : $query" ;
$execute = mysql_query($query) or die('Query failed' . mysql_error());
mysql_close($db);
?>
<center><a href = "main.php"><button style = "background-color:#B6BDF7;padding:5px">Main Menu</button></a></center>