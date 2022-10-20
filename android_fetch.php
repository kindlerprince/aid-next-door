<?php
	$username=$_POST['username'];
	$con=mysqli_connect("localhost","id2233668_aidnextdoor","21stcentury","id2233668_db1");
	mysqli_select_db($con,"id2233668_db1");
	$query="select * from employee where username='$username'";
	$result=mysqli_query($con,$query);
	$row=mysqli_num_rows($result);
	$arr=mysqli_fetch_array($result);
	if($row==1)
	{
		$data['name']=$arr['name'];
		$data['age']=$arr['age'];
		$data['gender']=$arr['gender'];
		$data['mobile']=$arr['mobile'];
		$data['language']=$arr['language'];
		$data['experience']=$arr['experience'];
		$data['request']=$arr['request'];
		$data['photo']=$arr['photo'];
                $data['username']=$arr['username'];
		echo json_encode($data);
	}
	mysqli_close($con);
?>