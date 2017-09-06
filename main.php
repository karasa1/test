
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <link rel="stylesheet" type="text/css" href="style.css">
  <title>main</title>
</head>
<body>
</div>
<center>
<h1>Förslag</h1>
<a href="index.html" class="button">Nytt förslag</a>

</center>

<?php
	include ('connect.php');
	$select = mysqli_query($link, "SELECT * FROM test"); 
	while ($row = mysqli_fetch_assoc($select)) { 
		echo "<div class='mainbox'><h3>". $row["ide"]. "</div><br>"; //skriver ut allt innom en div
	}
	
?>
</body>
</html>