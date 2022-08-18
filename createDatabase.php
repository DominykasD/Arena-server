<?php
// Creates Database ant table Users and adds some data to it


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
$sql = "CREATE DATABASE Arena";
if ($conn->query($sql) === TRUE) {
    echo "Database created successfully";
} else {
    echo "Error creating database: " . $conn->error;
}

// sql to create table users
$sql = "CREATE TABLE Arena.Users (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
email VARCHAR(50) NOT NULL UNIQUE,
phoneNumber VARCHAR(50) NOT NULL UNIQUE,
password VARCHAR(50) NOT NULL
)";


if ($conn->query($sql) === TRUE) {
    echo "Table Users created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert some data into table
$sql = "INSERT INTO Arena.Users (email, phoneNumber, password) 
VALUES ('domke@arena.com', '+37069889781', 'domke'),
        ('user123@arena.com', '+37069889541', 'user123'),
        ('jonas@arena.com', '+37069889542', 'jonas')";


if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }


// sql to create table foodModel
$sql = "CREATE TABLE Arena.FoodModel (
id INT UNSIGNED AUTO_INCREMENT PRIMARY KEY,
name VARCHAR(50) NOT NULL,
description VARCHAR(50) NOT NULL UNIQUE,
price INT NOT NULL,
favorite boolean NOT NULL
)";

if ($conn->query($sql) === TRUE) {
    echo "Table FoodModel created successfully";
} else {
    echo "Error creating table: " . $conn->error;
}

// Insert some data into table
$sql = "INSERT INTO Arena.FoodModel (name, description, price, favorite) 
VALUES ('Pizza', 'Pizza with cheese', '10', '0'),
        ('Pasta', 'Pasta with meat', '15', '0'),
        ('Salad', 'Salad with vegetables', '5', '0'),
        ('Burger', 'Burger with meat', '10', '0'),
        ('Sandwich', 'Sandwich with vegetables', '5', '0')";

if ($conn->multi_query($sql) === TRUE) {
    echo "New records created successfully";
  } else {
    echo "Error: " . $sql . "<br>" . $conn->error;
  }

$conn->close();