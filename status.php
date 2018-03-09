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
		<?php

		session_start();

		?>
		<?php

			include 'dbh.php';
			$email=$_SESSION['email'];
			
			$sql="SELECT * FROM merit WHERE Email='$email';";
			$result=mysqli_query($conn,$sql);

			$name=mysqli_fetch_assoc($result);
			echo "<center><h1 style='font-family:Alegreya Sans'><u>WELCOME</u><br><br>".$name['Name']."</h1></center>";

			$resultcheck=mysqli_num_rows($result);

			if($resultcheck<1){
				echo "<h1>NO USERS FOUND";
			}
			else{
				$sql="SELECT G_ID FROM merit WHERE Email='$email';";
				$run=mysqli_query($conn,$sql);
				
				$G_ID_AR=mysqli_fetch_assoc($run);
				$G_ID=$G_ID_AR['G_ID'];
				
				$sql="SELECT MERIT_RANK FROM merit_sort WHERE G_ID='$G_ID';";
				$run=mysqli_query($conn,$sql);

				$MR_AR=mysqli_fetch_assoc($run);
				$MERIT_RANK=$MR_AR['MERIT_RANK'];

				if($MERIT_RANK<=$seat){
					echo "<center>";
					echo "<h1 style='font-family:Alegreya Sans'>You are selected for the hostel</h1>";
					echo "<h2 style='font-family:Alegreya Sans'>Your Merit Rank is ".$MERIT_RANK."</h2>";
					echo "</center>";
				}else{

					echo "<h1>You are not selected for the hostel</h1>";
					echo "<h2>Your Waiting List Number is".($MERIT_RANK-$seats)."</h2>";


				}


			}

		?>
		<br>
		<br>
		<br>
		<br>
		
	
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