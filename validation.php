<?php
       /*session_start();
        if(!isset($_SESSION['name']))
           header('location: index.php');*/
       
?>
<?php
	session_start();
	$email=$_POST["email"];
	$password=$_POST["password"];
	$con=mysqli_connect("localhost","id2233668_aidnextdoor","21stcentury","id2233668_db1");
	mysqli_select_db($con,"id2233668_db1");
	$q="select * from login_table where email='$email' && password='$password'";

	$result=mysqli_query($con,$q);
	$rows=mysqli_num_rows($result);
         
	if($rows==1)
	{
                $arr=mysqli_fetch_array($result);
		$_SESSION['name']=$arr['name'];
                $_SESSION['email']=$arr['email'];
               //header('location: index.php');
               echo "1";
               
	}
        else
         {
      	     echo "No account related to this email";
              header('location: form.php');
         }
         mysqli_close($con);
?>