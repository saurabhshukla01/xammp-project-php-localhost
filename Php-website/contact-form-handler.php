<?php
$name = $_POST['name'];
$Visitor_email = $_post['Email'];
$message = $_POST['message'];

$email_form="saurabh.shukla@prudigital.in";
$email_subject = "New From Submission";
$email_body = "UserName : $name .\n"."User Email : $Visitor_email .\n"."User Massage : $meassage .\n";

$to ="saurabh.shukla053@gmail.com";
$headers="from :$email_form\r\n";
$headers="Reply-To : $Visitor_email\r\n";
mail($to,$email_subject,$email_body,$headers);
header("Location:index.html");
?>