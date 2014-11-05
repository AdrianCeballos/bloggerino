<?php
// shows the config.php and only requires it once to use it
    require_once (__DIR__. "/../model/config.php");
?>
<nav>
    <ul>
        <!--this is a link that links to the next page using php to get there since it is php-->
        <li><a href="<?php echo $path. "post.php"?>">Blog post here</a></li>
    </ul>
</nav>