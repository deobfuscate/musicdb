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