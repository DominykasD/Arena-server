<?php
// Connect to database and select values from table

$conn = new mysqli("localhost", "root", "", "Arena");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$email = $_Get['email'];
$password = $_Get['password'];
$phoneNumber = $_Get['phoneNumber'];
$result = $conn->query("SELECT * FROM Arena.Users WHERE email = '$email' AND password = '$password'");