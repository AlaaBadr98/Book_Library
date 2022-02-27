<?php
// opec the connection 
$conn = mysqli_connect("localhost","root","YES","webadmin");
if(!$conn){
    echo mysqli_connect_error();
    exit;
}
// the operation 
$query = "SELECT * FROM 'users'";
$result=mysqli_fetch_assoc($conn,$query);
while($row=mysqli_fetch_assoc($result)){
    echo "Name".$row['name']."<br>";
};
// close the connection
mysqli_free_result($result);
mysqli_close($conn);