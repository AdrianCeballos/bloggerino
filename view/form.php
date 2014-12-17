<?php
    require_once (__DIR__ . "/../model/config.php");
    require_once (__DIR__ . "/../controller/login-verification.php");
    
    if (!authenticateUser()){
        header("Location:". $path ."index.php");
        die();
    }
?>
<body class="pls">
    <a class="button" href="index.php">Home</a>
<h1 class="ayy">Create a blog post</h1>
<!--form is used for user input-->
<form method="post" action="<?php echo $path . "controller/create-post.php"; ?>">
    <div>
        <!--Input makes the text box and label is its name next to it.-->
        <label for="title"> Title:</label>
        <input type="text"name="title"/>
    </div>
    <div>
        <!--Text area makes a text box that is expandable label labels it -->
        <label for="post">Post:</label>
        <textarea name="post"></textarea>
    </div>
    
    <div>
        <!--Makes a button that submits-->
        <button type="submit">Submit        </button>
    </div>
</form>
</body>