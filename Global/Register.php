<?php
/**
 * Created by PhpStorm.
 * User: travi_000
 * Date: 4/1/2016
 * Time: 4:23 PM
 */
include 'databaseConnection.php';
if ($_SERVER["REQUEST_METHOD"] != "POST")
    header( "Location: LoginView.php");

$username = $_REQUEST['UserName'];
$password = $_REQUEST['Password'];
$conn = GetDatabaseConnection();
$sql = "CALL addUser('".strval($username)."', '".$password."');";
$t2 = $conn->query($sql);
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
