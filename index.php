<?php 
	include 'dbha.php';
	session_start();
	
	if(isset($_SESSION['email_student']))
	{
		header("Location: rooms.php");
	}else if(isset($_SESSION['email_admin'])){
		header("Location: admin.php");
	}
	else{
		header("Location: home.php");
	}
?>

