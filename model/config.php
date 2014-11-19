<?php
//    creating a variable to store the project name to shorten code
    $path = "/bloggerino/";
    
    $host="localhost";
    $username="root";
    $password="root";
    $database="blog_db";
    //new database object to query on the database
    $connection = new Database($host, $username, $password, $database);