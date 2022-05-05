<?php
	include('conn.php');
	$desc=$_GET['desc'];
	
	$url=$_POST['url'];
	$name=$_POST['urlname'];
	
	mysqli_query($conn,"update `URL_Master` set URL='$url', URL_DESC='$name' where URL_DESC='$desc'");
	header('location:index.php');
?>