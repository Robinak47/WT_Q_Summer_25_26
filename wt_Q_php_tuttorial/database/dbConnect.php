<?php


ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);



// 2. Force mysqli to NOT throw exceptions (prevents white screen of death)
mysqli_report(MYSQLI_REPORT_OFF);


    $serverName="localhost";
    $userName="jhsdguf";
    $password="";
    $dbName="meow_db";
    //$port=80;


    $conn = mysqli_connect($serverName, $userName, $password, $dbName);

    if(!$conn)
        {
            die( "connection failed", " ", mysqli_connect_error());

        }

    else
        {
            echo "connection successful";
        }





?>