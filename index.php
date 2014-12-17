<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<body class="pls2">
    <ul>
    <a class="button" href="/bloggerino/index.php">Home</a>
    <a class="button" href="/bloggerino/view/login-form.php">Login</a>
    <a class="button" href="/bloggerino/index.php">Logout</a>
    </ul>
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

     