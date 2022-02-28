<?php
$titleip=$_POST['booktitle'];




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
$sql = "SELECT * FROM `books` WHERE title = '$titleip'";

$result = $conn->query($sql);
              if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    $sql= "DELETE FROM `books` WHERE `title`='$titleip'";
                    if ($conn->query($sql) === TRUE) {
                        echo '<script>alert("Deleting book successfully")</script>';
                        header("REFRESH:0.5;URL=admin_home.php");
                      } else {
                        echo "Error: " . $sql . "<br>" . $conn->error;
                      }
                  
              }}else{
                echo '<script>alert("Book Not Found")</script>';
                header("REFRESH:0.5;URL=delet_Book.php");
              };





$conn->close();
           ?>