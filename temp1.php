<?php
	$url="https://maps.googleapis.com/maps/api/distancematrix/json?units=imperial&origins=Washington,DC&destinations=New+York+City,NY&key=AIzaSyCjZWSdx0JqrdVcnhNM7ayHb4cXawpEtpE ";
	$rows=json_decode(file_get_contents($url))->rows;
	$status=$rows[0]->elements[0]->status;
	echo $rows;
	?>