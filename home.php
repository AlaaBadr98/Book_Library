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
        <div class="header">
            <img src="images/pexels-janko-ferlic-590493.jpg" class="header_img">
            <div class="webName">Book To Know</div>
            <div class="menuContainer">
                <a href="updating.php" style="display: block;"> <button class="menuButton" id="allBooks">Edit Book</button></a>
                <a href="add_Book.php" style="display: block;"> <button class="menuButton" id="addBook">Add
                        Book</button></a>
                <a href="login.php" style="display: block;"><button class="menuButton"
                        id="logoutButton">Logout</button></a>

                <div class="links navBar" id="showNav">
                    <span class="icon">
                        <span></span>
                        <span></span>
                        <span></span>
                    </span>
                    <ul id="showing">
                        <li><a href="updating.php">Edit Book</a></li>
                        <li><a href="add_Book.php"> Add Book </a></li>
                        <li><a href="login.php"> Logout </a></li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="homeContainer">

            <form method="post">
                <input class="search" type="text" name="search" placeholder="Search" required>

            </form>
     <div class="bookshow">

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
                        <a href="#"><i class="fab fa-google"></i></a>
                        <a href="#"><i class="fab fa-linkedin-in"></i></a>
                        <a href="#"><i class="fab fa-github"></i></a>
                    </div>

                </div>

            </div>
        </div>



    </div>

    <script>
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