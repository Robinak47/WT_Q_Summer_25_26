<?php

$serverName="localhost";
$userName="root";
$password="";
$db="sample_proj";

function dbConnection()
{
    global $serverName;
    global $userName;
    global $password;
    global $db;
    $conn=mysqli_connect($serverName, $userName, $password, $db);

    if($conn)
    {
        return $conn;
    }
    else
    {
        echo "Database connection failed. ".mysqli_connect_error();
    }
}



?>