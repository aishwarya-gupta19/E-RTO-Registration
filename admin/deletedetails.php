<?php
$mysqli= new mysqli("localhost","root","","rto") or die('error');

//getting id of the data from url

	//echo 'success';
 $id= $_GET['owner_id'];

 $result=$mysqli->query("DELETE FROM owner WHERE owner_id = '$id' " ) or die(mysqli_error($mysqli));
  if($result)
  {
	header("location:viewdetails.php");
  }
  else{
	echo 'fail';
  }
?>

