<?php
    /*looks at certain file and stops scripts if not there*/
    require_once(__DIR__."/../model/config.php");
            /*creating a query that makes a table in the database to store info
            then create an id for each blog post the table consists of id title and post not null
             means it cannot be empty*/
            $query = $_SESSION["connection"] ->query("CREATE TABLE posts ("
                    ."id int(11) NOT NULL AUTO_INCREMENT, "
                    ."title varchar(255) NOT NULL,"
                    ."post text NOT NULL,"
                    ."DateTime datetime NOT NULL,"
                    ."PRIMARY KEY (id))");
            if ($query){
                echo "<p>Successfully created the table: posts</p>";
            }
            else {
                echo "<p>".$_SESSION["connection"] ->error."</p>";
            }
            $query = $_SESSION["connection"]->query("CREATE TABLE users ("
                    . "id int(11) NOT NULL AUTO_INCREMENT,"
                    . "username varchar(30) NOT NULL,"
                    . "email varchar(50) NOT NULL,"
                    . "password char(128) NOT NULL,"
                    . "salt char(128) NOT NULL,"
                    . "PRIMARY KEY (id))");
            if ($query){
                echo "<p>Successfully created the table users </p>";
            }
            else {
                echo "<p>".$_SESSION["connection"] ->error."</p>";
            }