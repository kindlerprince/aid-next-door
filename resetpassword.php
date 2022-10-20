<?php
    $email=$_POST['emob'];
    $mob=$_POST['emob'];
    $password=$_POST['password'];
    $con=mysqli_connect("localhost","id2233668_aidnextdoor","21stcentury","id2233668_db1");
    mysqli_select_db($con,"id2233668_db1");
    $q="update login_table set password='$password' where email='$email' or mobile='$mob'";
    $check=mysqli_query($con,$q);
    require('Twilio/autoload.php');
    use Twilio\Rest\Client;
    $sid = 'AC7ac3ccdd2794038f5fd432298f5d21ba';
    $token = 'a466bc4d5d730370fe8de19e890c3e85';
    $client = new Client($sid, $token);
    $msg='Your password of aidnextdoor.com has been reset '.$msg;
    if($check)
    {
        mail($email,"don't reply",$msg);
        $result=$client->messages->create('+917542908927',array('from'=> '+1(507) 481-1363 ','body'=> "$msg"));
        header('location: form.php');

    }
    mysqli_close($con);
?>