<?php
// Create connection
$contdb = new mysqli('localhost', 'root', '', 'shukla_db');
// Check connection
if ($contdb->connect_error) {
    die("Connection failed: " . $contdb->connect_error);
}

$sql = "UPDATE insertdb SET name='Doe' WHERE id=4";

if ($contdb->query($sql) === TRUE) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . $contdb->error;
}

$contdb->close();
?> 