<html>

<form method="post" action="<?php logInValidation()?>>
    Name: <input type="text" name="username"><br>
    E-mail: <input type="text" password="password"><br>
    <input type="submit" value="Submit">

<?php




function logInValidation(){

    $attemptUsername = $_POST["name"];
    $attemptPassword = $_POST["password"];

    $username = "Mike";
    $password = "password1";
if($attemptUsername == $username AND $attemptPassword == $password)
{
    setcookie("username", $username, 75748,"","");
    setcookie("access_level", "standarduser", 75748,"","");
    header("Location: http://1406997.azurewebsites.net/loginSuccessful.php");
    exit;
}

}
?>
</form>



</html>



