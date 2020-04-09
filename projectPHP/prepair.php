<?php
// Create connection
$contdb = mysqli_connect('localhost','root','','shukla_db');

// Check connection
if ($contdb->connect_error) {
    die("Connection failed: " . $contdb->connect_error);
}

// prepare and bind
$stmt = $contdb->prepare("INSERT INTO insertdb (name, email) VALUES (?, ?)");
$stmt->bind_param("ss", $name,$email);
// set parameters and execute
$name = "john";
$email = "john@example.com";
$stmt->execute();

$name = "Mary";
$email = "mary@example.com";
$stmt->execute();

$name = "Julie";
$email = "julie@example.com";
$stmt->execute();

echo "New records created successfully";

$stmt->close();
$contdb->close();
?>