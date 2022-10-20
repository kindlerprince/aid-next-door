function validateEmail(email)
{
  var re =/^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
  return re.test(email);
}

function validatePass(value)
{
    var pa=/^([a-zA-Z0-9@*#!&]{6,15})$/;   // consists of only these
    return pa.test(value);
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
  if(value.length==6)
    return NumberRegex.test(value);
  else
    return false;
}

  $(document).ready(function(){
    $("#signupform").click(function(){
      //alert("click is working");
      var name=$("#name").val();
      var x=$("#email").val();
      var y=$("#password").val();
      var y1=$("#rpassword").val();
      var mob=$("#mobile").val();
      var otp=$("#enterotp").val();
      var selectedVal = "";
      var selected = $("input[type='radio'][name='gender']:checked");
      var gender=selected.val();
      var day=$("#day").val();
      var month=$("#month").val();
      var year=$("#year").val();
      var vz=validateNum(mob);
      var vx=validateEmail(x);
      var vy=validatePass(y);
      var vt=validateOtp(otp);
      var flag=true;  
      if(vx==false)
      {
        $("#erroremail").html("Invalid Email");
        flag=false;         
      }
      else
      {
        $("#erroremail").html("");
      }
      if(vy==false)
      {
        $("#errorpassword").html("Invalid Password");
        flag=false; 
      }
      else
      {
        $("#errorpassword").html("");
      }
      if(vz==false)
      {
        $("#errormobile").html("Invalid Number");
        flag=false;
      }
      else
      {
        $("#errormobile").html("");
      }
      if(y!=y1)
      {
        $("#rerrorpassword").html("Entered Password does not match"); 
        flag=false;
      }
      else
      {
        $("#rerrorpassword").html("");
      }
      if(day==null || month==null || year==null)
      {
        $("#errorbd").html("Invalid date of birth");
        flag=false;
      }
      else
      {
        $("#errorbd").html("");
      }
      if(vt==false)
      {
        $("#success").html("Incorrect OTP");
        flag=false;
      }
      else
      {
        $("#success").html("");
      }
      if(flag==true)
      {
        $.ajax(
        {
          url:"register.php",
          type:"POST",
          async:false,
          data:
          {
            "done":1,
            "name":name,
            "email":x,
            "password":y,
            "mobile":mob,
            "gender":gender,
            "day":day,
            "month":month,
            "year":year,
            "otp":otp
          },
          success:function(data)
          {
               $("#success").html(data); 
               if(data=='Account created successfully')
               {
                $("#name").val("");
                $("#email").val("");
                $("#mobile").val("");
                selected.val("");
                $("#day").val("");
                $("#month").val("");
                $("#year").val("");
                $("#erroremail").html("");
                $("#errorpassword").html("");
                $("#rerrorpassword").html("");
                $("#errormobile").html("");
                $("#errorbd").html("");
                $("#name").attr("disabled",false);
          $("#email").attr("disabled",false);
          $("#password").attr("disabled",false);
          $("#rpassword").attr("disabled",false);
          $("#gender").attr("disabled",false);
          $("#mobile").attr("disabled",false);
          $("#day").attr("disabled",false);
          $("#month").attr("disabled",false);
          $("#year").attr("disabled",false);

               }
              
               $("#password").val("");
               $("#rpassword").val("");
               //$("p").html(data);
              }
            })
      }

    });
});