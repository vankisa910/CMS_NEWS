<?php include('./templates/header.php'); ?>
<?php include('./src/controllers/signin.php') ?>

<div id="signup--wrapper">
    <form method="POST">

        <input placeholder  = "User E-mail"
               class        = "form-control"               
               type         = "text"      
               name         = "user_email">
        <?php displayFormError('signin', 'user_email'); ?>

        <input placeholder  = "User password" 
               class        = "form-control"
               type         = "password"  
               name         = "user_pass">
        <input type         = "hidden"    
               name         = "user_request_tokken"
               value        = "1">
        <input class        = "submit" 
               type         = "submit"
               value        = "Sign in">
    </form>
</div>

<?php include('./templates/footer.php'); ?>