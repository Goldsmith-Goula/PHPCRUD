<?php
// Include the database connection file
require_once("dbConnection.php");

// Get id from URL parameter
$id = $_GET['id'];

// Select data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM students WHERE id = $id");

// Fetch the next row of a result set as an associative array
$resultData = mysqli_fetch_assoc($result);

$name = $resultData['name'];
$tel = $resultData['tel'];
$gender = $resultData['gender'];
$email = $resultData['email'];
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
				<td>Name</td>
				<td><input type="text" name="name" value="<?php echo htmlspecialchars($name); ?>" required></td>
			</tr>
			<tr> 
				<td>Telephone</td>
				<td><input type="text" name="tel" value="<?php echo htmlspecialchars($tel); ?>" required></td>
			</tr>
			<tr> 
				<td>Gender</td>
				<td>
					<select name="gender" required>
						<option value="" <?php echo ($gender == '') ? 'selected' : ''; ?>>Select Gender</option>
						<option value="Male" <?php echo ($gender == 'Male') ? 'selected' : ''; ?>>Male</option>
						<option value="Female" <?php echo ($gender == 'Female') ? 'selected' : ''; ?>>Female</option>
						<option value="Other" <?php echo ($gender == 'Other') ? 'selected' : ''; ?>>Other</option>
					</select>
				</td>
			</tr>
			<tr> 
				<td>Email</td>
				<td><input type="email" name="email" value="<?php echo htmlspecialchars($email); ?>" required></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value="<?php echo htmlspecialchars($id); ?>"></td>
				<td><input type="submit" name="update" value="Update"></td>
			</tr>
		</table>
	</form>
</body>
</html>