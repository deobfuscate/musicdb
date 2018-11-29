<?php
include("mysql.php");
/*$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";	
	
$conn = new msqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}
*/
//above lines except for 2 not needed

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