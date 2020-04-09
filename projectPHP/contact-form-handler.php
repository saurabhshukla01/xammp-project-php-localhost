<?php include("common/header1.php") ?>

<?php
echo "<br>";
echo "<br>";
echo "<h3><center>Web Visiter Information data </center></h3>"."<br>";
echo "<br>";
$name = $_POST['name'];
$Visitor_email = $_POST['Email'];
$message = $_POST['message'];

$email_body = "UserName :".  $name ."<br>"."User Email :". $Visitor_email ."<br>"."User Massage :". $message ."<br>";
// "\n" ==> for new line ; "\r" ==> regex (for regular exp.)
echo $email_body;
echo "<br>";

?>

<?php include("common/footer1.php") ?>

<?php
/*
    $name = $_POST['name'];
    $Visitor_email = $_POST['Email'];
    $message = $_POST['message'];

    $email_form="saurabh.shukla@prudigital.in";
    $email_subject = "New From Submission";
    $email_body = "UserName : $name .\n"."User Email : $Visitor_email .\n"."User Massage : $message .\n";
    echo $email_body;
    echo "<br>";

    $to ="saurabh.shukla053@gmail.com";
    $headers="from :$email_form\r\n";
    $headers="Reply-To : $Visitor_email\r\n";
    mail($to,$email_subject,$email_body,$headers);
    header("Location:index2.php");

*/ ?>