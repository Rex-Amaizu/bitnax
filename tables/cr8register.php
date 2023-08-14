<?php
include('../db.php');
// sql to create table
$sql = "CREATE TABLE register (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
first_name VARCHAR(255) NOT NULL,
last_name VARCHAR(255) NOT NULL,
email VARCHAR(255) NOT NULL,
password VARCHAR(255) NOT NULL,
phone VARCHAR(255) NOT NULL,
referral_id VARCHAR(255) NOT NULL,
country VARCHAR(255) NOT NULL,
forgetpass_code VARCHAR(255) NOT NULL,
forgetpass_date DATETIME NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table register created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 