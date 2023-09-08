<?php
$servername = "localhost";
$username = "dream";
$password = "123456";
$database = "dreamdb";

//create connection with Database

$conn = mysqli_connect($servername, $username, $password, $database);

//check connection
if (!$conn)
	 {
		die("connection failed: " . mysqli_error($conn));
	 }
	
?>