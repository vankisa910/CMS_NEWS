<?php session_start(); ?>
<?php include './src/db/Database.php';      ?>
<?php include './src/models/Auth.php';      ?>
<?php include './src/util/form.php';        ?>
<?php include './src/util/Pagination.php';  ?>
<?php include './src/util/redirect.php';    ?>

<html>
    
<head>
    <title>title</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css"/>
</head>
<body>
      
<div id="header" class="navbar navbar-dark bg-dark">
    
    <h1 class   = "logo">@Flash News</h1>
    
    <div id     = "cms-manager">
        <?php if(Auth::isNotAuthenticated()) { ?>        
        <ul>
            <li class="list-item"><a href="blog.php">Current News</a></li>    
            <li class="list-item"><a href="contacts.php">Contacts</a></li>
            <li class="list-item"><a href="aboutus.php">About us</a></li>             
            <li class="list-item"><a href="signin.php">Sign in</a></li>
            <li class="list-item"><a href="signup.php">Sign up</a></li>
        </ul>
        <?php } ?>
        
        <?php if(Auth::isAuthenticated()) { ?>        
        <ul>
            <li class="list-item"><a href="blog.php">Current News</a></li>    
            <li class="list-item"><a href="contacts.php">Contacts</a></li>
            <li class="list-item"><a href="aboutus.php">About us</a></li>             
            <li class="list-item"><a href="signout.php">Sign out</a></li>
        </ul>
        <?php } ?>        
    </div>
</div>
<div id="content">