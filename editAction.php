<?php
// Include the database connection file
require_once("config.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$nome = mysqli_real_escape_string($mysqli, $_POST['nome']);
    $id = mysqli_real_escape_string($mysqli, $_POST['id']);

	
	// Check for empty fields
	if (empty($nome)) {
		if (empty($nome)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE usuarios.usuarios SET nome = '$nome' WHERE id = $id");
		
		// Display success message
		echo "<p><font color='green'>Data updated successfully!</p>";
		echo "<a href='index.php'>View Result</a>";
	}
}