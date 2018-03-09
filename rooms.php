<!DOCTYPE html>
<html>
<head>
	<title>Rooms</title>
	<link rel="stylesheet" href="css/main.css"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Poiret+One|Spectral+SC" rel="stylesheet">
	<script type="text/javascript" src="jq/jquery-1.10.2.min.js"></script>

	<!-- Carasoule -->
	<script type="text/javascript" src="jq/slick.min.js"></script>

	<link rel="stylesheet" type="text/css" href="css/slick.css"/>
	<link rel="stylesheet" type="text/css" href="css/slick-theme.css"/>

</head>
<body>
	<div class="container">
		<div class="header">
			<div style="padding: 6px;">
				<span class="call-at left-padding"><i class="fa fa-mobile" aria-hidden="true"></i> 1800-659-1234</span> |
				<span class="email-at left-padding"><i class="fa fa-envelope" aria-hidden="true"></i> helpdesk@myhostel.com</span> |
				<span class="book-now left-padding"><div class="register"><a href="logout.php">logout</a></div></span>
			</div>
		</div>
		<div class="menu-bar">	
				<div class="icon">
				<div style="width: 300px;height: 100%;margin: auto;text-align: center;    position: relative;">
					<div style="position: absolute;font-size: 40px;margin-top: -28px;left: 42%;border-radius: 100%;background: white;width: 40px;"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div style="font-size: 50px;padding: 0px;border-bottom: 1px solid rgba(0,0,0,0.1);font-family: 'Spectral SC', serif;">HOSTEL</div>
					<div style="font-family: 'Poiret One', cursive;font-weight: bold;">
						A place like home!
					</div>
				</div>
				</div>
				<div class="link">
					<a href="rooms.php"><div class="menu-item"><div>Rooms</div></div></a>
					<a href="Dine.php"><div class="menu-item"><div>Dine/Drink</div></div></a>
					<a href="rules.php"><div class="menu-item"><div>Rules</div></div></a>
					<a href="status.php"><div class="menu-item"><div>Status</div></div></a>
					<a href="contectus_login.php"><div class="menu-item"><div>Contact Us</div></div></a>
				</div>
		</div>

		<!-- header template ends -->
		<div class="content">
			<div class="image-carasoule">
			  <div><img src="img/room1.jpg" style="width: 100%;height: 400px;"></img></div>
			  <div><img src="img/room2.jpg" style="width: 100%;height: 400px;"></img></div>
			  <div><img src="img/rooms3.jpg" style="width: 100%;height: 400px;"></img></div>
			  <div><img src="img/rooms4.jpg" style="width: 100%;height: 400px;"></img></div>
			</div>
		</div>

		<div class="gallery">
			<div class="container" style="height: 600px">
				<div class="block">
					<div class="box">
						<div class="gallery-header">
							Dorm Rooms
						</div>
						<div class="gallery-content">
							<p>Our hostels have dorms, which are basically large rooms that sleep between 8 students. By staying in a dorm room, you can pay a fraction of the price compared to other types of accommodation; in general, the more people you share your dorm with, the cheaper it will be.</p>
							
							<p>Dorms come in different shapes and sizes with pod-style beds and double mattresses. No matter what type of dorm you opt for, pretty much all dorm beds will come equipped with a reading light, power socket to charge your gadgets, and possibly a privacy curtain with en-suite bathroom. Dorm rooms are provided in male hostel as well as female hostel.</p>

						</div>
					</div>
				</div>
				<div class="block">
					<div class="box">
						<div class="gallery-header">
							Triple Rooms
						</div>
						<div class="gallery-content">
							<p>Our hostels have triple rooms, which are basically shared between 3 students.</p>

							<p>The triple rooms are bright, comfortably furnished and are equipped with TV, telephone and own bathroom. They also offer privacy with their bunk areas with curtain, also having own lockers. It has a connected private bathroom with sinks, showers and toilets. They're m
							ore expensive than dorms, but they tend to be cheaper than private rooms.</p>

						</div>
					</div>
				</div>
				<div class="block">
					<div class="box">
						<div class="gallery-header">
							Private Rooms
						</div>
						<div class="gallery-content">
							<p>Hostels also have private rooms. So you can have your own space, without sacrificing the fun that only a hostel can give you. Private rooms in hostels are perfect for older travellers or couples who want a bit more privacy.</p>

							<p>They're more expensive than dorms, but they tend to be cheaper than other types of accommodation. In terms of facilities, private hostel rooms are on a par with hotels - plus you get the added bonus of amazing social areas, free events and like-minded travellers.</p>

						</div>
					</div>
				</div>
			</div>
			<div class="table" style="padding: 15px;font-family: 'Spectral SC'">
				<table id="room" style="margin: 0px auto;border-collapse: collapse;">
				  <tr>
				    <th>Types of Rooms</th>
				    <th>Facility</th>
				    <th>Fees (Per Sem)</th>
				    <th>Fees (Per Year)</th>
				  </tr>
				  <tr>
				    <td>Dorm Rooms</td>
				    <td>Sharing with 8</td>
				    <td>8,000</td>
				    <td>15,000</td>
				  </tr>
				  <tr>
				    <td>Triple Rooms</td>
				    <td>Sharing with 3</td>
				    <td>12,000</td>
				    <td>22,000</td>
				  </tr>
				  <tr>
				    <td>Private Rooms</td>
				    <td>No sharing</td>
				    <td>24,000</td>
				    <td>45,000</td>
				  </tr>
				 </table>
			</div>
		</div>

		
		<!-- Footer starts -->
<div class="footer">
			<div class="container">
				<div class="block">
					<div class="box">
					<div class="box-header">
						Gallary
					</div>
					<div class="box-content">
					<table class="gallery" style="height: 100%;margin:0px">
						<tr>
							<td><img src="img/1.jpg"></td>
							<td><img src="img/2.jpg"></td>
							<td><img src="img/3.jpg"></td>
						</tr>
						<tr>
							<td><img src="img/4.jpg"></td>
							<td><img src="img/5.jpg"></td>
							<td><img src="img/6.jpg"></td>
						</tr>
					</table>						
					</div>
				</div>
				</div>
				<div class="block" style="padding: 0px 140px;">
					<div class="box">
						<div class="box-header">
							Social Media
						</div>
						<div class="box-content">
							<div style="float:left">
							<i class="fa fa-facebook-official" aria-hidden="true"></i>
							<i class="fa fa-twitter-square" aria-hidden="true"></i>
							<i class="fa fa-google-plus-square" aria-hidden="true"></i>
							<i class="fa fa-youtube-play" aria-hidden="true"></i>
						</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		</div>
		<div>
	</div>

	 <script type="text/javascript">
	    $(document).ready(function(){
	      $('.image-carasoule').slick({});
	    });
	  </script>

	  <script type="text/javascript" src="jq/click-event.js"></script>
</body>
</html>