<?php
// Insert values to the database

$conn = new mysqli("localhost", "root", "", "Arena");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['phoneNumber'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $phoneNumber = $_POST['phoneNumber'];
    $sql = "INSERT INTO Arena.Users (email, phoneNumber, password) 
    VALUES ('$email', '$phoneNumber', '$password')";
    if ($conn->query($sql) === TRUE) {
        echo "success";
    } else {
        echo "faulure";
    }
}