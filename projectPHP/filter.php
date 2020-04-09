<?php
// validate data ==>>
$usermail = "saurabhshukla@gmail.com";
$usermail1 = "saurabh.shuklagmailcom";
if (filter_var($usermail,FILTER_VALIDATE_EMAIL))
{
	echo "Email is Valid<br>";
}
else{
	echo "Email is not valid<br>";
	}

if (filter_var($usermail1,FILTER_VALIDATE_EMAIL))
{
	echo "EMAIL IS Valid<br>";
}
else{
	echo "EMAIL is not valid<br>";
	}
?>

<?php
// Sanitized data ==>>
$smaller = "not a tag < 5";
echo strip_tags($smaller)."<br>";    // -> not a tag < 5
echo filter_var ( $smaller, FILTER_SANITIZE_STRING)."<br>"; // -> not a tag (all remove special charcter in Given string.)
?>

<?php
// var_dum know to datatype name  ==>>
$smaller = "not a tag < 5";
$smaller1 = array(1,2,3,4,5,'name','arun',10.98,3);
echo "<pre>";
print_r( $smaller1); // -> not a tag (all remove special charcter in Given string.)
echo "</pre>";
?>
