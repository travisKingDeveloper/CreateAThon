<?php
/**
 * Created by PhpStorm.
 * User: travi_000
 * Date: 4/1/2016
 * Time: 11:25 AM
 */

session_start();

if(!(isset($_SESSION['loggedin']) && $_SESSION['loggedin'] == true))
{
    $_SESSION['error'] = "Please Log In";
    header( "Location: ./Login.php" );
}