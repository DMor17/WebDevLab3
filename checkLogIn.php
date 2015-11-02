<?php

$username = "Mike";
$password = "password";

if ($username === $_POST["username"] && $password === $_POST["password"]){


setcookie("username", $username, 75748, "/checkLogIn", "http://1406997.azurewebsites.net");
setcookie("access_level","standarduser", 75748, "/checkLogIn", "http://1406997.azurewebsites.net/homepage.php");
header('location:homepage.php');
}

else{

    ECHO 'Wrong info';
}