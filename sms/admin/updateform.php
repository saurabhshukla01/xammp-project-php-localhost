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
	  include('../dbcon.php');
	  $id = $_GET['sid'];
	  $sql = "SELECT * FROM `student` WHERE `id`='$id'";
	  //echo $sql;
	  $run = mysqli_query($con,$sql);
	  $data = mysqli_fetch_assoc($run);
	  //print_r ($data);

?>
<main id="updateform">
<div class="container">
	<h3 align="center"> Student UpdateForm Data Table Page </h3>
	<form method="post" action="updatedata.php" enctype="multipart/form-data">
		<table>
			<tr>
				<th> Roll No </th>
				<td> <input type="text" name="rollno" value="<?php echo $data['rollno']; ?>" required="required"/> </td>
			</tr>
			<tr>
				<th> Full Name </th>
				<td> <input type="text" name="fname" value="<?php echo $data['name']; ?>" required="required"/> </td>
			</tr>
			<tr>
				<th> City </th>
				<td> <input type="text" name="city" value="<?php echo $data['city']; ?>" required="required"/> </td>
			</tr>
			<tr">
				<th> Parents Contact Name </th>
				<td> <input type="text" name="pcont" value="<?php echo $data['pcont']; ?>" required="required"/> </td>
			</tr>
			<tr>
				<th> Standerd </th>
				<td> <input type="Number" name="std" value="<?php echo $data['standerd']; ?>" required="required"/> </td>
			</tr>
			<tr>
				<th> Image </th>
				<td> <input type="file" name="simg" value="<?php echo $data['image']; ?>"/> </td>
			</tr>
			<tr>
				<td colspan="2">
				 <input type="hidden" name="sid" value="<?php echo $data['id']; ?>">
				 <input type="submit" name="submit" value="submit form">
				</td>
			</tr>
			
		</table>
	</form>
</div>
</main>
