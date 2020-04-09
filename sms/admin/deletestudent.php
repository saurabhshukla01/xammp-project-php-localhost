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
<main id="deletestudent">
	<div class="container">
		<div class="filter">
			<h3 algin="center"> Delete Student Management System Data Page </h3>
			<form action="deletestudent.php" method="post" enctype="mutlipart/form-data">
				<table width="100%">
					<tr>
						<th> Enter Student Name </th>
						<td> <input type="text" name="stuname" placeholder="Enter Student Name"/> </td>
						<th> Standerd </th>
						<td> <input type="Number" name="std" placeholder="Enter Student Standerd"> </td>
						<td> <input class="sub" type="submit" name="submit" value="Search"></td>
					</tr>
				</table>
			</form>
		</div>
		<div class="filtertable">
			<table width="100%" border="1">
				<thead>
					<tr style="background-color: #000; color:#fff;">
						<th>No</th>
						<th>Roll no</th>
						<th>Name</th>
						<th>Image</th>		
						<th>Edit</th>
					</tr>
				</thead>

<?php
if (isset($_POST['submit']))
{
	include('../dbcon.php'); 
	$name = $_POST['stuname'];
	$Standerd = $_POST['std'];

	$sql = "SELECT * FROM `student` WHERE `standerd`='$Standerd' OR `name` LIKE '%$name%'";
	//$sql = "SELECT * FROM `student` WHERE `standerd`='$Standerd' AND `name` LIKE '%$name%'";
	//echo $sql;
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
		echo "<tr><td colspan='5'><h4>No Records Found</h4></td></tr>";
	}
	else
	{
		$count = 0;
		while($row=mysqli_fetch_assoc($run))
		{
			$count++;
			//echo mysqli_fetch_assoc($run);
			?>
			<tbody>
				<tr>
					<td><?php echo $count; ?></td>
					<td><?php echo $row['rollno']; ?></td>
					<td><?php echo $row['name']; ?></td>
					<td><img src="../dataimg/<?php echo $row['image'];?>" style='margin:5px ; max-width: 75px; max-height: 75px;'/></td>
					<td><b style="font-family:cursive;"><a href="deleteform.php?sid=<?php echo $row['id'];?>">Delete</a></b></td>
				</tr>
			</tbody>

			<?php
		}
	}
}
?>
			</table>
		</div>
	</div>
</main> 
	
<?php include('../common/footer.php'); ?>

