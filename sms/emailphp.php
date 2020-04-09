<?php     
$to_email = 'saurabh.shukla053@gmail.com';
$subject = 'Testing PHP Mail';
$message = 'This mail is sent using the PHP mail function';
$headers = 'From: saurabh.shukla053@gmail.com';
mail($to_email,$subject,$message,$headers);
?>