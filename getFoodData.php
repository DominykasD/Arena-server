<?php
// get data from the database table foodModel convert data to json format
// and save it to a file called food.json
$conn = new mysqli("localhost", "root", "", "Arena");
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM Arena.product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
    $data = array();
    while($row = $result->fetch_assoc()) {
        $data[] = $row;
    }
    $json = json_encode($data);
    file_put_contents('food.json', $json);
    if (file_exists('food.json')) {
        echo "success";
    } else {
        echo "failure";
    }
} else {
    echo "0 results";
}