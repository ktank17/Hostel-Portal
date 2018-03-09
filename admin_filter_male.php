
<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<link rel="stylesheet" href="css/ad_main.css"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Poiret+One|Spectral+SC" rel="stylesheet">
	<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
	<script type="text/javascript" src="jq/jquery-1.10.2.min.js"></script>
</head>
<body>
	<div class="container">
		<div class="header">
			<div style="padding: 6px;">
				<span class="book-now left-padding"><div class="register"><a href="logout.php">logout</a></div></span>
			</div>
		</div>
		<div class="menu-bar">	
		<div class="icon">
				<div style="width: 300px;height: 100%;margin: auto;text-align: center;    position: relative;">
					<div style="position: absolute;font-size: 40px;margin-top: -42px;left: 42%;border-radius: 100%;background: white;width: 40px;"><i class="fa fa-map-marker" aria-hidden="true"></i></div>
					<div style="font-size: 50px;padding: 0px;border-bottom: 1px solid rgba(0,0,0,0.1);font-family: 'Spectral SC', serif;">HOSTEL</div>
					<div style="font-family: 'Poiret One', cursive;font-weight: bold;">
						A place like home!
					</div>
				</div>
				</div>
				<div class="link">
					<div class="btn">
						<form action="after_admin_filter_male.php" method="POST">
						<center><table>
								<tr>
								<td><button type="submit" name="gen_male" class="w3-btn w3-white w3-border w3-border-black w3-round-large">General</button></td>
								<td><button type="submit" name="obc_male" class="w3-btn w3-white w3-border w3-border-black w3-round-large">OBC</button></td>
								<td><button type="submit" name="sc_male" class="w3-btn w3-white w3-border w3-border-black w3-round-large">SC</button></td>
								<td><button type="submit" name="all_male" class="w3-btn w3-white w3-border w3-border-black w3-round-large">All</button></td>
								
								</tr>
							</table></center>>
						</form>
					</div>
				</div>
		</div>

		<!-- header template ends -->

		<!-- Footer starts -->
		<br>
		<br>
		
		<div class="footer">
			<div class="container">
				<div class="block">
					<div class="box">
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

