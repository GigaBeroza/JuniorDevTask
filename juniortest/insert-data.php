<?php
include 'productdata.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $sku = $_POST["sku"];
    $name = $_POST["name"];
    $price = $_POST["price"];
    $type = $_POST["type"];
    $size = isset($_POST['dvd_size']) ? $_POST['dvd_size'] : null;
    $weight = isset($_POST['book_weight']) ? $_POST['book_weight'] : null;
    $height = isset($_POST['furniture_height']) ? $_POST['furniture_height'] :  null;
    $width = isset($_POST['furniture_width']) ? $_POST['furniture_width'] : null;
    $length = isset($_POST['furniture_length']) ? $_POST['furniture_length'] : null; 

    $sql = "INSERT INTO products (sku, name, price, type, dvd_size, book_weight, furniture_height, furniture_width, furniture_length ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?)";



    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssdssssss", $sku, $name, $price, $type, $size, $weight, $height, $width, $length);
    // $result = 
    $stmt->execute();

    // if ($result) {
    //     echo "Data inserted successfully!";
    // } else {
    //     echo "Error: " . $sql . "<br>" . $conn->error;
    // }
    
    $stmt->close();
    $conn->close();

    header("Location: index.php"); // Redirect to the main page
    exit();

    
}


?>


