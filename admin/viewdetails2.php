<?php
$db_host = 'localhost'; // Server Name
$db_user = 'root'; // Username
$db_pass = ''; // Password
$db_name = 'rto'; // Database Name

$mysqli = new mysqli($db_host, $db_user, $db_pass, $db_name);
if ($mysqli->connect_error) {
	die ('Failed to connect to MySQL: ' . $mysqli->mysqli_connect_error);	
}
	

$query = $mysqli->query("CALL `viewdetails`();");

//$query = mysqli_query($conn, $sql);

if (!$query) {
	die ('SQL Error: ' . mysqli_error($conn));
}
?>
<html>
<head>
	<title>Displaying MySQL Data in HTML Table</title>
	<style type="text/css">
		body {
			font-size: 15px;
			color: #343d44;
			font-family: "segoe-ui", "open-sans", tahoma, arial;
			padding: 0;
			margin: 0;
		}
		button {
    background-color: powderblue;
    border: none;
    color: grey;
    padding: 12px 30px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin-left:650px;
    cursor: pointer;
}

		table {
			margin: auto;
			font-family: "Lucida Sans Unicode", "Lucida Grande", "Segoe Ui";
			font-size: 12px;
		}

		h1 {
			margin: 25px auto 0;
			text-align: center;
			text-transform: uppercase;
			font-size: 17px;
		}

		table td {
			transition: all .5s;
		}
		
		/* Table */
		.data-table {
			border-collapse: collapse;
			font-size: 14px;
			min-width: 537px;
		}

		.data-table th, 
		.data-table td {
			border: 1px solid #e1edff;
			padding: 7px 17px;
		}
		.data-table caption {
			margin: 7px;
		}

		/* Table Header */
		.data-table thead th {
			background-color: #508abb;
			color: #FFFFFF;
			border-color: #6ea1cc !important;
			text-transform: uppercase;
		}

		/* Table Body */
		.data-table tbody td {
			color: #353535;
		}
		.data-table tbody td:first-child,
		.data-table tbody td:nth-child(4),
		.data-table tbody td:last-child {
			text-align: right;
		}

		.data-table tbody tr:nth-child(odd) td {
			background-color: #f4fbff;
		}
		.data-table tbody tr:hover td {
			background-color: #ffffa2;
			border-color: #ffff0f;
		}

		/* Table Footer */
		.data-table tfoot th {
			background-color: #e5f5ff;
			text-align: right;
		}
		.data-table tfoot th:first-child {
			text-align: left;
		}
		.data-table tbody td:empty
		{
			background-color: #ffcccc;
		}
	</style>
</head>
<body>
	
	<table class="data-table">
		<caption class="title"><h1>Owner Registration Details</h1></caption>
		<tbody>
		<thead>
			<tr>
				<th>OwnerID</th>
				<th>Fname</th>
				<th>Lname</th>
				<th>Gender</th>
				<th>Email-id</th>
				<th>Password</th>
				<th>Phone</th>
				<th>Layout</th>
				<th>City</th>
				<th>Pincode</th>
				<th>Delete</th>
				<th>Update</th>
				
				

			</tr>
		</thead>
		
		<?php
		
		while ($row = mysqli_fetch_array($query))
		{?>
			
			<tr>
					<td><?php echo $row[0];?></td>
					<td><?php echo $row[1];?></td>
					<td><?php echo $row[2];?></td>
					<td><?php echo $row[3];?></td>
					<td><?php echo $row[4];?></td>
					<td><?php echo $row[5];?></td>
					<td><?php echo $row[6];?></td>
					<td><?php echo $row[7];?></td>
					<td><?php echo $row[8];?></td>
					<td><?php echo $row[9];?></td>
					
					<td><a href="deletedetails.php?owner_id=<?php echo $row[0];?> " >delete</a></td>
					<td><a name=up href="update.php?owner_id=<?php echo $row[0];?>">update</a></td>

				</tr>
			
		<?php }
		?>
		
		</tbody>
		
	</table>
	<br><br><br>
	<a href="ahome1.php">
	<button type="submit" name="submit" value="send" align="center">Home</button>
</a>
</form>
</body>
</html>

