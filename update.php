<?php
// $numip=$_POST['booknum'];
// $titleip=$_POST['booktitle'];
// $autherip=$_POST['authername'];
// $editionip=$_POST['edition'];
// $submitionip=$_POST['submition'];
$numip=1;
$titleip="world";
$autherip="Foad";
$editionip="5th";
$submitionip="december";




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

$sql= "UPDATE `books` SET `id`='$numip',`title`='$titleip',`auther`='$autherip',`edition`='$editionip',`submition`='$submitionip' WHERE 1";

if ($conn->query($sql) === TRUE) {
  echo "New records created successfully";
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
           ?>