<?php
/**
 * Created by PhpStorm.
 * User: travi_000
 * Date: 4/1/2016
 * Time: 4:13 PM
 */

$conn = GetDatabaseConnection();
$A1 = $conn->query("SET @msg = FALSE");
$A2 = $conn->query("CALL verifyUser(".strval(1).", 'vedranisawesome', @msg);");
$res = $conn->query("SELECT @msg AS _p_out");

$row = $res->fetch_assoc();
$conn->close();

echo $row['_p_out'];