<html>



<form method="post">

    Username:<input type="text" name="username"><br>
    Password:<input type="text" password="password"><br>
    <input type="submit" value="Submit">
</form>
<?php







    $username = "Mike";
    $password = "password1";
    if (isset($_POST['submit'])) {
        if ($username = $_POST["username"] && $password = $_POST["password"]) {
            setcookie("username", $username, 75748, "", "");
            setcookie("access_level", "standarduser", 75748, "", "");
            //header('Location: loginSuccessful.php');
            header('Location: loginSuccessful.php');
            exit;
        } else {
            echo "Wrong info";

        }


}
?>




</html>



