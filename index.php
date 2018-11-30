<?php
	include("mysql.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Music DB</title>
</head>
<body>
	<h1>Music DB</h1>
	<a href="SignUpForm.html">Sign Up</a> |
	<a href="DeletePage.html">Delete Page</a> |
	<a href="AddSong.html">Add a Song</a><br>
<?php
	$sql = $dbc->query('SELECT * FROM Song WHERE 1');
	while ( $song = $sql->fetch_assoc() ) {
    	echo "{$song['artist']} - {$song['title']} - {$song['album']} - {$song['releaseYear']} <br>";
	}
	$sql->free();
	$dbc->close();
?>
</body>
</html>
