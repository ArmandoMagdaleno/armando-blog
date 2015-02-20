        <link type="text/css" rel="stylesheet" href="css/bootstrap-theme.css">
        <link type="text/css" rel="stylesheet" href="css/bootstrap.css">
        <link type="text/css" rel="stylesheet" href="css/custom-style.css">
        
        <div class="row"> 
            <div class="col-xs-2">
                <nav class="list-group">
                    <a class="list-group-item" href="index.php">Home</a>
                    <a class="list-group-item" href="login.php">Login</a>
                    <a class="list-group-item" href="register.php">Register</a>
                    <a class="list-group-item" href="post.php">Post</a>
                    
                </nav>
            </div>
        </div>


<?php
    require_once(__DIR__ . "/../model/config.php");

    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_STRING);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_STRING);

    $query = $_SESSION["connection"]->query("SELECT salt, password FROM users WHERE username = '$username' ");

    if ($query->num_rows == 1) {
        $row = $query->fetch_array();

        if ($row["password"] === crypt($password, $row["salt"])) {
            $_SESSION["authenticated"] = true;
            echo "<p>Login Successful!</p>";
        }  
        else {
            echo "<p>Invalid username and password</p>";
        }
    }   
    else {
        echo "<p>Invalid username and password</p>";
    }