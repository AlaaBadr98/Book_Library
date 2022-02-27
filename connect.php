<?php
$servername = "localhost";
$username = "root";
$password = "";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
                // $name = $_POST['name'];
                // $email = $_POST['email'];
                // $pass = $_POST['pass'];

                //     $conn=mysqli_connect("localhost"."root","");
                //     $db=mysqli_select_db($conn,"book_library");

                //  if(isset($_POST['login']))
                //  {
                //      $query_run=mysqli_query($conn,"INSERT INTO `admin`(`id`, `name`, `email`, `password`) VALUES ('2','$name','$email','$pass')");

                //  }

                //     $servername = "localhost";
                //     $username = "root";
                //     $password = "";
                //     $dbname = "book_library";
                //     $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
                //     $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
             
                //     echo "<span class=\"error\">connected sucessfully</span>"; 
                //  $adminName = $conn->query("INSERT INTO `admin`(`id`, `name`, `email`, `password`) VALUES ('1','$name','$email','$pass') ")->fetchAll(pdo::FETCH_COLUMN);  //one COLUMNS 
                // 
        
           ?>