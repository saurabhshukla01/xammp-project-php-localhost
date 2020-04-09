<?php

	include('../dbcon.php');
		$id = $_POST['sid'];
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
		
		$qry = "UPDATE `student` SET `rollno`='$Rollno',`name`='$Fname',`city`='$City',`pcont`='$Pcont',`standerd`='$Standerd',`image`='$imagename' WHERE `id`='$id'";
		$run = mysqli_query($con,$qry);
		if ($run == true)
		{
			echo $qry;
			?>
			
			<script> 
				alert ('Data Updated successfully.');
				window.open('updateform.php?sid=<?php echo $id;?>','_self');
			</script>	
			<?php
		}

?>
