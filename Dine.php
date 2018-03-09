<!DOCTYPE html>
<html>
<head>
	<title>Dine/Drink</title>
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
			  <div><img src="img/mess2.jpg" style="width: 100%;height: 400px;"></img></div>
			  <div><img src="img/mess3.jpg" style="width: 100%;height: 400px;"></img></div>
			  <div><img src="img/mess1.jpg" style="width: 100%;height: 400px;"></img></div>
			</div>
		</div>


		<div class="gallery" style="margin: 0px 1%;height: 660px;">
			<div class="container"  style="width: 100%">
				<div class="block" style="width:100%;">
					<div class="box">
						<div class="gallery-header" style="padding: 50px;font-size: 30px;font-family: 'Spectral SC', serif;">
							Rules for Mess/Dining
						</div>
						<div class="gallery-content" style="font-size: 15px;font-family: 'Spectral SC'">
						<ul>
							<li>Hostel Messes are run in two groups. One group is run by private contractor and another is cooperative venture which is run on a “No Profit No Loss” basis.</li>
							<li>The residents are expected to maintain proper decorum in the Dinning Hall. Shouting and sitting on the mess table is strictly prohibited, if any one is found doing so he/she shall be fined Rs. 100 to Rs. 1000 depending on the severity of offence.</li>
							<li>The Mess Secretary from the hostel will normally be elected / nominated and he/ she and his /her team will look after the quality of the food provided and ensure hygiene in the mess.</li>
							<li>Food will not be served outside the dining hall for students. However, in case of illness, students may be served “SICK DIET” in their rooms with prior permission of the Warden.</li>
							<li>In no case mess utensils should be taken outside the dining hall.</li>
							<li>In no case, a resident can enter the kitchen either to collect food or to communicate any grievances regarding food with kitchen staff.</li>
							<li>Wastage of food is strictly prohibited, if any student found to leave the food in his/ her plate, shall be fined suitably.</li>
							<li>A resident who desires to entertain authorised guests in the Dining Hall shall purchase requisite number of coupons for the required meal against cash payment in advance.</li>
							<li>Sale of coupons will be limited to the availability of food and will be sold on first come first serve basis.</li>
							<li>Mess charges will be reviewed and fixed / changed every six months, preferably in January and August, in consultation with members of the Mess Committee and hostel Wardens.</li>
						</ul>
						</div>
					</div>
				</div>
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
				<div class="block">
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
</body>
</html>