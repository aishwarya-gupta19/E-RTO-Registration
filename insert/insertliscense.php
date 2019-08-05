<?php
	$con=mysqli_connect('localhost','root','');

	if(!$con)
	{
		echo "not connected to server";

	}
	if (!mysqli_select_db($con,'rto')) 
	{
		echo "database not selected";
	}

	
	$ownerid=$_POST['ownerid'];
	$vcate=$_POST['vcate'];
	$school=$_POST['school'];
	
	$sql="insert into liscense (owner_id,vehicle_type,driving_school) values ('$ownerid','$vcate','$school')";
	if(!mysqli_query($con,$sql))
	{

		echo "<script>alert('Data Not Inserted')</script>";
	}
	else
	{
		echo "<script>alert('Data Insert')</script>";

	}

	header("refresh:1; url=../login.php");
	
?>
		
		
