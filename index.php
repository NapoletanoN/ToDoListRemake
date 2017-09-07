<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html>
<head>
	<title>Nick Napoletano To-Do List</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
	<div id="Title" class="header">
		<h2> Nick Napoletano To-Do List</h2>
		<form action="add-task.php" method="post">
		<input type ="text" name="new-task" placeholder="Type to add task" autocomplete="off" />
		<input type="submit" value="Add to List">
		</form>
		<form action="delete-task.php" method="post">
		<input type ="text" name="delete-button" placeholder="Type ID to delete task" autocomplete="off"/>
		<input type="submit" value="Delete from List">
		</form>
	</div>
	<div class = "wrap">
     <div class ="task-list">
		<ul style="list-style-type:none">
<?php


	require("connect.php");


	$query = mysqli_query($conn, "SELECT * FROM tasks");
	$numrows = mysqli_num_rows($query);

	if($numrows>0)
	{
		while($row = mysqli_fetch_assoc($query))
		{
			$task_id = $row['TaskID'];
			$task_name = $row['Task'];

		echo '<li>
			'.$task_id.'       '.$task_name.' 
		</form>
		</li>';
		}
	}
?>
	</ul>
     </div>
	</form>
	</div>
</body>
</html>