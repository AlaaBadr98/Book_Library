<?php
$numip=$_POST['booknum'];
$titleip=$_POST['booktitle'];
$autherip=$_POST['authername'];
$editionip=$_POST['edition'];
$submitionip=$_POST['submition'];



$servername = "localhost";
$username = "root";
$password = "";
$dbname = "book_library";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}

$sql= "INSERT INTO `books`(`id`, `title`, `auther`, `edition`, `submition`) 
VALUES ('$numip' , '$titleip' , '$autherip' , '$editionip' , '$submitionip')";

if ($conn->query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
           ?>