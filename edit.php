<?php
// Include the database connection file
require_once("config.php");


?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
    <h2>Edit Data</h2>
    <p>
	    <a href="index.php">Home</a>
    </p>
	
	<form name="edit" method="post" action="editAction.php">
		<table border="0">
			<tr> 
				<td>Id</td>
				<td><input type="text" name="id" ></td>
			</tr>
            <tr> 
				<td>Name</td>
				<td><input type="text" name="nome"></td>
			</tr>
			<tr>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>