<?php

//Turn on error reporting
ini_set('display_errors', 1);
error_reporting(E_ALL);

//Start a session
session_start();

//If the user is already logged in
if (isset($_SESSION['username'])) {
    //Redirect to page 1
    header('location: summary.php');
}

//If the login form has been submitted
if(isset($_POST['submit'])) {
    //Include creds.php (eventually, passwords should be moved to a secure location
    //or stored in a database)
    include ('model/creds.php');

    //Get the username and password from the POST array
    $username = $_POST["username"];
    $password = $_POST["password"];

    //If the username and password are correct
    if (array_key_exists($username, $login) && $login["$username"] == $password) {
        //Store login name in a session variable
        $_SESSION['username'] = $username;

        //Redirect to page 1
        header('location: summary.php');
    }

    //Login credentials are incorrect
    echo "<div class='form-group'><p class='alert-danger text-center p-2'>Invalid login</p></div>";
}
?>

<include href="views/header.html">

    <body class="newBody">

        <!-- Navigation bar -->
        <nav class="navNew navbar navbar-expand-lg navbar-light bg-light">

            <!-- Logotype -->
            <a class="navbar-brand ml-4 m-1 menu" href="https://emishkin.greenriverdev.com/328/Final_Project/">One Shot Photography</a>
            <a class="navbar-brand ml-4 m-1 menu" href="schedule">Schedule Photo Shoot</a>
            <a class="navbar-brand ml-4 m-1 menu" href="contact">Contact Us</a>
            <a class="navbar-brand ml-4 m-1 menu" href="login">Login</a>
        </nav>

        <!-- Title and Contact Info -->
        <div class="jumbotron jumbotron-fluid" id="jumbotron1"></div>

            <form method="post" action="#">

                <div class="container">

                    <div class="container mt-5">
                        <h1>Login</h1>
                        <hr>
                        <br><br>
                    </div>
                </div>

                <div class="container" id="main">
                    <div class="row">
                        <div class="col">
                            <label>Username:</label>
                            <input type="text" name="username" id="username" class="form-control">
                            <br>
                        </div>

                        <div class="col">
                            <label>Password:</label>
                            <input type="password" name="password" class="form-control">
                            <br>
                        </div>

                    </div>

                    <input type="submit" name="submit" value="Submit" class="btn btn-primary">
                </div>
            </form>

    </body>