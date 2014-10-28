<?php
    /*looks at certain file and stops scripts if not there*/
    require_once(__DIR__."/../model/database.php");
    $connection = new mysqli($host, $username, $password);
        /*if else statement that lets you know if connection is working if it isnt it send error*/
        if ($connection->connect_error){
            die("Error" . $connection->connect_error);
        }
        /*Variable that selects the database*/
        $exists = $connection->select_db($database);
           /*checks to see if database exists if it doesnt it creates it*/
            if (!$exists){
                $query = $connection->query("CREATE DATABASE $database");
            
            /*tells you if you create it successfully*/
            if ($query) {
                echo "Successfully created database " . $database;
            }
            }
            /*if it does exist then it echos*/
            else{
                echo "Database already exists";
            }
            
        $connection->close();