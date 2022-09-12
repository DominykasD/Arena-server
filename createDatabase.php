<?php
// Creates Database, table Users, Product and adds some data to it


$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create database
$sql = "CREATE DATABASE IF NOT EXISTS Arena";
if ($conn->query($sql) === TRUE) {
    // echo "Database created successfully<br>";
} else {
    echo "Error creating database: " . $conn->error;
}

// sql to create table users
$sql = "CREATE TABLE IF NOT EXISTS Arena.Users (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50) NOT NULL UNIQUE,
phoneNumber VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(50) NOT NULL
)";


if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error . "<br>";
}

// Insert some data into table
$sql = "INSERT INTO Arena.Users (email, phoneNumber, password) 
VALUES ('domke@arena.com', '+37069889781', 'domke'),
        ('user123@arena.com', '+37069889541', 'user123'),
        ('jonas@arena.com', '+37069889542', 'jonas'),
        ('test@arena.com', '+37069889543', 'test')";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
  }


// sql to create table product
$sql = "CREATE TABLE Arena.product (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL UNIQUE,
type VARCHAR(50) NOT NULL,
price FLOAT NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table product created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert some data into table product
$sql = "INSERT INTO Arena.product (name, description, type, price) 
VALUES ('Pica', 'Pica su sūriu', 'picos', '10'),
        ('Pica aštri', 'Aštri pica', 'picos', '15'),
        ('Mėsainis', 'Mėsainis su jautiena', 'mėsainiai', '5'),
        ('Mėsainis', 'Mėsainis su vištiena', 'mėsainiai', '5'),
        ('Ledai', 'Ledai su braškėmis', 'desertas', '3'),
        ('Salotos skanios', 'Įvairios salotos', 'salotos', '2'),
        ('Coca cola', 'Cola gėrimas', 'gėrimai', '1.5'),
        ('Sprite', 'Sprite gėrimas', 'gėrimai', '1.5'),
        ('Kepta duona', 'Kepta duona su sūriu', 'užkandžiai', '2'),
        ('Kebabas su vištiena', 'Kebabas su vištiena', 'kebabai', '5')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

// create table cart
$sql = "CREATE TABLE Arena.cart (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
user_id INT UNSIGNED NOT NULL,
product_id INT UNSIGNED NOT NULL,
quantity INT NOT NULL,
FOREIGN KEY (user_id) REFERENCES Arena.Users(id),
FOREIGN KEY (product_id) REFERENCES Arena.product(id)
)";

if($conn->query($sql) === TRUE){
    echo "Table cart created successfully<br>";
} else {
    echo "Error creating table: " . $conn->error;
}

$conn->close();