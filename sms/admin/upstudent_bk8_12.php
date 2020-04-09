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
<main id="updatestudent">
	<div class="container">
		<h3 algin="center"> Update Student Management System Data Page </h3>
		<form action="updatestudent.php" method="post" enctype="mutlipart/form-data">
			<table width="100%">
				<tr>
					<th> Enter Student Name </th>
					<td> <input type="text" name="stuname" placeholder="Enter Student Name" required="required"/> </td>
					<th> Standerd </th>
					<td> <input type="Number" name="std" placeholder="Enter Student Standerd" required="required"/> </td>
					<td> <input class="sub" type="submit" name="submit" value="Search"></td>
				</tr>
			</table>
		</form>
		<table width="100%">
			<tr style="background-color: #000; color:#fff;">
				<th>No</th>
				<th>Image</th>
				<th>Name</th>
				<th>Roll no</th>
				<th>Edit</th>
			</tr>
		</table>
	</div>
</main> 
<?php
if (isset($_POST['submit']))
{
	include('../dbcon.php'); 
	$name = $_POST['stuname'];
	$Standerd = $_POST['std'];

	$sql = "SELECT * FROM `student` WHERE `standerd`='$Standerd' AND `name` LIKE '%$name%'";
	$run = mysqli_query($con,$sql);
	/*if ($run == true)
	{
		?>
		<script> 
			alert('Data Updated Successfully');
		</script> 
		<?php
	}
	*/
	if (mysqli_num_rows($run)<1)
	{
		echo "<tr><td colspan='5'>No Records Found</td></tr>";
	}
	else
	{
		$count = 0;
		while($row=mysqli_fetch_assoc($run))
		{
			$count++;
			?>
			<tr>
				<td><?php echo $count; ?></td>
				<td><img src="../dataimg/<?php echo $row['image'];?>" style='max-width: 100px;'/></td>
				<td><?php echo $row['name']; ?></td>
				<td><?php echo $row['rollno']; ?></td>
				<td>Edit</td>
			</tr>
			<?php
		}
	}
}
?>

	
<?php include('../common/footer.php'); ?>