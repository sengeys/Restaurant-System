<?php
// Session
session_start();

$servername = getenv('DB_HOST') ?: 'db';
$username = getenv('DB_USER') ?: 'admin';
$password = getenv('DB_PASS') ?: 'admin';
$dbname = getenv('DB_NAME') ?: 'restaurantdb';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


//Create the staff table
$sql = "CREATE TABLE IF NOT EXISTS tblstaff (
    staff_id    INT AUTO_INCREMENT PRIMARY KEY,
    staff_name  VARCHAR(255) NOT NULL,
    sex         VARCHAR(6) NOT NULL,
    phone       VARCHAR(20) NOT NULL,
    address     VARCHAR(255)
    )";
$conn->query($sql);

// Create the user table
$sql = "CREATE TABLE IF NOT EXISTS tbluser (
user_id     INT PRIMARY KEY,
email       VARCHAR(100) NOT NULL UNIQUE,
pass_word   VARCHAR(100) NOT NULL,
FOREIGN KEY (user_id) REFERENCES tblstaff (staff_id)
)";
$conn->query($sql);


// Create the customer table
$sql = "CREATE TABLE IF NOT EXISTS tblcustomer (
customer_id     INT AUTO_INCREMENT PRIMARY KEY,
customer_name   VARCHAR(50) NOT NULL,
contact         VARCHAR(100) NOT NULL
)";
$conn->query($sql);



// Create the table table
$sql = "CREATE TABLE IF NOT EXISTS tbltable (
table_id    INT AUTO_INCREMENT PRIMARY KEY,
table_name  VARCHAR(50) NOT NULL
)";

$conn->query($sql);



// Create the item table
$sql = "CREATE TABLE IF NOT EXISTS tblitem (
item_id     INT AUTO_INCREMENT PRIMARY KEY,
item_name   VARCHAR(50) NOT NULL,
unit_price  DECIMAL(10, 2) NOT NULL
)";

$conn->query($sql);



// Create the order table
$sql = "CREATE TABLE IF NOT EXISTS tblorder (
order_id        INT AUTO_INCREMENT PRIMARY KEY,
date_created    DATETIME NOT NULL,
staff_id        INT,
customer_id     INT,
table_id        INT,
status          VARCHAR(10) NOT NULL,
total           DECIMAL(10, 2) NOT NULL,
FOREIGN KEY (staff_id)      REFERENCES tblstaff (staff_id),
FOREIGN KEY (customer_id)   REFERENCES tblcustomer (customer_id),
FOREIGN KEY (table_id)      REFERENCES tbltable (table_id)
)";

$conn->query($sql);

// Create the orderdetail table
$sql = "CREATE TABLE IF NOT EXISTS tblorderdetail (
order_id    INT,
item_id     INT,
price       DECIMAL(10, 2) NOT NULL,
quantity    INT NOT NULL,
amount      DECIMAL(10, 2) NOT NULL,
PRIMARY KEY (order_id, item_id),
FOREIGN KEY (order_id) REFERENCES tblorder (order_id),
FOREIGN KEY (item_id)  REFERENCES tblitem (item_id)
)";

$conn->query($sql);


?>