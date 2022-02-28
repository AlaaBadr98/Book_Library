<?php
session_start();

$_SESSION=array();
session_destroy();
header("REFRESH:0.5;URL=user_home.php");



?>