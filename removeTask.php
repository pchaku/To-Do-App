<center>
<h2>Delete Task</h2>
<a href = "main.php"><button style = "background-color:#B6BDF7;padding:5px">Main Menu</button></a>
<br><br><br>
<form action="delete.php" method="POST">
		Task ID to delete: <input type = "text" name = "taskID"> <br><br>
		<input style = "padding: 5px; background-color:#AFF13B" type = "submit">
</form>
</center>
<?php 
include("view.php");
?>