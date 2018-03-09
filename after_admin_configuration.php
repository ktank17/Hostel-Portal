<?php
include 'dbha.php';

$seats=$_POST['seats'];
$location=$_POST['location'];
$sql="INSERT INTO configuration(Sr_no,Seats,Location) VALUES ('1','$seats','$location');";
$run=mysqli_query($conn,$sql);
header("Location:admin.php")
?>