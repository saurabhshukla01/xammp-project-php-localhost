<?php include("common/header1.php")?>

<?php // include_once use only one time use any php file next time include file so extends same page two time its is totally
// wrong way nothing using include function twice time ?>

<h3 align="center"> Registration Form  </h2>
<form method ="post" action="userdata.php" enctype="multipart/form-data">
	<table style="text-align:center;" align="center" width="80%" border="1">
		<tr>
			<td> Username : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="text" name="username" placeholder="Enter username" required></td>
		</tr>
		<tr>
			<td> Email : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="email" name="email" placeholder="Enter Email" required/></td>
		</tr>
		<tr>
			<td> Password : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="text" name="pwd" placeholder="Enter Password" required></td>
		</tr>
		<tr>
			<td> Confirm Password : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="text" name="cpwd" placeholder="Enter Confirm password" required></td>
		</tr>
		<tr>
			<td> Mobile Number : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="text" name="mobile_no" placeholder="Enter Mobile Number" required></td>
		</tr>
		<tr>
			<td> Date of Birth : </td>
			<td> <input style="width: 973px; height: 50px; margin: 0px;" type="Date" name="dob" placeholder="Enter DOB" required></td>
		</tr>
		<tr>
			<td> Image : </td>
			<td > <input style="width: 973px; height: 50px; margin: 0px;" type="file" name="image" required></td>
		</tr>
		<tr>
			<td> Address : </td>
			<td style="width: 973px; height: 50px; margin: 0px;"> <textarea style="width: 973px; height: 50px; margin: 0px;" name="address" required=""> Please Enter your address ....</textarea> </td>
		</tr>
		<tr></tr>
		<tr></tr>
		<tr>
			<td style="width: 973px; height: 50px; margin: 0px;" colspan="3" align ="center"> <input type="submit" value="Submit"></td>
		</tr>
	</table>
</form>

<?php include("common/footer1.php") ?>