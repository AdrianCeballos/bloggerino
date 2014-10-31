<?php
    /*looks at certain file and stops scripts if not there*/
    require_once(__DIR__."/../model/database.php");
    $connection = new mysqli($host, $username, $password);
        /*if else statement that lets you know if connection is working if it isnt it send error*/
        if ($connection->connect_error){
            die("<p>Error" . $connection->connect_error."</p>");
        }
        /*Variable that selects the database*/
        $exists = $connection->select_db($database);
           /*checks to see if database exists if it doesnt it creates it*/
            if (!$exists){
                $query = $connection->query("CREATE DATABASE $database");
            
            /*tells you if you create it successfully*/
            if ($query) {
                echo "</p>Successfully created database " . $database ."</p>";
            }
            }
            /*if it does exist then it echos*/
            else{
                echo "<p>Database already exists</p>";
            }
            /*creating a query that makes a table in the database to store info
            then create an id for each blog post the table consists of id title and post not null
             means it cannot be empty*/
            $query = $connection ->query("CREATE TABLE posts ("
                    ."id int(11) NOT NULL AUTO_INCREMENT, "
                    ."title varchar(255) NOT NULL,"
                    ."post text NOT NULL,"
                    ."PRIMARY KEY (id))");
            if ($query){
                echo "<p>Successfully created the table: posts</p>";
            }
            else {
                echo "<p>$connection->error</p>";
            }
            
                
            
        $connection->close();