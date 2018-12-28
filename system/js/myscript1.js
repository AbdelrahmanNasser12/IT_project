function Validation()
{
	
	var user = document.getElementById('user_id').value;
	var pwd = document.getElementById('pwd').value;
	
	if(user=="")
	{
		document.getElementById('user_id').style.borderColor="red";
		alert("Please Fill User Name");
		return false;
	}
    else if(pwd=="")
	{
		document.getElementById('pwd').style.borderColor="red";
		alert("Please Fill Password");
		return false;
	}
	else
	{
		return true;
	}
}