<?php
    //checks for this file
    
    require_once (__DIR__."/../model/config.php");
    
    $title = filter_input(INPUT_POST,"title",FILTER_SANITIZE_STRING);
    $post = filter_input(INPUT_POST,"post",FILTER_SANITIZE_STRING);
    $date = new DateTime('today');
    $time = new DateTime('America/Los_Angeles');
    $query = $_SESSION["connection"] ->query("INSERT INTO posts SET title ='$title', post = '$post'");
    if ($query){
        echo "<p>Successfully instered:$title</p>";
        echo "Posted on:". $date->format("m/d/y")." at ". $time->format("G:i");
        
    }
    else{
        echo "<p>" . $_SESSION["connection"] ->error . "</p>";
    }
?>
<a class="button" href="/bloggerino/index.php">Home</a>