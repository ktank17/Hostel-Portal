function chk_valid()
{
	var username=document.getElementById("username").value;
	var pword=document.getElementById("pword").value;
	var regid=document.getElementById("regid").value;
	var flg=0;

	if(username=="")
	{
		var msg="please enter Username...";
		document.getElementById("err_username").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([A-z]{2,20})$/;
		if(reg.test(username)==false)
		{
			var msg="please enter valid Username...";
			document.getElementById("err_username").innerHTML=msg;
			flg++;
		}
		else
		{
			document.getElementById("err_username").innerHTML="";
		}
	}

	if(pword=="")
	{
		var msg="please enter Password...";
		document.getElementById("err_pword").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([A-z0-9!@#$%^&**-+/]{8,20})$/;
		if(reg.test(pword)==false)
		{
			var msg="please enter valid Password...";
			document.getElementById("err_pword").innerHTML=msg;
			flg++;
		}
		else
		{
			document.getElementById("err_pword").innerHTML="";
		}
	}

	if(regid=="")
	{
		var msg="please enter Registration ID...";
		document.getElementById("err_regid").innerHTML=msg;
		flg++;
	}
	else
	{
		var reg=/^([0-9]{4})$/;
		if(reg.test(regid)==false)
		{
			var msg="please enter valid Registration ID";
			document.getElementById("err_regid").innerHTML=msg;
			flag++;
		}
		else
		{
			document.getElementById("err_regid").innerHTML="";
		}
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
