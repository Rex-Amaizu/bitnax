<?php
include('../db.php');
// sql to create table
$sql = "CREATE TABLE wallet (
id INT(8) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
investor_id VARCHAR(255) NOT NULL,
investor_email VARCHAR(255) NOT NULL,
btc_address VARCHAR(255) NOT NULL,
eth_address VARCHAR(255) NOT NULL,
bch_address VARCHAR(255) NOT NULL,
usdt_address VARCHAR(255) NOT NULL,
plan VARCHAR(255) NOT NULL,
ledger_bal VARCHAR(255) NOT NULL,
available_bal VARCHAR(255) NOT NULL,
act_bal VARCHAR(255) NOT NULL,
withdrawn VARCHAR(255) NOT NULL,
investment_date DATETIME NOT NULL,
reg_date TIMESTAMP
)";

if ($conn->query($sql) === TRUE) {
    echo "Table wallet created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();
?> 