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
//          <!-- code for menu button so after admin login show features like add-edit-delet -->
var adminbt=document.getElementsByClassName("admin")
, userbt=document.getElementsByClassName("user")
 , out =document.getElementById("out");

 
 if(($_SESSION["user"] == 0)&&($_SESSION["admin"] == 1)){
     adminbt.style.display = "block";
      userbt.style.display = "none";
           }

out.addEventListener("click", () => {

 adminbt.style.display = "none";
 userbt.style.display = "block";
 $_SESSION["user"] = 1;
$_SESSION["admin"] = 0;

})