<?php
	include('conn.php');
	if(isset($_GET['desc'])):
		$desc=$_GET['desc'];

		$query=mysqli_query($conn,"SELECT * from `URL_Master` where URL_DESC='$desc'");
	
		$rows=mysqli_fetch_array($query);

	endif;
?>
<!DOCTYPE html>
<html>
<head>
<title>Edit Aggregator</title>
</head>
<body>
	<h2>Edit</h2>
	<form method="POST" action="update.php?desc=<?php echo $desc; ?>">
		<label>URL:</label><input type="text" value="<?php echo $rows['URL']; ?>" name="url">
		<label>Name:</label><input type="text" value="<?php echo $rows['URL_DESC']; ?>" name="urlname">
		<input type="submit" name="submit">
		<a href="index.php">Back</a>
	</form>
</body>
</html>