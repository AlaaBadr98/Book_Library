
var admin=document.getElementByClassName("admin")
, user=document.getElementByClassName("user")
, out =document.getElementById("out")
, inp =document.getElementById("in");
inp.addEventListener("submit", () => {
   
    admin.style.display = "block";
    user.style.display = "none";

  })

out.addEventListener("click", () => {
   
          admin.style.display = "none";
          user.style.display = "block";

        })