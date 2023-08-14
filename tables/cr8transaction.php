<?php
include('../db.php');
// sql to create table
$sql = "CREATE TABLE transactions (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
client_id VARCHAR(255) NOT NULL,
client_email VARCHAR(255) NOT NULL,
amount VARCHAR(255) NOT NULL,
status VARCHAR(255) NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table transactions created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?>