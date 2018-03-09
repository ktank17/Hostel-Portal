<!DOCTYPE html>
<html>
<head>
	<title>Index</title>
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
		<div class="gallery">
			<div class="container" style="height:480px;width: 100%">
				<div class="block" style="width: 100%">
					<div class="box" style="width: 100%">
						<div class="gallery-header" style="padding: 50px;font-size: 30px;font-family: 'Spectral SC', serif;color: #1c1c1c">
							Contact Us
						</div>
						<div class="gallery-content" style="font-size: 15px;font-family: 'Spectral SC';color: #1c1c1c">
							<div class="Conatent-body">
						<div class="box">
							<form method="POST" action="feedback.php">
							<div class="username">
								<div style="width: 15%;padding: 8px;">Name</div>
								<div style="width: 70%;"><input type="text" class="cname" name="name" style="width: 250px;height: 30px;padding: 5px;"></input></div>
							</div>	

							<div class="email">
								<div style="width: 15%;padding: 8px;">Email Address</div>
								<div style="width: 70%;"><input type="text" class="cemail" name="email" style="width: 250px;height: 30px;padding: 5px;"></input></div>
							</div>

							<div class="message">
								<div style="width: 10%;padding: 8px;">Message</div>
								<div style="width: 70%;"><textarea class="cmessage" name="message" style="width: 250px;height: 80px;padding: 5px;"></textarea></div>
							</div>

							<div class="contact-submit">
								<div style="width: 5%;float: left;"><button onclick="chk_valid()" tabindex="0" type="submit" name="submit" id="submit" class="flat-button" value="Submit"><span>Submit</span></button></div>
								<div style="width: 5%;float: left;margin-left: 5px;"><button tabindex="0" type="reset" name="cancel" id="cancel" class="flat-button" value="Cancel"><span>Cancel</span></button></div>
							</div>
							</form>
						</div>
					</div>
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

	    function chk_valid(){
	    	var name=$('.cname').val();
	    	var email=$('.cemail').val();
	    	var message=$('.cmessage').val();
	    	console.log(name);
	    	if(name!='' && email !='' && message!='') {
	    		alert("Submitted!!");
	    		window.location.href="contectus1.html";
	    	} else {
	    		alert("Please fill all the details");
	    	}
	    }
	  </script>

	  <script type="text/javascript" src="jq/click-event.js"></script>
</body>
</html>