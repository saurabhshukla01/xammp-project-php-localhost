<?php

	function showdetails($Standerd,$Rollno)
	{
		include('dbcon.php');
		$sql = "SELECT * FROM `student` WHERE `rollno`='$Rollno' And `standerd`='$Standerd'";
		$run = mysqli_query($con,$sql);
		if (mysqli_num_rows($run)>0)
		{
			$data = mysqli_fetch_assoc($run);
			?>
			<table border="1" width="70%" align="center">
				<tr>
					<th colspan="3"> Student Details </th>
				</tr>
				<tr>
					<td rowspan="5"><img src="dataimg/<?php echo $data['image']; ?>" style="margin:10%; max-height: 200px; max-width: 200px;"/></td>
					<th>Roll No</th>
					<td><?php echo $data['rollno'] ;?></td>
				</tr>
				<tr>
					<th>Name</th>
					<td><?php echo $data['name'] ;?></td>
				</tr>
				<tr>
					<th>Standerd</th>
					<td><?php echo $data['standerd'] ;?></td>
				</tr>
				<tr>
					<th>Parents Contact No</th>
					<td><?php echo $data['pcont'] ;?></td>
				</tr>
				<tr>
					<th>City</th>
					<td><?php echo $data['city'] ;?></td>
				</tr>

			</table>


			<?php
		}
		else
		{
			echo "<script> alert('No Student Found'); </script>";
		}
	}
	

?>