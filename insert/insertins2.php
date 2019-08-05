<?php

$connect=mysqli_connect("localhost","root","","rto") or die('error');
  
if(isset($_POST['sub']))
{

    $ownerid=$_POST['ownerid'];
	$chassisno=$_POST['chassisno'];
	$company=$_POST['company'];
	$frmdate=$_POST['fromdate'];
	$res=explode('-',$frmdate);
	$date=$res[2];
	$month=$res[1];
	$year=$res[0];
	$new1=$year.'-'.$month.'-'.$date;

	$todate=$_POST['todate'];
	$res=explode('-',$todate);
	$date=$res[2];
	$month=$res[1];
	$year=$res[0];
	$new2=$year.'-'.$month.'-'.$date;

	$payamt=$_POST['payamt'];
	
	$sql= "INSERT into insurance (owner_id,chassis_no,company,from_date,to_date,payable_amt) values('".$ownerid."','".$chassisno."','".$company."','".$new1."','".$new2."','".$payamt."')";
	$query=mysqli_query($connect,$sql) or die(mysqli_error($connect));
    
    
    header("location:../login.php"); 
    
}

?>

