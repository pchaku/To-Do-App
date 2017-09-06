<center><h2>To Do List</h2><br></center>
<?php
// Connecting, selecting database
$db = mysql_connect('localhost', 'root', '')
or die('Could not connect: ' . mysql_error());
//echo 'Connected successfully';
mysql_select_db('pooja') or die('Could not select database');

$query = 'select * from tasks';
$result = mysql_query($query) or die('Query failed' . mysql_error());

echo "<table align = \"center\" border = \"1\" style=\"width:40%\" cellpadding = \"10\">";
echo "<tr><td> ID </td> <td> Task </td></tr>";
while ($line = mysql_fetch_array($result, MYSQL_ASSOC)) {
	echo "<tr>";
	foreach ($line as $col_value) {
		echo "<td>$col_value</td>";
	}
	echo "</tr>";
}
echo "</table>";

?>
<br><br>
<center><a href = "main.php"><button style = "background-color:#B6BDF7;padding:5px">Main Menu</button></a></center>
