<?php include('common/header1.php') ?>
<h2 align="center"> This is the Page to Upload all Images store in DATABASE </h2>
	<form method="post" action="uploadimage.php" enctype="multipart/form-data">

		<input type="file" name="img1" required="required"/>
		<input type="submit" name="submit" value="Upload Image"/>

	</form>


<?php
if (isset($_POST['submit'])){
	/*
	$imagename = $_FILES['img1'];
	echo "<pre>";
	print_r($imagename);
	echo "</pre>";
	*/
	$imagename = $_FILES['img1']['name']; // storing filename
	$tempimgname = $_FILES['img1']['tmp_name'];   // temp name store
	$contdb = mysqli_connect('localhost','root','','store_image') or die(mysqli_error());
	move_uploaded_file('$tempimgname', 'photo/'.'$imagename');
	$sql = "INSERT INTO `images`(`name`) VALUES ('$imagename')";
	$run = mysqli_query($contdb,$sql);
	echo "Upload Images Successfully";
}
?>
<h2 align="center"> This is Insert images In DB Table </h2>
<?php include('common/footer1.php') ?>