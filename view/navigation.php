<?php
// shows the config.php and only requires it once to use it
    require_once (__DIR__. "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verification.php");
    
    if (!authenticateUser()){
        header("Location:". $path ."index.php");
        die();
    }
?>
<nav>
    <ul>
        <!--this is a link that links to the next page using php to get there since it is php-->
        <li><a class="button" href="<?php echo $path. "post.php"?>">Blog post here</a></li>
    </ul>
</nav>