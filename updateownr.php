<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/rstyle.css" type="text/css">
</head>
<body>

	<div class="simple-form">
		<form id="registration" method="POST" action="insert/insertliscense.php">
			<h1 style="color:white;font-family: cursive;">Liscence Application</h1>
			
			<input type="number" name="ownerid" id="button" placeholder="enter Owner ID whose details u want to update"><br><br>
			
			
			<input type="text" name="fname" id="button" placeholder="Enter the First Name"><br><br></div>

			<input type="text" name="lname" id="button" placeholder="enter the last name"><br><br>
			
			<input type="submit" name="sub" value="Login" style="align-content: center;width: 100px;height: 30px;border-radius: 20px; opacity: .9">
		
		</form>
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