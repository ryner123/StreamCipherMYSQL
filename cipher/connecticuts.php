<?php 
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "multi_login";
$dbStatus = '';
	
  // CREATE CONNECTION TO SQL
	$conn = new mysqli($servername, $username, $password, $dbname);
	if ($conn->connect_error){
		die("Connection failed: " . $conn->connect_error);
	} 
	
	// SELECT THE CURRENT USER LOGGED IN
	$selectLOGGEDIN = "SELECT * FROM Users WHERE activeness = 1 LIMIT 1";
	$selectLOGGEDINshit = $conn->query($selectLOGGEDIN);
	$dbSTatus = "OPEN";











?>
