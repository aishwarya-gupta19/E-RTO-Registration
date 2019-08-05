<?php

$connect=mysqli_connect("localhost","root","","rto") or die('error');
  
if(isset($_POST['sub']))
{
	
    $fnm=$_POST['fname'];
	$lnm=$_POST['lname'];
	$gender=$_POST['gender'];
	$email=$_POST['email'];
	$pswd=$_POST['pswd'];
	/*$insid=$_POST['insid'];
	$chassisid=$_POST['chassisid'];
	$liscenseid=$_POST['Liscenseid'];*/
	$num=$_POST['num'];
	$lyt=$_POST['lyt'];
	$city=$_POST['city'];
	$pincode=$_POST['pincode'];
	
	$sql= "INSERT into owner (fname,lname,gender,email_id,password,phone,layout,city,pincode) values('".$fnm."','".$lnm."','".$gender."','".$email."','".$pswd."','".$num."','".$lyt."','".$city."','".$pincode."')";
	$query=mysqli_query($connect,$sql) or die(mysqli_error($connect));
    
    
    header("location:../login.php"); 
    
}

?>

