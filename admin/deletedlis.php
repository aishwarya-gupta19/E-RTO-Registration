<?php
$mysqli= new mysqli("localhost","root","","rto") or die('error');

//getting id of the data from url

	//echo 'success';
 $id= $_GET['liscense_id'];

 $result=$mysqli->query("DELETE FROM liscense WHERE liscense_id = '$id' " ) or die(mysqli_error($mysqli));
  if($result)
  {
  	echo "success";
	header("location:viewlis.php");
  }
  else{
	echo 'fail';
  }
?>

