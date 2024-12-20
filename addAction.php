<html>
<head>
	<title>Add Data</title>
</head>

<body>
<?php
// Include the database connection file
require_once("dbConnection.php");

if (isset($_POST['submit'])) {
	// Escape special characters in string for use in SQL statement	
	$name = mysqli_real_escape_string($mysqli, $_POST['name']);
	$email = mysqli_real_escape_string($mysqli, $_POST['email']);
	$tel = mysqli_real_escape_string($mysqli, $_POST['tel']);
	$gender = mysqli_real_escape_string($mysqli, $_POST['gender']);

	// Check for empty fields
	if (empty($name) || empty($email) || empty($tel) || empty($gender)) {
		if (empty($name)) {
			echo "<font color='red'>Name field is empty.</font><br/>";
		}
		if (empty($email)) {
			echo "<font color='red'>Email field is empty.</font><br/>";
		}
		if (empty($tel)) {
			echo "<font color='red'>Telephone field is empty.</font><br/>";
		}
		if (empty($gender)) {
			echo "<font color='red'>Gender field is empty.</font><br/>";
		}
		
		// Show link to the previous page
		echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
	} else { 
		// If all the fields are filled (not empty) 

		// Insert data into database
		$result = mysqli_query($mysqli, "INSERT INTO students (`name`, `tel`, `gender`, `email`) VALUES ('$name', '$tel', '$gender', '$email')");
		
		// Display success message
		echo "<p><font color='green'>Data added successfully!</font></p>";
		echo "<a href='index.php'>View Result</a>";
	}
}
?>
</body>
</html>