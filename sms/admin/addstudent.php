<?php 
session_start();

    if (isset($_SESSION['uid']))
    {
        echo "";
    }
    else{
        header('location:../login.php');
    }
?>
<?php 
	  include('../common/header.php'); 
	  include('../common/title.php');
?>
<main id="addstudent">
<div class="container">
	<h3 align="center"> Student Add Data Table Page </h3>
	<form method="post" action="addstudent.php" enctype="multipart/form-data">
		<table>
			<tr>
				<th> Roll No </th>
				<td> <input type="text" name="rollno" placeholder="Enter Roll No" required="required"/> </td>
			</tr>
			<tr>
				<th> Full Name </th>
				<td> <input type="text" name="fname" placeholder="Enter Full Name" required="required"/> </td>
			</tr>
			<tr>
				<th> City </th>
				<td> <input type="text" name="city" placeholder="Enter City Name" required="required"/> </td>
			</tr>
			<tr">
				<th> Parents Contact Name </th>
				<td> <input type="text" name="pcont" placeholder="Enter Parents Contact Number" required="required"/> </td>
			</tr>
			<tr>
				<th> Standerd </th>
				<td> <input type="Number" name="std" placeholder="Enter Student Standerd" required="required"/> </td>
			</tr>
			<tr>
				<th> Image </th>
				<td> <input type="file" name="simg"/> </td>
			</tr>
			<tr>
				<td colspan="2"> <input type="submit" name="submit" value="submit form"></td>
			</tr>
			
		</table>
	</form>
</div>
</main>
<?php

if (isset($_POST['submit']))
{
	include('../dbcon.php');

	$Rollno = $_POST['rollno'];
	$Fname = $_POST['fname'];
	$City = $_POST['city'];
	$Pcont = $_POST['pcont'];
	$Standerd = $_POST['std'];
	$info = pathinfo($_FILES['simg']['name']);
	$imagename = $info['basename']; 

	$target = '../dataimg/'.$imagename;
	move_uploaded_file( $_FILES['simg']['tmp_name'], $target);

	//echo $Rollno."-".$Fname."-".$City."-".$Pcont."-".$Standerd."-".$imagename<br>";
	
	$qry = "INSERT INTO `student`(`id`,`rollno`, `name`, `city`, `pcont`, `standerd`,`image`) VALUES ('NULL','$Rollno','$Fname','$City','$Pcont','$Standerd','$imagename')";
	$run = mysqli_query($con,$qry);
	if ($run == true)
	{
		?>
		<script> 
			alert ('Data inserted successfully.');
		</script>	
		<?php
		}
}
?>
<?php include('../common/footer.php'); ?>

