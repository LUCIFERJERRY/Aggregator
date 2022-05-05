<?php
	$desc=$_GET['desc'];
	include('conn.php');
	mysqli_query($conn,"DELETE from `URL_MASTER` where URL_DESC='$desc'");
	header('location:index.php');
?>