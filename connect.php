<?php

	//Default settings of easyphp
	$conn = new mysqli("localhost", "root", "", "todolist");
	


	
	// Check connection
	if ($conn->connect_error) {
		die("Connection failed: " . $conn->connect_error);
	} 
	//using some javascript here. Comment this out once you can verify your connections work.
	//echo "<script type='text/javascript'>alert('You have connected to your database successfully!')</script>";
	//mysqli_select_db($conn, $dbname) or die("Couldn't connect to database.");
	//Return the connection
	return $conn;
?>

