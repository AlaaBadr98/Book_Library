<!-- search code -->
<?php
session_start();

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

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sql = "SELECT * FROM `books` WHERE Name = '$str'";

	$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo "Book number " . $row["id"]."<br>- Book title: " . $row["title"]. "<br>- Auther:  " . $row["auther"]. "<br>- Edition:" . $row["edition"]."<br>- submition:". $row["submition"]. 
  };
};

  
