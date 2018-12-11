<!DOCTYPE html>
<html>
<body style="background-color:rgb(166, 192, 179);">
<h1>Are you sure you want to delete this song?</h1>
<h2>Type in your username and password to confirm</h2>
<form action="DeleteSong.php" method="POST">
  Username:<br>
  <input type="text" name="username"><br>
  Password:<br>
  <input type="text" name="password"><br><br>
  <input type="hidden" name="songID" value="<?php echo $_GET["songid"]; ?>">
  <input type="submit" value="Delete">
</form>
</body>
</html>
