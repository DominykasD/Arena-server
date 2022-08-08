<?php
// Connect to database and select values from table

$conn = new mysqli("localhost", "root", "", "Arena");

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if((isset($_POST['email']) && isset($_POST['password'])) && !empty($_POST['email']) && !empty($_POST['password'])){
    $email = $_POST['email'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM Arena.Users WHERE email = '$email' AND password = '$password'";
    $result = $conn->query($sql);
    if ($result->num_rows > 0) {
        echo "success";
    } else {
        echo "failure";
    }
}