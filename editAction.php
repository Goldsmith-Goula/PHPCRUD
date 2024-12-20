<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['update'])) {
	// Escape special characters in a string for use in an SQL statement
	$id = mysqli_real_escape_string($mysqli, $_POST['id']);
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$tel = mysqli_real_escape_string($mysqli, $_POST['tel']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
	
	// Check for empty fields
	if (empty($name) || empty($tel) || empty($gender) || empty($email)) {
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if (empty($tel)) {
			echo "<font color='red'>Telephone field is empty.</font><br/>";
		}
		if (empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
	} else {
		// Update the database table
		$result = mysqli_query($mysqli, "UPDATE students SET `name` = '$name', `tel` = '$tel', `gender` = '$gender', `email` = '$email' WHERE `id` = $id");
		
		// Check if the update was successful
		if ($result) {
			// Display success message
			echo "<p><font color='green'>Data updated successfully!</font></p>";
		} else {
			// Handle update error
			echo "<p><font color='red'>Error updating data: " . mysqli_error($mysqli) . "</font></p>";
		}
		echo "<a href='index.php'>View Result</a>";
	}
}
?>