<?php
	include("password.php");
	DEFINE ("DB_HOST", "localhost");
	DEFINE ("DB_USER", "musicdb");
	DEFINE ("DB_NAME", "musicdb");
	
	if ($dbc = @mysqli_connect(DB_HOST, DB_USER, $password, DB_NAME)) {
		//print "<p>Successfully connected!</p>";
	}
	else {
		die("<p style=\"color: red;\">Could not connect to MySQL:<br>".mysqli_connect_error()."</p>");
	}
?>