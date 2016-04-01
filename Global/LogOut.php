<?php
/**
 * Created by PhpStorm.
 * User: travi_000
 * Date: 4/1/2016
 * Time: 4:42 PM
 */

session_start();
session_unset();
session_destroy();
ob_start();
header("location:Login.php");
ob_end_flush();
//include 'home.php';
exit();