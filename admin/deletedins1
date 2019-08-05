<?php
$mysqli= new mysqli("localhost","root","","rto") or die('error');

//getting id of the data from url

	//echo 'success';
 $id= $_GET['insurance_id'];

 $result=$mysqli->query("DELETE FROM insurance WHERE insurance_id = '$id' " ) or die(mysqli_error($mysqli));
  if($result)
  {
	header("location:viewins.php");
  }
  else{
	echo 'fail';
  }
?>

