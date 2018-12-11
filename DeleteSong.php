<!DOCTYPE html>
<html>
<body style="background-color:rgb(166, 192, 179);">

<h2>Welcome to MusicDB </h2>
<h3> Join the largest music database in the world! </h3>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
	include("mysql.php");
	// define variables and set to empty values
	$username = $password = $songid = "";
	$username = parseInput($_POST["username"]);
	$password = parseInput($_POST["password"]);
	$songid = parseInput($_POST["songID"]);

	$sql = "DELETE FROM Song WHERE SongID=$songid";
	if ($dbc->query($sql) === TRUE) {
		echo "Song deleted successfully<br>\n";
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
	</body>
</html>
