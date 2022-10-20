function validateEmail(email) {
    var re =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function validatePass(value)
{
	var pa=/^([a-zA-Z0-9@*#!&]{6,15})$/;   // consists of only these
	return pa.test(value);
}

$(document).ready(function(){
$("#loginform").submit(function(){
  var x=$("#email").val();
  var y=$("#password").val();
  var vx=validateEmail(x);
  var vy=validatePass(y);
  var flag=true;  
  if(vx==false && vy==false)
  {
    $("#error-email").html("Incorrect Email");
    $("#error-password").html("Incorrect Password");
		  flag=false;
  }
    else if(vx==false)
    {
          $("#error-email").html("Incorrect Email");
         $("#error-password").html("");
          flag=false;         
    }
    else if(vy==false)
    {
        $("#error-email").html("");
        $("#error-password").html("Incorrect Password Format");
		    
		      flag=false; 
    }
	if(flag==true)
        {
                $.ajax({
                    url:"validation.php",
                    type:"POST",
                    async:false,
                    data:{
                      "done":1,
                       "email":x,
                       "password":y
                       },
                      success:function(data){
                       if(data!=1)
                        {
                           $("#password").val("");
                           $("#error-email").html("Incorrect Email");
                            $("#error-password").html("Incorrect Password");
                           flag=false;
                         }
                       }
                })
           }
        return flag;
	});
});