<?php
 include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/s1.css">
</head>
<body style="background-color: #5cadd1" >
	<div id="header">
		<h1 style="padding: 10px"><font face="gabriola">RTO  Vehicle  Registration</h1>
		
	<div id="nav">
		<ul>
			<li><a href="index.php"><b>Home</b></a></li>
			<li><a href="register.php."><b>Registration</b></a></li>
 			<li><a href="insurance.php"><b>Insurance</b></a></li>
 			<li><a href="license.php"><b>License</b></a></li>
 			<li><a href="license.php"><b>About Us</b></a></li>
 			<li><a href="contact.php"><b>Contact Us</b></a></li>
 			<li><a href="logout.php"><b>Logout</b></a></li>
			
		</ul>
	</div>
	<div id="container">
		<h1 style="padding: 10px;">Admin Login</h1>
		<br><center>
			<form action ="" method="post">
			<table>
				<tr>
					<td width="200"height="50">Username</td>
					<td width="200"height="50"><input style="width:200px;height:30px;border-radius: 20px" type="text" name="admin_id" placeholder="Enter Username"></td>
				</tr>

				<tr>
					<td width="200"height="50">Password</td>
					<td width="200"height="50"><input style="width:200px;height:30px;border-radius: 20px" type=" type="password" name="admin_psd" placeholder="Enter Password"></td>
				</tr>
				<tr>
					<td><input style="width:100px;height:30px;border-radius: 20px;opacity: .7" type="submit" name="sub" value="Login"></td>
				</tr>
			</table>
			</form>
			<?php
			if(isset($_POST['sub']))
			{
				$un=$_POST['admin_id'];
				$ps=$_POST['admin_psd'];
				$q="select * from admin";
				$run=mysqli_query($link,$q);
				$row=mysqli_fetch_array($run);
				echo $u=$row['admin_id'];
				echo $p=$row['admin_psd'];
				if($un==$u && $ps==$p)
				{
					header("Location:ahome.php");

				}
				else
				{
					header("Location:index.php?wrong user");
				}


			}
			?>
		</center>
		
		
		
	</div>
	<div id="footer">footer</div>

</body>
</html>