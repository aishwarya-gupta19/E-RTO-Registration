<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/rstyle.css" type="text/css">
</head>
<body>

	<div class="simple-form">
		<form id="registration" method="POST" action="insert/insertins2.php">
			<h1 style="color:white;font-family: cursive;">Insurance Application</h1>
			<!--<div id="1"><input type="number" name="insid" id="button" placeholder="Enter Insurance ID"><br><br></div>-->

			<input type="number" name="ownerid" id="button" placeholder="enter Owner ID" required="true"><br><br>
			
		<input type="number" name="chassisno" id="button" placeholder="Enter Chassis No" required="true"><br><br>
			

			<input type="text" name="company" id="button" placeholder="Enter Insurance Company Name" required="true"><br><br>

			<input type="date" name="fromdate" id="button" placeholder="Enter Start Date" required="true"><br><br>

			<input type="date" name="todate" id="button" placeholder="Enter End Date" required="true"><br><br>

			<input type="number" name="payamt" id="button" placeholder="Enter the Payable Amt" required="true"><br><br>
			
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