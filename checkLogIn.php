<?php

$username = "Mike";
$password = "password1";





if ($username = $_POST["username"] && $password = $_POST["password"]){

setcookie("username", $username, 75748, "", "");
setcookie("access_level", "standarduser", 75748, "", "");
header('location:homepage.php');
}
else{

    ECHO 'Wrong info';
}