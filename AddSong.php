<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include("mysql.php");
	// define variables and set to empty values
	$userID = $userPassword = $title = $artist = $album = $releaseYear = "";
	$userID = parseInput($_POST["username"]);
	$userPassword = parseInput($_POST["password"]);
	$title = parseInput($_POST["songTitle"]);
	$artist = parseInput($_POST["artist"]);
	$album = parseInput($_POST["album"]);
	$releaseYear = parseInput($_POST["releaseYear"]);

	$sql = "INSERT INTO Song (userID, password, title, artist, album, releaseYear)
VALUES ('$userID', '$userPassword', '$title', '$artist', '$album', '$releaseYear')";
	if ($dbc->query($sql) === TRUE) {
		echo "Song added successfully<br>\n";
		echo "<a href=\"./\">Go Back</a>";
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