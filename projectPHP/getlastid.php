<?php

// Create connection
$contdb = new mysqli('localhost', 'root', '', 'shukla_db');
// Check connection
if ($contdb->connect_error) {
    die("Connection failed: " . $contdb->connect_error);
}

$sql = "INSERT INTO insertdb (name, email)
VALUES ('John vinay', 'johnvinay@example.com')";

if ($contdb->query($sql) === TRUE) {
    $last_id = $contdb->insert_id;
    echo "New record created successfully. Last inserted ID is: " . $last_id;
} else {
    echo "Error: " . $sql . "<br>" . $contdb->error;
}

$contdb->close();
?> 