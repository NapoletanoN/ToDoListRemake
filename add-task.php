<?php
	$task = $_POST['new-task'];
	require("connect.php");
	if($conn->query("INSERT INTO tasks(Task) VALUES('$task')")===TRUE)
	{
	echo "Successfully added into Database";
	}
	else
	{
	echo "Error: Query Failed <br>" . $conn->error;
	}
		

	
	$sql = "SELECT * FROM tasks WHERE Task='$task'";
	$query = $conn->query($sql);

	while( $row = mysqli_fetch_assoc($query) )
	{
		$task_id = $row['TaskID'];
		$task_name = $row['Task'];
	}

	$conn->close();
	

	echo '<li><span>'.$task_name.'</span><img id="$task_id." class="delete-button" width="10px" src="close.svg" /></li>';
	header('Refresh: 0; url=index.php');
?>