function validatePass(value)
{
    var pa=/^([a-zA-Z0-9@*#!&]{6,15})$/;   // consists of only these
    return pa.test(value);
}
$(document).ready(function(){
	$("#reset-password").submit(function(){
		var x=$("#password").val();
		var y=$("#repassword").val();
		var flag;
                flag=validatePass(x);
                if(flag==false)
		{
			alert("Enter 6 digit password");
                         return flag;
		}
		if(x==y)
		{
			flag=true;
		}
		else
		{
                        flag=false;
			alert("Entered password do not match");
		}
		return flag;
	});
});