<?php
/**
 * Created by PhpStorm.
 * User: travi_000
 * Date: 4/1/2016
 * Time: 4:23 PM
 */

//if ($_SERVER["REQUEST_METHOD"] != "POST")
//    header( "Location: LoginView.php");
include 'databaseConnection.php';
$username = "TraviKing";//$_REQUEST['UserName'];
$password = "asdf";//$_REQUEST['Password'];
$conn = GetDatabaseConnection();
$conn->query("SET @msg = FALSE");
$sql = "CALL verifyUser('".$username."' , '".$password."', @msg);";
$conn->query($sql);
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
    $_SESSION['error'] = "Login Not Valid, please try a different User Name and Password";
    header("./../Views/login.php");
}