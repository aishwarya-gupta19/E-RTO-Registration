<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="../css/rstyle.css" type="text/css">
</head>
<body>

	<div style="padding-top: 50px;" class="simple-form">
		<form id="registration" method="POST" >
			<h1 style="color:white;font-family: cursive;">Admin Login</h1>
			<input type="email" name="admin_id" id="button" placeholder="enter Admin ID"><br><br>

			<input type="password" name="admin_psd" id="button" placeholder="Enter Password"><br><br>
			
			<input type="submit" name="sub" value="Login" style="align-content: center;width: 100px;height: 30px;border-radius: 20px; opacity: .9">
		
		</form>
<?php

   $servername = "localhost";
$username = "root";
$password = "";

//Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
       mysqli_select_db($conn,"rto");
   // querry the database for user
     if(isset($_POST["sub"]))
     {
      $admin_id = $_POST['admin_id'];
      $admin_psd = $_POST['admin_psd'];

      //to prevent mysql injection;
      $admin_id = stripcslashes($admin_id);
      $admin_psd = stripcslashes($admin_psd);

     $admin_id = mysqli_real_escape_string($conn,$admin_id);
     $admin_psd = mysqli_real_escape_string($conn,$admin_psd);
    $result = mysqli_query($conn,"select * from admin where admin_id = '$admin_id' and admin_psd = '$admin_psd'")
                   or die("failed to query database".mysqli_error() );

    $row = mysqli_fetch_array($result);
    if($row['admin_id'] == $admin_id && $row['admin_psd'] == $admin_psd){
	header("refresh:2;location:ahome1.php");
	
    }
    else{
	   echo "<h1>Failed to login! Incorrect Userid or Password</h1>";
	  header("Location:index.php?wrong user");

    }
}
?>

	</div>

</body>
</html>
<!--
<script type="text/javascript">
	
	function validate()
	{
		var fname=document.getElementById('1').value;
		if(fname==" ")
		{
			alert('please fill fields');
			return false;
		}
		else
			return true;
	}

</script>