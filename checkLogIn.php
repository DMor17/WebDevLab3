<?php

$username = "Mike";
$password = "password1";

$user = $_POST["username"];
$pass = $_POST["password"];


if ($username == $user & $password == $pass){

setcookie("username", $username, 75748, "", "");
setcookie("access_level", "standarduser", 75748, "", "");
header('location:loginSuccessful.php');
}