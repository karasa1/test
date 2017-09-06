<?php
	if(isset($_POST['submit']))
{
	$_POST['ide'];
	
	$filtered = filter_input(INPUT_POST, "ide", FILTER_SANITIZE_SPECIAL_CHARS);
	$filtered = trim($filtered);
	
	$mysqli = new mysqli("localhost", "root", "", "ideer");
	if ($mysqli->connect_error) {
	    die('Connect Error (' . $mysqli->connect_errno . ') '
	            . $mysqli->connect_error);
	}

	
	if (!($stmt = $mysqli->prepare("INSERT into test(ide) values (?)"))) {
		echo "Prepare failed: (" . $mysqli->errno . ") " . $mysqli->error;
	}

	if (!$stmt->bind_param("s", $filtered)) {
		echo "Binding parameters failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	if (!$stmt->execute()) {
	    echo "Execute failed: (" . $stmt->errno . ") " . $stmt->error;
	}

	
	header("Location: main.php");
}
else
{
	echo "<p>Please submit some data to test</p>";
}
?>