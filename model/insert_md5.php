<?php
    $servername = "localhost";
    $username   = "root";
    $password   = "";
    $dbname     = "consultorio";
    //--Create DB connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    //--SQL Query
	$sql = "INSERT INTO login (user, pass, permiso) VALUES ('admin',md5('admin'),1) ";
	if ($conn->query($sql) === TRUE)
	{
		echo "ok";
	}
	else
	{
		echo "Error: " . $sql . "<br>" . $conn->error;
	}
	$conn->close();
?>