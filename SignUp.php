<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include("mysql.php");
	// define variables and set to empty values
	$userID = $userPassword = $firstName = $lastName = $genrePref = "";
	$userID = parseInput($_POST["username"]);
	$userPassword = parseInput($_POST["password"]);
	$firstName = parseInput($_POST["firstname"]);
	$lastName = parseInput($_POST["lastname"]);
	$genrePref = parseInput($_POST["favgenre"]);

	$sql = "INSERT INTO User (userID, password, firstName, lastName, genrePref)
VALUES ({$userID}, {$userPassword}, {$firstName}, {$lastName}, {$genrePref})";
	if ($dbc->query($sql) === TRUE) {
		echo "New user created successfully<br>\n";
		echo "<a href="./">Go Back</a>";
	}
	else {
		echo "Error: " . $sql . "<br>" . $dbc->error;
	}
	$dbc->close();
}
function parseInput($data) {
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
 	return $data;
}
?>
