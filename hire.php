<?php

       session_start();

	 $req=$_POST['requested'];
        $avail=$_POST['available'];
         $done=$_POST['done'];
          $username=$_POST['username'];

 	$con=mysqli_connect("localhost","id2233668_aidnextdoor","21stcentury","id2233668_db1");
	mysqli_select_db($con,"id2233668_db1");
           
     $q="UPDATE employee set request='$req' WHERE username='$username'";
     
     $res=mysqli_query($con,$q);
    
    if($res)
       //echo "connection has been established";
	 //echo "Request Sent".$req.$avail;

  $name=$_SESSION['name'];
  $email=$_SESSION['email'];
require('Twilio/autoload.php');



use Twilio\Rest\Client;

$sid = 'AC7ac3ccdd2794038f5fd432298f5d21ba';
$token = 'a466bc4d5d730370fe8de19e890c3e85';
$client = new Client($sid, $token);
/*if($client)
  echo "client is created";*/
if($done==1)
{
    $msg="Thank you so much for appreciating our efforts and believing in AND.We assure you that all the services provided by us will satisfy your needs in the best possible manner. We hope that your experience with AND be a pleasant one.
Best wishes
AND Team
";
    $msg=wordwrap($msg,70);
    mail($email,"no reply",$msg);
    $result=$client->messages->create('+917542908927',array('from'=> '+1(507) 481-1363 ','body'=> "$name has requested for $username service $email"));
}
else
{
     $msg=("Let us know that how can we improve our service and serve you in a better way.We hope that you will again provide us an opportunity to make our services available to you.");
    $msg=wordwrap($msg,70);
    mail($email,"no reply",$msg); 
     $result=$client->messages->create('+917542908927',array('from'=> '+1(507) 481-1363 ','body'=> "$name has requested the cancellation for $username $email"));
}
if(isset($result))
  echo" Message Sent";
else
   echo "not sent";

mysqli_close($con);


?>