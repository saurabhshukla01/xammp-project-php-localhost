<html>
<head>
	<title>
		Student management system
	</title>
</head>
<body style="background-color: #ccc">
<form action="" method="POST">
    <h4 align="right"> <a href="login.php">Admin Login Student </a> </h4>
    <!--<h4 align="right"> <a href="logout.php">Logout </a> </h4>-->
	<h3 align="center"> Student Management System </h3>
<table style="width:20%" align="center" border="1">
	<tr>
		<td>Roll no</td><td><input type="text" name="rollno"></td>
	</tr>
	<tr>
		<td>Standerd</td>
		<td>
			<select name="std">
				<option>Ist</option>
				<option>2nd</option>
				<option>3rd</option>
				<option>4th</option>
				<option>5th</option>
				<option>6th</option>
				<option>7th</option>
				<option>8th</option>
				<option>9th</option>
				<option>10th</option>
				<option>11th</option>
				<option>12th</option>
			</select>
		</td>
	</tr>
	<tr>
		<td colspan="3" align="center"><input type="submit" name="submit" value="show info"></td>
	</tr>
</table>
</form>
<body>
</html>
<?php
if (isset($_POST['submit']))
{
	$Standerd = $_POST['std'];
	$Rollno = $_POST['rollno'];
	include('dbcon.php');
	include('function.php');
	showdetails($Standerd,$Rollno);

}
?>