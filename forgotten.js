function validateEmail(email) {
    var re =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}
function validateNum(value)
{
  var NumberRegex = /^[0-9]*$/;
  if(value.length == 10)
    return NumberRegex.test(value);
  else
    return false;
}
function validateOtp(value)
{
  var NumberRegex = /^[0-9]*$/;
  if(value.length == 6)
    return NumberRegex.test(value);
  else
    return false;
}
$(document).ready(function(){
	$("#continue").click(function(){
	var email=$("#email").val();
	var mobile=$("#mobile").val();
        var flag=false;
        if(email!=null)
        {
               flag=validateEmail(email);
         }
         if(mobile!=null)
          {
               flag=validateNum(mobile);
           }
        
	$.ajax({
		url:"forgottenotp.php",
		type:"POST",
		async:false,
		data:{
		"done":1,
		"email":email,
		"mobile":mobile
		},
		success:function(data){
			alert(data);
			if(data=='OTP Sent'){
				$("#otp-form").show();
                                $("#rpemail").hide();
			}
		}
	})
        
        
});
	$("#confirm-form").submit(function(){
		var otp=$("#otp").val();
		var email=$("#email").val();
		var mobile=$("#mobile").val();
		var flag=validateOtp(otp);
		if(flag==false)
		{
			flag=false;
			alert("Enter 6 digit OTP")
			return flag;
		}
		$.ajax({
			url:"confirmotp.php",
			type:"POST",
			async:false,
			data:{
				"done":1,
				"otp":otp,
				"email":email,
				"mobile":mobile
			},
			success:function(data){
				if(data=="0"){
					alert("Incorrect OTP")
					flag=false;
				}
			}
		})
		if(flag==false)
		{
			flag=false;
			alert("Enter 6 digit OTP")
		}
		return flag;

	});
});