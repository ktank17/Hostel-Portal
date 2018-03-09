<!DOCTYPE html>
<html>
<head>
	<title>Iogin</title>
	<link rel="stylesheet" href="css/main.css"></link>
	<link rel="stylesheet" href="css/mylogin.css"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Poiret+One|Spectral+SC" rel="stylesheet">
	<script type="text/javascript" src="jq/jquery-1.10.2.min.js"></script>
	<script type="text/javascript" src="jq/myjs.js"></script>
	<script type="text/javascript" src="jq/myadminjs.js"></script>
	
	</head>
<body>
	<div class="container">
		<div class="header">
			<div style="padding: 6px;">
				<span class="call-at left-padding"><i class="fa fa-mobile" aria-hidden="true"></i> 1800-659-1234</span> |
				<span class="email-at left-padding"><i class="fa fa-envelope" aria-hidden="true"></i> helpdesk@myhostel.com</span> |
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
					<div class="menu-item"></div>
					<a href="index.php"><div class="menu-item"><div>Home</div></div></a>
					<a href="login.php"><div class="menu-item"><div>Login</div></div></a>
					<a href="register.php"><div class="menu-item"><div>Registration</div></div></a>
					<a href="contectus_home.php"><div class="menu-item"><div>Contact Us</div></div></a>
				</div>
		</div>
		
		<!--Conatent-->
		<div style="text-align: center;"> 
			<div class="background" style="float:left;margin-left: 145px">
				<div class="transbox1">
				    <img src="studentlogo.jpg" class="user"><br><br>
				    <center>
				    	<p><h2><bold>Student Login</bold></h2><br><br>
				      
				      	<form name="s_form" method="POST" action="login_verify.php" onsubmit="chk_valid()">
				        	<b>Email:</b>
				          	<input type="text" name="email_student" id="username" placeholder="Enter Username">
				          	<span id ="err_username"></span><br><br>

				        	<b>Password:</b>
				          	<input type="Password" name="pwd_student" id="pword" placeholder="****">
				          	<span id ="err_pword"></span><br><br>

				          	<br>
				        	<br><br>
				          	<br>
				          	<br>

				          	<b><button class="flat-button" type="submit" name="submit_student" value="submit">Submit</button>
							   <input class="flat-button" type="reset" name="reset" id="reset" value="Cancel"></b>
				        

	      				</form>
	      				</p>
	    			</center>
				</div>
			</div>



			<div class="background" style="display: inline-block;margin-right:145px;">
	  			<div class="transbox2">
	    			<img src="adminlogo.ico" class="user"><br><br>
	    
	    			<center>
					    <p><h2><bold>Admin Login</bold></h2><br><br>
					      
					    	<form name="s_form" method="POST" action="login_verify.php"  onsubmit="chk_valid()">
						        <b>Username:</b>
						        <input type="text" name="email_admin" id="username" placeholder="Enter Username">
						        <span id ="err_username"></span><br><br>

						        <b>Password:</b>
						        <input type="Password" name="pwd_admin" placeholder="*****">
						        <span id ="err_pword"></span><br><br><br><br><br>
						        <br>
						        <br>

						        <h1><button class="flat-button" type="submit" name="submit_admin" value="submit">Submit</button>
							   		<input class="flat-button" type="reset" name="reset" id="reset" value="Cancel"></h1>
					        </form>
	        			
	        			</p>
	    			</center>
	  			</div>
			</div>
		</div>

		
		<!--footer -->
	
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

		<script type="text/javascript" src="jq/click-event.js"></script>
</body>
</html>