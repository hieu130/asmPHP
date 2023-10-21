<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "devsquad_demo";
$connection = new mysqli($servername, $username, $password, $dbname);
if (!$connection) {
  die("Failed connection" . mysqli_connect_error());
}
// echo "<h1>Connection successfully !</h1>";

//Create database

// $sql = "CREATE TABLE persons(
// (id INT AUTO_INCREMENT PRIMARY KEY,
// name VARCHAR(255),
// email VARCHAR(255),
// address VARCHAR(255),
// birthday DATE, 
// password VARCHAR(255)
// )";
// $sql = "INSERT INTO users(name,email,address,birthday,password)
// VALUES('Nguyen van 3' ,'nguyen2@gmail.com','ha noi2','2002-10-10','2121eqr2');
// ";)
$sql = "DROP TABLE users";

if (mysqli_multi_query($connection, $sql)) {
  echo "Insert sucessfully";
} else {
  echo "Insert failed";
}
$connection->close();
