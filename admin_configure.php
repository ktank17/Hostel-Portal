<?php
include 'dbha.php';

$sql="TRUNCATE TABLE configuration;";
$run=mysqli_query($conn,$sql);

?>
<form name="configure_form" action="after_admin_configuration.php" method="POST">
    <b>Seats:</b>
    <input type="number" name="seats" id="seats" placeholder="Enter Seats">
    <span id ="err_seats"></span><br><br>

    <b>Location:</b>
    <input type="text" name="location" placeholder="Location">
    <span id ="err_location"></span><br><br><br><br><br>
    <br>
    <br>

	<h1><button class="flat-button" type="submit" name="admin_configure" value="submit">Submit</button>
	<input class="flat-button" type="reset" name="reset" id="reset" value="Cancel"></h1>
</form>
