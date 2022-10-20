<?php
    $email=$_POST['email'];
    $mob=$_POST['mobile'];
    $msg=rand(100000,999999);
    $msg="".$msg;
    $con=mysqli_connect("localhost","id2233668_aidnextdoor","21stcentury","id2233668_db1");
    mysqli_select_db($con,"id2233668_db1");
    $q="update login_table set otp='$msg' where email='$email' mobile='$mob'";
    mysqli_query($con,$q);
    $check=mysqli_affected_rows($con);
    require('Twilio/autoload.php');
    use Twilio\Rest\Client;
    $sid = 'AC7ac3ccdd2794038f5fd432298f5d21ba';
    $token = 'a466bc4d5d730370fe8de19e890c3e85';
    $client = new Client($sid, $token);
    $msg='OTP for resetting the password of aidnextdoor.com is '.$msg;
    if($check)
    {
        mail($email,"no reply",$msg);
        $result=$client->messages->create('+917542908927',array('from'=> '+1(507) 481-1363 ','body'=> "$msg"));
        if(isset($result))
            echo"OTP Sent";
        else
            echo "OTP not sent";
    }
    else
     {
        echo "Incorrect Email id or mobile";
     }
    mysqli_close($con);
?>