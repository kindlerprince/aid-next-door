<?php
	$con=mysqli_connect("localhost","id2233668_aidnextdoor","21stcentury","id2233668_db1");
	mysqli_select_db($con,"id2233668_db1");
	
	$name=$_POST['name'];
	$comment=$_POST['comment'];
        $email=$_POST['email'];
		$q="insert into comment_table(name,comment,email) values('$name','$comment','$email')";
		mysqli_query($con,$q);
            $msg = "Thank you so much for encouraging and supporting our efforts.We will try our best to uphold our mission of providing the best service in the most effective way and prove our worth for your believe in us.You can like our facebook page https://www.facebook.com/andorganisation/ for updates.
Follow us at google plus https://plus.google.com/113910465130247832629

Regards,
Aid Next Door
www.aidnextdoor.com
";
	//$headers = "From: princebantikumar@gmail.com" . "\r\n" .
	// use wordwrap() if lines are longer than 70 characters
	$msg = wordwrap($msg,70);

		// send email	
		mail($email,"no reply",$msg);
	echo "Thank You ! for your valuable comment";
require('Twilio/autoload.php');

use Twilio\Rest\Client;

$sid = 'AC7ac3ccdd2794038f5fd432298f5d21ba';
$token = 'a466bc4d5d730370fe8de19e890c3e85';
$client = new Client($sid, $token);
/*if($client)
  echo "client is created";*/

    $result=$client->messages->create('+917542908927',array('from'=> '+1(507) 481-1363 ','body'=> "$name $email has commented"));



       mysqli_close($con);
?>