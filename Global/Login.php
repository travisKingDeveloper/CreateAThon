<?php
/**
* Created by PhpStorm.
* User: travi_000
* Date: 4/1/2016
* Time: 10:35 AM
*/

if ($_SERVER["REQUEST_METHOD"] != "POST")
    header( "Location: LoginView.php");

$username = $_REQUEST['UserName'];
$password = $_REQUEST['Password'];
$conn = GetDatabaseConnection();
$conn->query("SET @msg = FALSE");
$conn->query("CALL verifyUser(".strval($username).", $password, @msg);");
$res = $conn->query("SELECT @msg AS _p_out");
$row = $res->fetch_assoc();
$conn->close();

$msg = $row['_p_out'];

if($msg == 1)
{
    $_SESSION['loggedin'] = true;
    $_SESSION['username'] = $username;
    header("./../Views/index.php");
}
else
{
//        global $errorMessage;
    $_SESSION['error'] = "Login Not Valid, please try a different User Name and Password";
    header("./../Views/login.php");
}



