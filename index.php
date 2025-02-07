<?php
// Include the database connection file
require_once("dbConnection.php");

// Fetch data in descending order (latest entry first)
$result = mysqli_query($mysqli, "SELECT * FROM students ORDER BY id DESC");
?>

<html>
<head>	
	<title>Homepage</title>
</head>

<body>
	<h2>Homepage</h2>
	<p>
		<a href="add.php">Add New Data</a>
	</p>
	<table width='80%' border=0>
		<tr bgcolor='#DDDDDD'>
			<td><strong>Name</strong></td>
			<td><strong>Telephone</strong></td>
			<td><strong>Gender</strong></td>
			<td><strong>Email</strong></td>
			<td><strong>Action</strong></td>
		</tr>
		<?php
		// Fetch the next row of a result set as an associative array
		while ($res = mysqli_fetch_assoc($result)) {
			echo "<tr>";
			echo "<td>".htmlspecialchars($res['name'])."</td>";
			echo "<td>".htmlspecialchars($res['tel'])."</td>";
			echo "<td>".htmlspecialchars($res['gender'])."</td>";
			echo "<td>".htmlspecialchars($res['email'])."</td>";	
			echo "<td><a href=\"edit.php?id=".$res['id']."\">Edit</a> | 
			<a href=\"delete.php?id=".$res['id']."\" onClick=\"return confirm('Are you sure you want to delete?')\">Delete</a></td>";
			echo "</tr>";
		}
		?>
	</table>
</body>
</html>