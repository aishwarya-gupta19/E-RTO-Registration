<?php

$connect=mysqli_connect("localhost","root","","rto") or die('error');
  
if(isset($_POST['sub']))
{

    $ChassisNo=$_POST['ChassisNo'];
	$ownerid=$_POST['ownerid'];
	$vcate=$_POST['vcate'];
	$model=$_POST['model'];
	$colour=$_POST['colour'];
	$milage=$_POST['milage'];
	
	
	$sql= "INSERT into vregister (chassis_no,owner_id,category,model,colour,milage) values('".$ChassisNo."','".$ownerid."','".$vcate."','".$model."','".$colour."','".$milage."')";
	$query=mysqli_query($connect,$sql) or die(mysqli_error($connect));
    
    
    header("location:../login.php"); 
    
}

?>

