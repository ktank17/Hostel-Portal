<?php
	include "dbha.php";

	$sql="TRUNCATE TABLE merit;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE waiting;";
	$run=mysqli_query($conn,$sql);


	$sql="TRUNCATE TABLE finalist;";
	$run=mysqli_query($conn,$sql);


	$sql="TRUNCATE TABLE info;";
	$run=mysqli_query($conn,$sql);

	header("Location: admin_configure.php");
?>