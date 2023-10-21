<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devsquad_demo";
$conn = new mysqli($servername, $username, $password, $dbname);
if(!$conn){
    die("Failed connection". mysqli_error($conn));
}
// $sql = "CREATE TABLE users(
// id INT PRIMARY KEY,
// name VARCHAR(255),
// email VARCHAR(255),
// address VARCHAR(255),
// birthday DATE, 
// password VARCHAR(255)
// );";
$id = $_POST['id'];
$name = $_POST['name'];
$email = $_POST['email'];
$address = $_POST['address'];
$birthday = $_POST['birthday'];
$password = $_POST['password'];

// Insert dữ liệu vào bảng users
    $sql = "INSERT INTO users (id, name, email, address, birthday, password) 
    VALUES ('$id','$name', '$email', '$address', '$birthday', '$password')";
    // $conn->prepare($sql);
    if ($conn->query($sql) === TRUE) {
        echo "Thêm dữ liệu thành công";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
$conn ->close();
?>
