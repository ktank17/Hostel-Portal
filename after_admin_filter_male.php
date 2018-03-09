<?php
include "dbha.php";
if(isset($_POST['gen_male'])){
	$sql = "SELECT * FROM finalist where Gender='male' && Quota='gen';";
	$run=mysqli_query($conn,$sql);
	echo '<table border="1">
	<caption>FINAL LIST</caption>';
	echo "<tr>";
	echo "<th>Merit Rank</th>";
	echo "<th>User_ID</th>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>City</th>";
	echo "<th>Distance</th>";
	echo "<th>Contact</th>";
	echo "<th>Gender</th>";
	echo "<th>Percentage</th>";
	echo "<th>Quota</th>";
	echo "<th>Score</th>";
	echo "</tr>";
	for($i=1;$row=mysqli_fetch_assoc($run);$i++){
			echo "<tr>";
			echo "<td>" . $row['Merit_Rank'] . "</td>";
			echo "<td>" . $row['User_ID'] . "</td>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "<td>" . $row['City'] . "</td>";
			echo "<td>" . $row['Distance'] . "</td>";
			echo "<td>" . $row['Contact'] . "</td>";
			echo "<td>" . $row['Gender'] . "</td>";
			echo "<td>" . $row['Percentage'] . "</td>";
			echo "<td>" . $row['Quota'] . "</td>";
			echo "<td>" . $row['Score'] . "</td>";
			echo "</tr>";
	}
echo "</table>"; 
}elseif(isset($_POST['obc_male'])){
	$sql = "SELECT * FROM finalist where Gender='male' && Quota='obc';";
	$run=mysqli_query($conn,$sql);
	echo '<table border="1">
	<caption>FINAL LIST</caption>';
	echo "<tr>";
	echo "<th>Merit Rank</th>";
	echo "<th>User_ID</th>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>City</th>";
	echo "<th>Distance</th>";
	echo "<th>Contact</th>";
	echo "<th>Gender</th>";
	echo "<th>Percentage</th>";
	echo "<th>Quota</th>";
	echo "<th>Score</th>";
	echo "</tr>";
	for($i=1;$row=mysqli_fetch_assoc($run);$i++){
			echo "<tr>";
			echo "<td>" . $row['Merit_Rank'] . "</td>";
			echo "<td>" . $row['User_ID'] . "</td>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "<td>" . $row['City'] . "</td>";
			echo "<td>" . $row['Distance'] . "</td>";
			echo "<td>" . $row['Contact'] . "</td>";
			echo "<td>" . $row['Gender'] . "</td>";
			echo "<td>" . $row['Percentage'] . "</td>";
			echo "<td>" . $row['Quota'] . "</td>";
			echo "<td>" . $row['Score'] . "</td>";
			echo "</tr>";
	}
echo "</table>"; 
}elseif(isset($_POST['sc_male'])){
	$sql = "SELECT * FROM finalist where Gender='male' && Quota='sc';";
	$run=mysqli_query($conn,$sql);
	echo '<table border="1">
	<caption>FINAL LIST</caption>';
	echo "<tr>";
	echo "<th>Merit Rank</th>";
	echo "<th>User_ID</th>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>City</th>";
	echo "<th>Distance</th>";
	echo "<th>Contact</th>";
	echo "<th>Gender</th>";
	echo "<th>Percentage</th>";
	echo "<th>Quota</th>";
	echo "<th>Score</th>";
	echo "</tr>";
	for($i=1;$row=mysqli_fetch_assoc($run);$i++){
			echo "<tr>";
			echo "<td>" . $row['Merit_Rank'] . "</td>";
			echo "<td>" . $row['User_ID'] . "</td>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "<td>" . $row['City'] . "</td>";
			echo "<td>" . $row['Distance'] . "</td>";
			echo "<td>" . $row['Contact'] . "</td>";
			echo "<td>" . $row['Gender'] . "</td>";
			echo "<td>" . $row['Percentage'] . "</td>";
			echo "<td>" . $row['Quota'] . "</td>";
			echo "<td>" . $row['Score'] . "</td>";
			echo "</tr>";
	}
echo "</table>"; 
}elseif(isset($_POST['all_male'])){
	$sql = "SELECT * FROM finalist where Gender='male';";
	$run=mysqli_query($conn,$sql);
	echo '<table border="1">
	<caption>FINAL LIST</caption>';
	echo "<tr>";
	echo "<th>Merit Rank</th>";
	echo "<th>User_ID</th>";
	echo "<th>Name</th>";
	echo "<th>Email</th>";
	echo "<th>City</th>";
	echo "<th>Distance</th>";
	echo "<th>Contact</th>";
	echo "<th>Gender</th>";
	echo "<th>Percentage</th>";
	echo "<th>Quota</th>";
	echo "<th>Score</th>";
	echo "</tr>";
	for($i=1;$row=mysqli_fetch_assoc($run);$i++){
			echo "<tr>";
			echo "<td>" . $row['Merit_Rank'] . "</td>";
			echo "<td>" . $row['User_ID'] . "</td>";
			echo "<td>" . $row['Name'] . "</td>";
			echo "<td>" . $row['Email'] . "</td>";
			echo "<td>" . $row['City'] . "</td>";
			echo "<td>" . $row['Distance'] . "</td>";
			echo "<td>" . $row['Contact'] . "</td>";
			echo "<td>" . $row['Gender'] . "</td>";
			echo "<td>" . $row['Percentage'] . "</td>";
			echo "<td>" . $row['Quota'] . "</td>";
			echo "<td>" . $row['Score'] . "</td>";
			echo "</tr>";
	}
echo "</table>"; 
}
?>