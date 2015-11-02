<html>



<form method="post" action=<?php logInValidation()?>>

    Username:<input type="text" name="username"><br>
    Password:<input type="text" password="password"><br>
    <input type="submit" value="Submit">
</form>
<?php




function logInValidation(){



    $username = "Mike";
    $password = "password1";
if($username = $_POST["username"] && $password = $_POST["password"])
{
    setcookie("username", $username, 75748,"","");
    setcookie("access_level", "standarduser", 75748,"","");
    header('Location: loginSuccessful.php');
    //header("http://1406997.azurewebsites.net/loginSuccessful.php");
    exit;
}
    else{
        echo "Wrong info";

    }

}
?>




</html>



