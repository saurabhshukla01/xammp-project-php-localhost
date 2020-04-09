<?php
// mysql connection 
$contdb = new mysqli('localhost', 'root', '', 'shukla_db');
// Check connection
if ($contdb->connect_error) {
    die("Connection failed: " . $contdb->connect_error);
}

$sql = "INSERT INTO insertdb (name, email)
VALUES ('John', 'john@example.com');";
$sql .= "INSERT INTO insertdb (name, email)
VALUES ('Moe', 'mor@example.com');";
$sql .= "INSERT INTO insertdb (name, email)
VALUES ('Julie', 'julie@example.com')";

if ($contdb->multi_query($sql) === TRUE) {
    echo "New records created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $contdb->error;
}

$contdb->close();
?>