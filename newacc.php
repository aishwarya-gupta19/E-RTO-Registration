

<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Registration Form</title>
	<link rel="stylesheet" href="css/rstyle.css" type="text/css">
</head>
<body>

	<div class="simple-form">
		<form id="registration" action="insert/insownr.php" method="POST" >
			<h1 style="color:white;font-family: cursive;">User Registration</h1>
			<input type="hidden" name="oid" id="button" placeholder="Enter your ownerid" ><br><br>
			<div id="1"><input type="text" name="fname" id="button" placeholder="Enter your First Name" required="true"><br><br></div>

			<input type="text" name="lname" id="button" placeholder="enter your last name" required="true"><br><br>
			
			<select  name="gender" id="button" style="width: 270px";>
			<option>Gender</option>
			<option>Male</option>
			<option>Female</option>
			</select><br><br>

			<input type="email" name="email" id="button" placeholder="enter your Email ID" required="true"><br><br>
			<input type="password" name="pswd" id="button" placeholder="enter the Password" required="true">
			
			<!--<input type="password" name="rpswd" id="button" placeholder="Re-Type Password">
			<br><br>-->
			
			<!--<input type="text" name="insid" id="button" placeholder="Enter InsuranceID(if any)"><br><br>
			<input type="text" name="chassisid" id="button" placeholder="Enter ChassisID(if any)"><br><br>
			<input type="text" name="Liscenseid" id="button" placeholder="Enter LiscenseID(if any)"><br><br>
-->			<br><br>
			<select id="ph1"><option>+91</option></select>
			<input type="number" name="num" placeholder="enter your mobile number" id="ph" required="true"><br><br>

			<input type="text" name="lyt" id="button" placeholder="enter your layout--Address line1" required="true"><br><br>
			<input type="text" name="city" id="button" placeholder="enter your city--Address line2" required="true"><br><br>
			<input type="text" name="pincode" id="button" placeholder="enter your pincode--Address line3" required="true"><br><br>
			<input type="submit" name="sub" value="Login" style="align-content: center;width: 100px;height: 30px;border-radius: 20px; opacity: .9">
		<!--	<input style="align-content:centre;width:100px;height:30px;border-radius: 20px;opacity: .7" type="submit" name="sub" value="Login">
			-->
		</form>
		<!-- <?php 
		if (isset($POST['sub'])) 
		{
		 $fnm=$_POST['fname'];
			$lnm=$_POST['lname'];
			$gender=$_POST['gender'];
			$email=$_POST['email'];
			$pswd=$_POST['pswd'];
			//$rpswd=$_POST['rpswd'];
			$insid=$_POST['insid'];
			$chassisid=$_POST['chassisid'];
			$Liscenseid=$_POST['Liscenseid'];
			$num=$_POST['num'];
			$lyt=$_POST['lyt'];
			$city=$_POST['city'];
			$pincode=$_POST['pincode'];
			if (mysqli_query($link,"insert into owner(fname,lname,gender,email_id,password,insurance_id,chassis_no,liscence_id,phone,layout,city,pincode) values('$fnm','$lnm','$gender','$email','$pswd','$insid',$chassisid,'$liscenseid','$num,'lyt','$city','$pincode')")) {
				
				echo "<script>alert('Data Insert')</script>";
			}
			else
			{
				echo "<script>alert('Data Not Inserted')</script>";
			}


		}
		?> --> 
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