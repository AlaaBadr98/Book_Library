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
            Delete Book
        </h1>
</div>
        <form class="addForm" method="post" id="addForm" action="deleting.php"> 
            <div class="addip">
            <label for="title">Input the book title that you want to delete</label>
<div>
        <label for="title">Book title</label>
         <input class="input" type="text" name="booktitle" placeholder="Book title" required>
</div>
</div>
<div class="delBtn">
         <input type="submit" id="del" name="del" value="Delete"class="loginButton" >
</div>

        </form>

</div>
    
</body>
</html>