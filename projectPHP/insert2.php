<?php include('common/header1.php') ?>
<?php// $contdb = mysqli_connect('localhost','root','','shukla_db');?>
<?//php include('dbcon.php') ?>
<h2 align="center">Show All Data inserted SuccessFully in Table</h2>
<?php
$name = $_POST['name'];
$email = $_POST['email'];
echo $name."<br>";
echo $email."<br>";
$contdb = mysqli_connect('localhost','root','','shukla_db');
$sql = "INSERT INTO `insertdb`(`name`, `email`) VALUES ('$name','$email')";
$run = mysqli_query($contdb,$sql);
if ($run==TRUE){
	echo "Data is successfully Insearted &nbsp;"."<a href='insert1.php'>click To move Home Page</a><br>";
}
else{
	echo "Error! Cannot Inserted Database.<br>";
}

?>


<?php include('common/footer1.php') ?>