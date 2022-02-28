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

$sql= "UPDATE `books` SET `title`='$titleip',`auther`='$autherip',`edition`='$editionip',
`submition`='$submitionip' WHERE `id`='$numip'";

if ($conn->query($sql) === TRUE) {
  echo '<script>alert("Your Edit is saved successfully")</script>';
  header("REFRESH:0.5;URL=admin_home.php");
} else {
  echo "Error: " . $sql . "<br>" . $conn->error;
}



$conn->close();
           ?>