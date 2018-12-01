<?php
	include("mysql.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
#myInput {
  background-image: url('/css/searchicon.png');
  background-position: 10px 10px;
  background-repeat: no-repeat;
  width: 100%;
  font-size: 16px;
  padding: 12px 20px 12px 40px;
  border: 1px solid #ddd;
  margin-bottom: 12px;
}
#myTable {
  border-collapse: collapse;
  width: 100%;
  border: 1px solid #ddd;
  font-size: 18px;
}
#myTable th, #myTable td {
  text-align: left;
  padding: 12px;
}
#myTable tr {
  border-bottom: 1px solid #ddd;
}
#myTable tr.header, #myTable tr:hover {
  background-color: gray;
}
.button {
    background-color: #4CAF50; /* Green */
    border: none;
    color: white;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}
.button1 {padding: 6px 12px;}
</style>
</head>
<body style="background-color:rgb(166, 192, 179);">

<h2>Welcome to MusicDB browse the largest Music Library.</h2>
<h3>Contribute to the fun!</h3>
<t> To add a song to MusicDB click the following button!</t><br>
<a href="SignUpForm.html" class="button button1">Sign Up</a>
<a href="AddSong.html" class="button button1">Add Song</a>
<br></br>
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for songs.." title="Type in a name">

<table id="myTable">
  <tr class="header">
    <th style="width:40%;">Song Title</th>
    <th style="width:20%;">Artist</th>
    <th style="width:15%;">Album</th>
    <th style="width:15%;">Release Year</th>
    <th style="width:5%;">Genre</th>
    <th style="width:5%;"></th>  
  </tr>
<?php
	$sql = $dbc->query('SELECT * FROM Song WHERE 1');
	while ( $song = $sql->fetch_assoc() ) {
		print "<tr>";
		print "<td>{$song['title']}</td>";
		print "<td>{$song['artist']}</td>";
		print "<td>{$song['album']}</td>";
		print "<td>{$song['releaseYear']}</td>";
		print "<td></td>";
		print "<td><button class=\"delete\">Delete</button></td>";
		print "</tr>";
	}
	$sql->free();
	$dbc->close();
?>
</table>

<script>
function myFunction() {
  var input, filter, table, tr, td, i, txtValue;
  input = document.getElementById("myInput");
  filter = input.value.toUpperCase();
  table = document.getElementById("myTable");
  tr = table.getElementsByTagName("tr");
  for (i = 0; i < tr.length; i++) {
    td = tr[i].getElementsByTagName("td")[0];
    if (td) {
      txtValue = td.textContent || td.innerText;
      if (txtValue.toUpperCase().indexOf(filter) > -1) {
        tr[i].style.display = "";
      } else {
        tr[i].style.display = "none";
      }
    }       
  }
}
</script>
</body>
</html>
