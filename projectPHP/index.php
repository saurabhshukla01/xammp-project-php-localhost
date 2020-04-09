<?php include("common/header1.php") ?>
<?php

session_start();
if(isset($_SESSION['Uname']))
{
echo "<h2><center>You are already Login</center></h2>";
exit();
}

?>
<h3 align="center"> Registration Form  </h2>
<form method ="post">
	<table style="text-align:center;" align="center" width="60%" border="1">
		<tr>
			<td> Username : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="text" name="username" placeholder="Enter username" ></td>
		</tr>
		<tr>
			<td> Email : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="email" name="email" placeholder="Enter Email" /></td>
		</tr>
		<tr>
			<td> Password : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="text" name="pwd" placeholder="Enter Password" ></td>
		</tr>
		<tr></tr>
		<tr>
			<td style="width: 973px; height: 50px; margin: 0px;" colspan="3" align ="center"> <input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>
<?php

if(isset($_POST['submit']))
{
$_SESSION['Uname'] = $_POST['username'];
header('location:welcome.php');
}
?>
<?php include("common/footer1.php") ?>
