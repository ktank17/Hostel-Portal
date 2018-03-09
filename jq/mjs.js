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
			var msg="Password does not match...";
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
	if(city=="")
	{
		var msg="please Enter city..."
		document.getElementById("err_city").innerHTML=msg;
		flag++;
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
