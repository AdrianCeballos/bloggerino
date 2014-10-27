<?php
    /*looks at certain file and stops scripts if not there*/
    require_once(__DIR__."/../model/database.php");
    $connection = new mysqli($host, $username, $password);
        /*if else statement that lets you know if connection is working*/
        if ($connection->connect_error){
            die("Error" . $connection->connect_error);
        }
        else {
            echo "Success" . $connection->host_info;
        }
        
        $connection->close();