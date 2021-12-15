<?php session_start(); ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
        <link rel = "stylesheet" href = "../assets/css/bootstrap.css"/>
    </head>
<body>
<?php if(isset($_SESSION['id'])) { ?>
    <nav class="navbar navbar-expand-md navbar-dark bg-dark">
        <div class = "container">
            <a href = "" class = "navbar-brand">LOGO</a>
            <ul class = "navbar-nav ml-auto">
                <li><a href = "home.php" class = "nav-link">Add Blog </a></li>
                <li><a href = "action.php?status=manage" class = "nav-link">Manage Blog</a></li>
                <li><a href = "action.php?status=user" class = "nav-link">Manage User</a></li>
                <li><a href = "" class = "nav-link">Add User</a></li>
                <li><a href = "action.php?status=logout" class = "nav-link">Logout</a></li>
            </ul>
        </div>
    </nav>
<?php } else { ?>
    <nav class="navbar navbar-expand-md navbar-light bg-light text-white">
        <div class = "container">
            <a href = "" class = "navbar-brand">LOGO</a>
            <ul class = "navbar-nav ml-auto">
                <li><a href = "action.php?status=index" class = "nav-link">Home </a></li>
                <li><a href = "login.php" class = "nav-link">LogIn</a></li>
            </ul>
        </div>
    </nav>
<?php } ?>