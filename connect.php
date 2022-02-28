<?php
session_start();

$nameip=$_POST['name'];
$emailip=$_POST['email'];
$passip=$_POST['pass'];
$logasip=$_POST['logAs'];

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

$sql = "SELECT id, name , email , password FROM admin";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    if(($logasip==="admin") &&($nameip=== $row["name"]) && ($emailip==$row["email"]) && ($passip==$row["password"])){
      header("REFRESH:0.5;URL=admin_home.php");
      $_SESSION["admin"]=1;
        
            exit();
    }
    else{
      echo '<script>alert("Your Not an admin Or check your inputs right")</script>';
      header("REFRESH:0.5;URL=login.php");
    }
  }
} else {
  echo "0 results";
}

$conn->close();
           ?>