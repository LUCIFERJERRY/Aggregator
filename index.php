<!DOCTYPE html>
<html>
<head>
<title>Aggregator Master</title>
</head>
<style>
	tr:nth-child(even) 
	{
  		background-color: #D6EEEE;
	}

	th, td 
	{
  		padding: 15px;
	}

	tr:hover {background-color: #D6EEFF;}
</style>
<body>
	<div>
		<form method="POST" action="add.php">
			<label>URL:</label><input type="text" name="url">
			<label>Name:</label><input type="text" name="name">
			<input type="submit" name="add">
		</form>
	</div>
	<br>
	<div>
		<table border="0">
			<thead>
				<th>URL</th>
				<th>Name</th>
				<th></th>
			</thead>
			<tbody>
				<?php
					include('conn.php');
					$query=mysqli_query($conn,"select * from `URL_Master`");
					while($rows=mysqli_fetch_array($query)){
						?>
						<tr>
							<td><?php echo $rows['URL_DESC']; ?></td>
							<td><?php echo $rows['URL']; ?></td>
							<td>
								<a href="edit.php?desc=<?php echo $rows['URL_DESC']; ?>">Edit</a>
								<a href="delete.php?desc=<?php echo $rows['URL_DESC']; ?>">Delete</a>
							</td>
						</tr>
						<?php
					}
				?>
			</tbody>
		</table>
	</div>
</body>
</html>