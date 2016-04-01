<?php
/**
 * Created by PhpStorm.
 * User: travi_000
 * Date: 4/1/2016
 * Time: 11:28 AM
 */


function GetDatabaseConnection()
{
    $localHost = 'us-cdbr-azure-east2-d.cloudapp.net';
    $user = 'be250abbbbd852';
    $password = 'fd3ad67c';
    $databaseName = 'InternetProgrammingDatabasePublic';

//Create the connection variable
    $conn = new mysqli($localHost, $user, $password, $databaseName);

    if ($conn->connect_error)
    {
        die("Connection failed");
    }

    return $conn;
}