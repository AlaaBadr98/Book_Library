<?php
// check that you are admin 
session_start();
if (! isset($_SESSION['admin'])){
    echo '<script>alert("You must login to access this page")</script>';
    header("REFRESH:0.5;URL=login.php");

}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Books Library </title>
    <link rel="icon" href="images/icons8-books-64.png" type="image/x-icon">
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
</head>

<body>
    <div class="homePage">
        <!-- Header section -->
        <div class="header">
            <img src="images/pexels-janko-ferlic-590493.jpg" class="header_img">
            <div class="webName">Book To Know</div>
            <div class="menuContainer">
           <a href="edit.php" style="display: block;" class="admin"> <button class="menuButton" id="allBooks">Edit Book</button></a>
            <a href="add_Book.php" style="display: block;" class="admin"> <button class="menuButton" id="addBook">Add Book</button></a>
            <a href="delet_Book.php" style="display: block;" class="admin"> <button class="menuButton" id="addBook">Delete Book</button></a>
            <a href="logout.php" style="display: block;"  class="admin"  ><button class="menuButton" id="logoutButton">Logout</button></a>

                <div class="links navBar" id="showNav">
                    <span class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <ul id="showing">
                    <li><a href="edit.php" style="display:block;" class="admin">Edit Book</a></li>
                        <li><a href="add_Book.php"style="display: block;" class="admin"> Add Book </a></li>
                        <li><a href="delet_Book.php"style="display: block;" class="admin"> Delet Book </a></li>
                        <li><a href="logout.php" style="display:block;"class="admin"> Logout </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- home body section -->
        <div class="homeContainer">
            <!-- searsh index -->
            <form class="searchsection" method="post">
                <input class="search" type="text" name="search" placeholder="Search By book title" required>
                <input  type="submit" value="search" class="loginButton">
            </form>
      <!-- box to show the books -->
     <div style="text-align: center;display: flex;flex-direction: column;align-items: center;height: 20em;
    overflow: scroll;padding-bottom: 15%;" class="bookshow">
         <h2 style="color: #aa7c1e;border-bottom-color: white;box-shadow: 0 0 10px;width: 80%;border-radius: 5px;">
         Book</h2>
         <div>
             <!-- showing the books -->
<?php
// connect to database
         $servername = "localhost";$username = "root";$password = "";$dbname = "book_library";
            $conn = new mysqli($servername, $username, $password, $dbname);
            if ($conn->connect_error) {
              die("Connection failed: " . $conn->connect_error);
            }
            // if user used the search
            if (isset($_POST["search"])) {
                $str = $_POST["search"];
                $sql = "SELECT * FROM `books` WHERE title = '$str'";   
                ?>
                <?php  
 $result = $conn->query($sql);
   while($row = $result->fetch_assoc()) {
    ?>
     <div class="back">
            <a href="admin_home.php"><i class='fas fa-undo'></i></a>
        </div>
<tr>
    <td><?=$row['id']?></td>
    <td><?=$row['title']?></td>
    <td><?=$row['auther']?></td>
    <td><?=$row['edition']?></td>
    <td><?=$row['submition']?></td>
  </tr>
  <?php
   }
  ?>
                <?php
            }else{
            $sql = "SELECT * FROM `books`";}

            ?>
            <!-- creat table to show the information of eash book -->
         <style>
table {
    font-family: arial, sans-serif;
    border-collapse: collapse;
    width: 80%;
}

td, th {
    border: 1px solid #da9c42;
    text-align: center;
    padding: 8px;
    color: #8f6913;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>
<div style="display: flex;justify-content: center;">
<table>
  <tr>
    <th>Book number</th>
    <th>Title</th>
    <th>Auther</th>
    <th>edition</th>
    <th>Submition</th>
  </tr>
  <?php  
 $result = $conn->query($sql);
   while($row = $result->fetch_assoc()) {
    ?>
<tr>
    <td><?=$row['id']?></td>
    <td><?=$row['title']?></td>
    <td><?=$row['auther']?></td>
    <td><?=$row['edition']?></td>
    <td><?=$row['submition']?></td>
  </tr>
  <?php
   }
  ?>
  
</table>
<!-- close the connection -->
<?php
$conn->close();
?>
</div>

            
         </div>

</div>
        
        </div>

        <div class="footer">
            <div class="names">
                <div>
                    Created By
                </div>
                <p class="team">
                    Alaa Osama Mohammed
                </p>
                <div class="contant">
                    <div class="icon">
                        <a href="https://www.linkedin.com/in/alaa-osama/"><i class="fab fa-linkedin-in"></i></a>
                    </div>

                </div>

            </div>
        </div>

    </div>
<script> 

// <!-- script to show nav bar -->
var show = document.getElementById("showNav");
        var showing = document.getElementById("showing");
        var i = 0;
        show.addEventListener("click", () => {
            if (i === 0) {
                showing.style.display = "block"
                i = 1
            } else {
                showing.style.display = "none"
                i = 0
            }
})
        </script>


     
</body>

</html>