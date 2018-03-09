<?php 
include "dbha.php";
if (isset($_POST['email_remove'])) {
	
	$email_remove_text=$_POST['email_remove_text'];
	$sql = "DELETE FROM info WHERE Email='$email_remove_text'";
	$result = mysqli_query($conn, $sql);

	header("Location: admin.php");
	
}elseif(isset($_POST['contact'])){
	
	$contact_remove_text=$_POST['contact_remove_text'];
	$sql = "DELETE FROM info WHERE Contact='$contact_remove_text'";
	$result = mysqli_query($conn, $sql);

	header("Location: admin.php");
}
?>