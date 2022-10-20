<?php
session_start();
$name=$_POST['name'];
$email=$_POST['email'];
$password=$_POST['password'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$day=$_POST['day'];
$month=$_POST['month'];
$year=$_POST['year'];
$otp=$_POST['otp'];

$con=mysqli_connect("localhost","id2233668_aidnextdoor","21stcentury","id2233668_db1");
mysqli_select_db($con,"id2233668_db1");
$corr=$_SESSION['otp'];
if($corr==$otp){
$q="insert into login_table(name,email,password,gender,mobile,day,month,year)values('$name','$email','$password','$gender','$mobile','$day','$month','$year')";
$check=mysqli_query($con,$q);
}
if($check)
{
    echo "Account created successfully";
}
else
{
    echo "Account already exist for this email id or mobile no! Please login";
}
mysqli_close($con);
?>