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
			
			<input type="number" name="ownerid" id="button" placeholder="enter Owner ID" required="true"><br><br>
			
			
			<select type="text" name="vcate" placeholder="enter your vehicle category" id="button" required="true" style="width:270px"><option>Two wheeler</option><option>Four wheeler</option></select>
			<br><br>

			<input type="text" name="school" id="button" placeholder="Enter Driving School Name" required="true"><br><br>
			
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