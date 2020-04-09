<?php
// Create connection
$contdb = new mysqli('localhost', 'root', '', 'shukla_db');
// Check connection
if ($contdb->connect_error) {
    die("Connection failed: " . $contdb->connect_error);
}

$sql = "SELECT id, name, email FROM insertdb";
$result = $contdb->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " - Email" . $row["email"]. "<br>";
    }
} else {
    echo "0 results";
}
$contdb->close();
?> 