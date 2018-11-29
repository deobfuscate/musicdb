<?php
include("mysql.php");
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";      //CHANGE THESE LATER	
	
$conn = new msqli($servername, $username, $password, $dbname); //establishes connection

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO users (userID, password, firstName, lastName, genrePref)
VALUES (username, password, firstname, lastname, favgenre)";

if ($conn->query($sql) === TRUE {
	echo "New record created successfully";
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>