<?php
// Initialize the session
session_start();

// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Southern Cross Sporting Page</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <style>
        body { 
            font: 14px sans-serif; 
            text-align: center; 
        }
    </style>
</head>
<body>
   
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Southern Cross Sporting Page</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="welcome.php">Home</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sporting Meetings</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sign up sports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Sporting dates/times</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">block sports</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">community page</a>
            </li>
        </ul>
        <ul class="navbar-nav ml-auto">
            <li class="nav-item">
                <a class="nav-link" href="reset-password.php">Reset Your Password</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="logout.php">Sign Out</a>
            </li>
        </ul>
    </div>
</nav>


</body>
</html>

