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
$(document).ready(function(){
       $("#sendotp").click(function(){
       var name=$("#name").val();
       var x=$("#email").val();
       var y=$("#password").val();
       var y1=$("#rpassword").val();
       var mob=$("#mobile").val();
       var selectedVal = "";
       var selected = $("input[type='radio'][name='gender']:checked");
       var gender=selected.val();
       var day=$("#day").val();
       var month=$("#month").val();
       var year=$("#year").val();
       var vz=validateNum(mob);
       var vx=validateEmail(x);
       var vy=validatePass(y);
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
        if(flag==true)
        {
          $("#name").attr("disabled",true);
          $("#email").attr("disabled",true);
          $("#password").attr("disabled",true);
          $("#rpassword").attr("disabled",true);
          $("#gender").attr("disabled",true);
          $("#mobile").attr("disabled",true);
          $("#day").attr("disabled",true);
          $("#month").attr("disabled",true);
          $("#year").attr("disabled",true);
            $.ajax({
            url:"otp.php",
            type:"POST",
            async:false,
            data:{
                    "done":1,
                    "email":x,
                    "mobile":mob
                },
              success:function(data){
               $("#success").html(data);
               }
            })
        }
         
    });
});