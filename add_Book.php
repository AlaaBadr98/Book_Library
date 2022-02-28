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
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/js/all.min.js"></script>
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src="js/login.js"></script>
</head>
<body class="container">
    <div class="addContainer">
        <div class="back">
            <a href="admin_home.php"><i class='fas fa-undo'></i></a>
        </div>
        <div class="title">
    <h1>
            Add New Book
        </h1>
</div>
        <form class="addForm" method="post" id="addForm" action="adding.php"> 
            <div class="addip">
<div>
        <label for="number">Number</label>
        <input class="input" type="text" name="booknum" placeholder="Book Number" required>
</div>
<div>
        <label for="title">Book title</label>
         <input class="input" type="text" name="booktitle" placeholder="Book title" required>
</div>
<div>
         <label for="authername">Auther Name</label>
         <input class="input" type="text" name="authername" placeholder="Auther Name" required>
</div>
<div>
         <label for="edition">Edition</label>
         <input class="input" type="text" name="edition" placeholder="Edition" required>
</div>
<div>
         <label for="submition">Submition Date</label>
         <input class="input" type="text" name="submition" placeholder="Submition Date" required>
</div>
</div>
<div class="addBtn">
         <input type="submit" id="add" name="add" value="Add"class="loginButton" >
</div>

        </form>

</div>
    
</body>
</html>