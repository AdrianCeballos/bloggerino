<?php

//    creating a variable to store the project name to shorten code
require_once(__DIR__ . "/database.php");
$path = "/bloggerino/";
session_start();

$host = "localhost";
$username = "root";
$password = "root";
$database = "blog_db";
if (!isset($_SESSION["connection"])) {
    //new database object to query on the database
    $connection = new Database($host, $username, $password, $database);
    $_SESSION["connection"] = $connection;
}