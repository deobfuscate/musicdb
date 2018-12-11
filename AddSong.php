<!DOCTYPE html>
<html>
<body style="background-color:rgb(166, 192, 179);">

<h2>Welcome to MusicDB </h2>
<h3> Join the largest music database in the world! </h3>
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
VALUES ('$userID', '$userPassword', '$title', '$artist', '$album', STR_TO_DATE('$releaseYear', '%Y'))";
	if ($dbc->query($sql) === TRUE) {
		echo "Song added successfully<br>\n";
		echo "<a href=\"./\">Go Back</a>";
	}
	else {
		//echo "Error: " . $sql . "<br>" . $dbc->error;
		echo "Could not add song! Are you sure your username and password are correct?<br>";
		echo "<a href=\"./\">Go Back</a>";
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
	</body>
</html>
