<?php
        session_start();
	$email=$_POST['email'];
	$mob=$_POST['mob'];
        $x=rand(100000,999999);
        $_SESSION['otp']=$x;
        $_SESSION['tempemail']=$email;
        $msg=$x;
require('Twilio/autoload.php');

	use Twilio\Rest\Client;
	$sid = 'AC7ac3ccdd2794038f5fd432298f5d21ba';
	$token = 'a466bc4d5d730370fe8de19e890c3e85';
	$client = new Client($sid, $token);
	$msg='OTP for sign up in aidnextdoor.com is '.$msg;
    mail($email,"no reply",$msg);
    $result=$client->messages->create('+917542908927',array('from'=> '+1(507) 481-1363 ','body'=> "$msg"));
	if(isset($result))
  		echo"OTP sent to ".$email;
	else
   		echo "OTP not sent";

?>