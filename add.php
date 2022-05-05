<?php
	include('conn.php');
	
	$url=$_POST['url'];
	$name=$_POST['name'];
		
	mysqli_query($conn,"insert into `url_master` (`URL_DESC`, `URL`) values ('$name','$url')");
	header('location:index.php');
	
?>