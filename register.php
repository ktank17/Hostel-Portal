<html>
<head>
	 <title>Registration</title>

	<link rel="stylesheet" href="css/main.css"></link>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://fonts.googleapis.com/css?family=Alegreya+Sans|Poiret+One|Spectral+SC" rel="stylesheet">
	<script type="text/javascript" src="jq/jquery-1.10.2.min.js"></script>

    <script>
function chk_valid()
{

	var f_name=document.getElementById("f_name").value;
	var m_name=document.getElementById("m_name").value;
	var l_name=document.getElementById("l_name").value;
	var email=document.getElementById("email").value;
	var pwd=document.getElementById("pwd").value;
	var rpwd=document.getElementById("rpwd").value;
	var addr1=document.getElementById("addr1").value;
	var addr2=document.getElementById("addr2").value;
	var city=document.getElementById("city").value;
	var contact=document.getElementById("contact").value;
	var percentage=document.getElementById("percentage").value;
	var flg=0;		


	if(f_name=="")
	{
		var msg="please enter First Name...";
		document.getElementById("err_fname").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([A-z]{2,20})$/;
		if(reg.test(f_name)==false)
		{
			var msg="please enter valid First name...";
			document.getElementById("err_fname").innerHTML=msg;
			flg++;
		}
		else
		{
			document.getElementById("err_fname").innerHTML="";	
		}
	}
	if(m_name=="")
	{
		var msg="please enter Middle Name...";
		document.getElementById("err_mname").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([A-z]{2,20})$/;
		if(reg.test(m_name)==false)
		{
			var msg="please enter valid Middle name...";
			document.getElementById("err_mname").innerHTML=msg;
			flg++;
		}
		else
		{
			document.getElementById("err_mname").innerHTML="";	
		}
	}


	if(l_name=="")
	{
		var msg="please enter Last Name...";
		document.getElementById("err_lname").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([A-z]{2,20})$/;
		if(reg.test(l_name)==false)
		{
			var msg="please enter valid Last name...";
			document.getElementById("err_lname").innerHTML=msg;
			flg++;
		}
		else
		{
			document.getElementById("err_lname").innerHTML="";	
		}
	}

	if(pwd=="")
	{
		var msg="please enter Password...";
		document.getElementById("err_pwd").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([A-z0-9!@#$%^&**-+/]{8,20})$/;
		if(reg.test(pwd)==false)
		{
			var msg="please enter valid Password...";
			document.getElementById("err_pwrd").innerHTML=msg;
			flg++;
		}
		else
		{
			document.getElementById("err_pwrd").innerHTML="";	
		}
	}

	if(rpwd=="")
	{
		var msg="please enter Retype Password...";
		document.getElementById("err_rpwd").innerHTML=msg;
		flg++;
	}
	else
	{
		if(pwd==rpwd)
		{
			document.getElementById("err_rpwd").innerHTML="";
		}
		else
		{
			var msg="Password does not match!";
			document.getElementById("err_rpwd").innerHTML=msg;	
			flg++;
		}
	}

	if(addr1=="")
	{
		var msg="please enter Address1 ...";
		document.getElementById("err_addr1").innerHTML=msg;
		flg++;
	}
	else
	{
			document.getElementById("err_addr1").innerHTML="";	
	}
	if(addr2=="")
	{
		var msg="please enter Address 2...";
		document.getElementById("err_addr2").innerHTML=msg;
		flg++;
	}
	else
	{
			document.getElementById("err_addr2").innerHTML="";	
	}

	if(email=="")
	{
		var msg="please enter Email...";
		document.getElementById("err_mail").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([A-Za-z0-9_\-\.])+\@([A-Za-z0-9_\-\.])+\.([A-Za-z]{2,4})$/;
		if(reg.test(email)==false)
		{
			var msg="please enter valid email...";
			document.getElementById("err_mail").innerHTML=msg;
			flg++;
		}
		else
		{
			document.getElementById("err_mail").innerHTML="";	
		}
	}

	if(contact=="")
	{
		var msg="please enter Contact No. ...";
		document.getElementById("err_contact").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([0-9]{7,12})$/;
		if(reg.test(contact)==false)
		{
			var msg="please enter valid Contact No. ...";
			document.getElementById("err_contact").innerHTML=msg;
			flg++;
		}
		else
		{
			document.getElementById("err_contact").innerHTML="";	
		}
	}
	if(percentage>100){
		var msg="Enter valid percentage...";
		document.getElementById("err_percentage").innerHTML=msg;
		flg++;
	}
	else{
		document.getElementById("err_percentage").innerHTML="";

	}
	if(city=="")
	{
		var msg="please Enter city..."
		document.getElementById("err_city").innerHTML=msg;
		flg++;
	}
	else
	{					
		document.getElementById("err_city").innerHTML="";
	}

	if(flg > 0)
	{
	  
		return false;
	}
	else
	{
	    
		return true;
	}
}
</script>
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

		<!-- header template ends -->


		<div style="text-align: center;"> 
			<!--<div class="background" style="float:left;margin-left: 145px">-->
				<div class="transbox1">
				    <center>
						<form action="reg_sort.php" method="POST" onsubmit="return chk_valid()">
							<center><h2>Registration Form</h2></center>
								
								<div class="lbl">First Name:</div>
								<div class="ctrl">
									<input type="text" name="f_name" id="f_name">
									<span id ="err_fname"></span>
								</div>
						</br></br>

								<div class="lbl">Middle Name:</div>
								<div class="ctrl">
									<input type="text" name="m_name" id="m_name">
									<span id ="err_mname"></span>
								</div>
						</br></br>

								<div class="lbl">Last Name : </div>
								<div class="ctrl">
									<input type="text" name="l_name" id="l_name">
									<span id ="err_lname"></span>
								</div>
						</br></br>

								<div class="lbl">Email : </div>
								<div class="ctrl">
									<input type="text" name="email" id="email">
									<span id ="err_mail"></span>
								</div>
						</br></br>

								<div class="lbl">Password : </div>
								<div class="ctrl">
									<input type="password" name="pwd" id="pwd">
									<span id ="err_pwd"></span>
								</div>
						</br></br>

								<div class="lbl">Retype Password : </div>
								<div class="ctrl">
									<input type="password" name="rpwd" id="rpwd">
									<span id ="err_rpwd"></span>
								</div>
						</br></br>

								<div class="lbl">Permanent Address: </div>
								<div class="ctrl">
									<textarea rows="4" cols="30" name="addr1" id="addr1" style="resize:none;" ></textarea>
									<span id ="err_addr1"></span>
								</div>
						</br></br></br></br>

								<div class="lbl">Current Address: </div>
								<div class="ctrl">
									<textarea rows="4" cols="30" name="addr2" id="addr2" style="resize:none;" ></textarea>
									<span id ="err_addr2"></span>
								</div>
						</br></br></br></br>

								<div class="lbl">City/Village:</div>
								<div class="ctrl">
									<input type="text" name="city" id="city">
									<span id ="err_city"></span>
								</div>
						</br></br></br></br>

								<div class="lbl">Percentage:</div>
								<div class="ctrl">
									<input type="text" name="percentage" id="percentage">
									<span id ="err_percentage"></span>
								</div>
						</br></br>

								<div class="lbl">Contact No : </div>
								<div class="ctrl">
									<input type="number" name="contact" id="contact">
									<span id ="err_contact"></span>
								</div>
						</br></br>

						    <div class="lbl">Gender : </div>
						    <div class="ctrl">
							    <input type="radio" name="gender" value="male" id="male" checked> Male<br>
							    <input type="radio" name="gender" value="female" id="female">Female<br>
							    <span id ="err_gender"></span>
						    </div>
						</br></br></br>

						    <div class="lbl">Quota : </div>
						    <div class="ctrl">
							    <input type="radio" name="quota" value="gen" id="general" checked> General<br>
							    <input type="radio" name="quota" value="obc" id="obc">OBC<br>
							    <input type="radio" name="quota" value="sc" id="sc">SC/ST<br>
							    <span id ="err_quota"></span>
							</div>
						</br></br><br><br><br>

							<div class="ctrl" style="text-align: center">
								<button type="submit" name="submit" id="submit" value="submit" onclick="return chk_valid()">Submit</button>
									<input type="reset" name="reset" id="reset" value="Cancel">
							</div>
						</form>
					</center>
				</div>
			</div>

		<div class="footer">
					<div class="container">
						<div class="block">
							<div class="box">
							<div class="box-header">
								Gallary
							</div>
							<div class="box-content">
							<table class="gallery">
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



	</body>
	</html>
