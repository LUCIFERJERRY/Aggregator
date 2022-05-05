
<?php

// Username is root
$user = 'root';
$password = '';

// Database name is aggregator
$database = 'aggregator';

// Server is localhost with
// port number 3306
$servername='localhost:3306';
$mysqli = new mysqli($servername, $user,
				$password, $database);

// Checking for connections
if ($mysqli->connect_error) {
	die('Connect Error (' .
	$mysqli->connect_errno . ') '.
	$mysqli->connect_error);
}

// SQL query to select data from database
$sql = "SELECT * FROM URL_Master";
$result = $mysqli->query($sql);
$mysqli->close();
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<title>GFG User Details</title>
	<!-- CSS FOR STYLING THE PAGE -->
	<style>
		table {
			margin: auto;
			font-size: large;
			
		}

		h1 {
			text-align: center;
			color: #006600;
			font-size: xx-large;
			font-family: 'Gill Sans', 'Gill Sans MT',
			' Calibri', 'Trebuchet MS', 'sans-serif';
		}

		td {
			font-weight: bold;
			
			padding: 10px;
			text-align: center;
			border-color: black;
			
		}
		tr {
			font-weight: bold;
			
			padding: 10px;
			text-align: center;
			border-color: black;

			transition: transform 1s; /* Animation */
			
		}

		tr:hover {background-color: #ffffcc;}

		th, td 
		{
  			padding: 10px;
		}

		tr:hover 
		{
  			transform: scale(1.2); /* 120% zoom */
		}

		

		

	</style>
</head>

<body>
	<section>
		<h1>Aggregator</h1>
		<!-- TABLE CONSTRUCTION-->
		<table>
			
			<!-- PHP CODE TO FETCH DATA FROM ROWS-->
			<?php // LOOP TILL END OF DATA
				while($rows=$result->fetch_assoc())
				{
			?>
			<tr style = "border: 1px solid;">
				<!--FETCHING DATA FROM EACH
					ROW OF EVERY COLUMN-->
				<!--<td><img src = "http://www.google.com/s2/favicons?domain=<?php echo $rows['URL'];?>" width="69" height="69"></img></td>-->

				
				<td><button style = "border-radius: 50%; padding: 15px 15px; border: none; background-color: #87CEEB;"><a href = "<?php echo $rows['URL'];?>"><img src = "http://www.google.com/s2/favicons?domain=<?php echo $rows['URL'];?>" width="40" height="40"></img></a></button></td>
				
				
				<td><p style = "font-family: franklin gothic; font-size: 20px;"><?php echo $rows['URL_DESC'];?></p></td>
				
				
			</tr>

			<?php
				}
			?>

           
		</table>
	</section>
</body>

</html>
