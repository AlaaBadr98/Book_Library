<?php
session_start();
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
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <script src="js/login.js"></script>
</head>

<body class="container">
    <div class="mainContainer">
    <div class="back">
            <a href="user_home.php"><i class='fas fa-undo'></i></a>
        </div>
        <h1>
            Welcome to Book Library
        </h1>
        <form class="formContainer" action="connect.php" method="post">
     <div>
            <input type="radio" id="admin" name="logAs" value="admin" checked required>
            <label for="admin"> Login as Admin</label><br>
    </div>
    <div>
        <label for="name">Name</label>
        <input class="input" type="text" name="name" placeholder="Name" required><br>
    </div>
    <div>
        <label for="email">Email</label>
        <input class="input" type="text" name="email" placeholder="Email" required><br>
    </div>
    <div>
        <label for="password"> Password</label>
        <input class="input" type="password" name="pass" placeholder="password" id="pass" required>
        <i class="fas fa-eye" onclick="see()"></i>
    </div>

        <input type="submit" id="in" name="Login" value="Login" class="loginButton">
        
        </form>
    </div>
    <script src="js/home.js"></script>
</body>

</html>