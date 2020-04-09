<?php include("common/header1.php") ?>
<?php
$Uname = $_POST['username'];
$Uemail = $_POST['email'];
$Upwd = $_POST['pwd'];
$Ucpwd = $_POST['cpwd'];
$Umob = $_POST['mobile_no'];
$Udob = $_POST['dob'];
$Uimage = $_FILES['image'];
$Uaddress = $_POST['address'];

echo "<center><p> USERDATA INFORAMATION : </p></center> "."<br>";
echo "Your name is  <b>".$Uname."</b><br>";
echo "Your Email is  <b>".$Uemail."</b><br>";
echo "Your password is  <b>".$Upwd."</b><br>";
echo "Your Confirm password is  <b>".$Ucpwd."</b><br>";
echo "Your mobile Number is  <b>".$Umob."</b><br>";
echo "Your Date of birth is  <b>".$Udob."</b><br>";
echo "Your Image path full information is "."<br>";
echo "<pre>";
print_r($Uimage);
echo "</pre>";
echo "<br>";
echo "Your Image name is <b>".$Uimage['name']."</b><br>";
echo "Your address is  <b>".$Uaddress."</b><br>";

?>
<?php include("common/footer1.php") ?>