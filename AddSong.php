<?php
include("mysql.php");
$servername = "localhost";
$username = "username";
$password = "password";
$dbname = "myDB";	
	
$conn = new msqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
	die("Connection failed: " . $conn->connect_error);
}

//above lines except for 2 not needed

$sql = "INSERT INTO Song (title, artist, album, releaseYear,)
VALUES (songTitle, artist, album, releaseYear)"; //I'm not sure what to do about songID yet

if ($conn->query($sql) == TRUE {
	echo "New record created successfully";
} 
else {
	echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>