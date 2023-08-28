<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("config.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
		
	// Check for empty fields
	if (empty($nome)) {
		if (empty($nome)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO usuarios (nome) VALUES ('$nome');");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>