<?php
 include('connection.php');
?>

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
			if(isset($_POST["sub"])) //$_post-global array
			{
				$admin_id=$_POST['admin_id'];
				$admin_psd=$_POST['admin_psd'];
				$q="select * from admin";
				$run=mysqli_query($link,$q);
				$row=mysqli_fetch_array($run);
				$un=$row['admin_id'];
				$up=$row['admin_psd'];
				if($un==$admin_id && $up==$admin_psd)
				{	echo "success";
					header("Location:ahome1.php");
					
				}
				else
				{
					echo "fail";
					header("Location:../index.php?wrong user");
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