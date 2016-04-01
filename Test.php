
<?php
/**
 * Created by PhpStorm.
 * User: travi_000
 * Date: 4/1/2016
 * Time: 10:00 AM
 */

include './Global/databaseConnection.php';

//$conn = GetDatabaseConnection();
//$A1 = $conn->query("SET @msg = FALSE");
//$A2 = $conn->query("CALL verifyUser(".strval(1).", 'vedranisawesome', @msg);");
//$res = $conn->query("SELECT @msg AS _p_out");
//
//$row = $res->fetch_assoc();
//$conn->close();
//
//echo $row['_p_out'];


$host = 'osprey.unf.edu';
$port = '22';
$pass ='MomDadKelly5512';
$user ='n00787683';

$connection = ssh2_connect($host, 22);

$success = ssh2_auth_password($connection, $user, $pass);

if($success)
    echo 'awesome';
