<?php

// Create connection
$contdb = new mysqli('localhost', 'root', '', 'shukla_db');
// Check connection
if ($contdb->connect_error) {
    die("Connection failed: " . $contdb->connect_error);
}

// sql to delete a record
$sql = "DELETE FROM insertdb WHERE id=3";

if ($contdb->query($sql) === TRUE) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $contdb->error;
}

$contdb->close();
?> 