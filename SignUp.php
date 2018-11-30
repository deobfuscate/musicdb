<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include("mysql.php");
	// define variables and set to empty values
	$userID = $userPassword = $firstName = $lastName = $genrePref = "";
	$userID = test_input($_POST["username"]);
	$userPassword = test_input($_POST["password"]);
	$firstName = test_input($_POST["firstname"]);
	$lastName = test_input($_POST["lastname"]);
	$genrePref = test_input($_POST["favgenre"]);

	$sql = "INSERT INTO User (userID, password, firstName, lastName, genrePref)
VALUES ({$userID}, {$userPassword}, {$firstName}, {$lastName}, {$genrePref})";
	if ($dbc->query($sql) === TRUE {
		echo "New user created successfully<br>\n";
		echo "<a href="./">Go Back</a>";
	}
	else {
		echo "Error: " . $sql . "<br>" . $dbc->error;
	}
	$dbc->close();
}
?>
