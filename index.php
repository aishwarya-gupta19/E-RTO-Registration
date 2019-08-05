<?php
 include('connection.php');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Home</title>
	<link rel="stylesheet" type="text/css" href="css/s2.css">
</head>
<body style="background-image: url(img/back5.jpg);>
	<div id="header">
		<h1 style="padding: 10px;"><font face="gabriola" color="pink";>RTO  Vehicle  Registration</h1>
		
	<div id="nav">
		<ul>
			<li><a href="index.php"><b>Home</b></a></li>
			<li><a href="admin/adminlog2.php"><b>Admin Login</b></a></li>
 			<li><a href="#userlog"><b>User Login</b></a></li>
 			<li><a href="contact1.php"><b>Contact Us</b></a></li>
			
		</ul>
	</div>
	<div id="container">
		<div id="left"><br><br>
			<img src="img/s1.jpg" width=170 height=125 alt="s1">
			<centre><img src="img/s2.jpg" width=170 height=125 alt="s1"></centre>
			<centre><img src="img/s5.jpg" width=170 height=125 alt="s1"></centre>
			
		</div>

		<div id="centre">
			<h1 style="color:pink;">Welcome To E-RTO</h1>
			<p>Lorem ipsum dolor sit amet, consectetur 
				 Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
		</p>
		
		<center>
			<p id="userlog">
			<h2 style="color:#F05E3E;font-family: Georgia ;">User Login</h2>
			<form action ="" method="post">
			<table>
				<tr >
					<td width="200"height="50" style="color: pink"><h2>Username</h2></td>
					<td width="100"height="50"><input style="width:200px;height:30px;border-radius: 30px" type="text" name="user_nm" placeholder="Enter Username" required="true"></td>
				</tr>

				<tr>
					<td width="200"height="50"style="color: pink;"><h2>Password</h2></td>
					<td width="200"height="50"><input style="width:200px;height:30px;border-radius: 30px" type="password" name="user_psd" placeholder="Enter Password" required="true"></td>
				</tr>
				<tr>
					<td><input style="width:100px;height:30px;border-radius: 20px;opacity: .7" type="submit" name="sub" value="Login"></td>
					<td align="right"><a href="newacc.php"><h2><b>New Registration</b></h2></a></td>
				</tr>
			</table>
			</form>
		</p>
			<?php
			if(isset($_POST["sub"])) //$_post-global array
			{
				$user_nm=$_POST['user_nm'];
				$user_psd=$_POST['user_psd'];
				$q="select * from user";
				$run=mysqli_query($link,$q);
				$row=mysqli_fetch_array($run);
				$un=$row['user_nm'];
				$up=$row['user_psd'];
				if($un==$user_nm && $up==$user_psd)
				{	echo "success";
					header("Location:login.php");
					
				}
				else
				{
					echo "fail";
					header("Location:index.php?wrong user");
				}


			}
			?>
		</center>
		</div>
		<div id="right"><br><br>
			<centre><img src="img/s1.jpg" width=170 height=125 alt="s1"></centre>
			<centre><img src="img/s2.jpg" width=170 height=125 alt="s1"></centre>
			<centre><img src="img/s5.jpg" width=170 height=125 alt="s1"></centre>
			
		</div>
		
	</div><br><br>
	<!--<div id="footer"><h1>footer</h1></div>-->

</body>
</html>