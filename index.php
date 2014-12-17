<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<body class="pls2">
    <head>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
        <ul>
        <a class="button" href="/bloggerino/index.php">Home</a>
        <a class="button" href="/bloggerino/view/register-form.php">Register</a>
        <a class="button" href="/bloggerino/view/login-form.php">Login</a>
        <a class="button" href="/bloggerino/controller/logout-user.php">Logout</a>
        </ul>
        <script>
            $( document ).ready(function() {
                alert ("Welcome to homepage");
            });
        </script>
</body>
     
        
        <?php
        // put your code here
        //looks at certain file and doesnt require it again //
        require_once (__DIR__. "/controller/login-verification.php");
        require_once (__DIR__. "/view/header.php");
        if (authenticateUser()){
        require_once (__DIR__. "/view/navigation.php");
        }
        require_once (__DIR__. "/controller/create-db.php");
        require_once (__DIR__. "/view/footer.php");
        require_once (__DIR__. "/controller/read-posts.php");
?>

     