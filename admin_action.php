<?php 
include "dbha.php";

if (isset($_POST['filter'])) {
	filter();
}elseif(isset($_POST['finalists'])){
	finalists();
}elseif(isset($_POST['totalentries'])){
	totalentries();
}elseif(isset($_POST['waiting'])){
	waiting();
}elseif(isset($_POST['reset'])){
	reset_w();
}elseif(isset($_POST['configure'])){
	configure();
}elseif(isset($_POST['delete_all'])){
	delete_all();
}elseif(isset($_POST['remove'])){
	remove();
}	
function filter(){
	header("Location:admin_filter.php");
}
function finalists(){
	include "dbha.php";
	$sql = "SELECT * FROM finalist;";
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
function totalentries(){
	include "dbha.php";
	$sql = "SELECT * FROM info;";
	$run=mysqli_query($conn,$sql);
	echo '<table border="1">
	<caption>FINAL LIST</caption>';
	echo "<tr>";
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
function waiting(){
	include "dbha.php";
	$sql = "SELECT * FROM waiting;";
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
	//$row = mysqli_fetch_assoc(mysqli_query($conn,$sql));
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
function reset_w(){
	include "dbha.php";
	echo '<form name="s_form" method="POST" action="admin_delete.php"  onsubmit="chk_valid()">
						        <b>Username:</b>
						        <input type="text" name="email_admin" id="username" placeholder="Enter Username">
						        <span id ="err_username"></span><br><br>

						        <b>Password:</b>
						        <input type="Password" name="pwd_admin" placeholder="*****">
						        <span id ="err_pword"></span><br><br><br><br><br>
						        <br>
						        <br>

						        <h1><button class="flat-button" type="submit" name="admin_delete" value="submit">Submit</button>
							   		<input class="flat-button" type="reset" name="reset" id="reset" value="Cancel"></h1>
					        </form>';
}
function configure(){
	header("Location:admin_configure.php");
}
function delete_all(){
	include "dbha.php";

	$sql="TRUNCATE TABLE merit;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE waiting;";
	$run=mysqli_query($conn,$sql);


	$sql="TRUNCATE TABLE finalist;";
	$run=mysqli_query($conn,$sql);

	$sql="TRUNCATE TABLE info;";
	$run=mysqli_query($conn,$sql);
}
function remove(){
	header("Location:admin_remove.php");
}