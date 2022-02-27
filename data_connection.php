<?php
$error_fields=0;
// check inputs
if (!(isset($_POST['name'])&& !empty($_POST['name']))){
    $error_fields[]="name";
}
if (!(isset($_POST['email'])&& filter_input(INPUT_POST,'email',FILTER_VALIDATE_EMAIL))){
    $error_fields[]="email";
}
if (!(isset($_POST['password']) && strlen($_POST['password'])>5)){
    $error_fields[]="password";
}
if (!$error_fields){
// opec the connection 
$conn = mysqli_connect("localhost","root","","book_library");
if(!$conn){
    echo mysqli_connect_error();
    exit;
}
else{
    echo "connection is done";
    // the operation 
$name=mysqi_escape_string($conn,$_POST['name']);
$email=mysqi_escape_string($conn,$_POST['email']);
$password=shal($_POST['pass']);
echo "connection is done";
$query="INSERT INTO 'admin'('name','email','password') VALUES(' .$name ',' .$email. ',' .$password.')";
if(mysqli_query($conn,$query)){
    header("location:home.php");
    exit;
}else{
    echo mysqli_error($conn);
}
mysqli_close($conn);
};