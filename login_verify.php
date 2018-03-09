<?php 
include "dbha.php";
session_start();
if (isset($_POST['submit_student'])) {
	$email_student = $_POST['email_student'];
	$pwd_student = $_POST['pwd_student'];

	$sql = "SELECT * FROM info WHERE Email='$email_student'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck < 1) {
		header("Location: login.php?login=error");
	} else {
		$row = mysqli_fetch_assoc($result);
		if($pwd_student==$row['Password']){
			$_SESSION['email_student'] = $row['Email'];
			header("Location: index.php");
		}else{
			header("Location: login.php?login=error");
		}
	}
}elseif(isset($_POST['submit_admin'])){
	$email_admin = $_POST['email_admin'];
	$pwd_admin = $_POST['pwd_admin'];

	$sql = "SELECT * FROM admin WHERE Email='$email_admin'";
	$result = mysqli_query($conn, $sql);
	$resultCheck = mysqli_num_rows($result);
	if ($resultCheck < 1) {
		header("Location: login.php?login=error");
	} else {
		$row = mysqli_fetch_assoc($result);
		if($pwd_admin==$row['Password']){
			$_SESSION['email_admin'] = $row['Email'];
			header("Location: admin.php");
		}else{
			header("Location: login.php?login=error_admin");
		}
	}
}
?>