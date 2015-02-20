        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
        
        <div class="row"> 
            <div class="col-xs-2">
                <nav class="list-group">
                    <a class="list-group-item" href="index.php">Home</a>
                    <a class="list-group-item" href="login.php">Login</a>
                    <a class="list-group-item" href="register.php">Register</a>
                    <a class="list-group-item" href="Post.php">Post</a>
                    
                </nav>
            </div>
        </div>        

<?php
    require_once(__DIR__ . "/view/header.php");
    require_once(__DIR__ . "/view/register-form.php");
    require_once(__DIR__ . "/view/footer.php");


