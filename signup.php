<?php include('./templates/header.php');        ?>
<?php include('./src/controllers/signup.php'); ?>

<div id="signup--wrapper">
    <form method="POST">

        <input placeholder  = "User name" 
               class        = "form-control"  
               type         = "text"      
               name         = "user_name">
        <?php displayFormError('signup', 'user_name'); ?>
        
        <input placeholder  = "User first name" 
               class        = "form-control"  
               type         = "text"      
               name         = "user_fname">
        <?php displayFormError('signup', 'user_fname'); ?>
        
        <input placeholder  = "User last name" 
               class        = "form-control"  
               type         = "text"      
               name         = "user_lname">
        <?php displayFormError('signup', 'user_lname'); ?>
        
        <input placeholder  = "User E-mail address" 
               class        = "form-control"  
               type         = "email"      
               name         = "user_email">
        <?php displayFormError('signup', 'user_email'); ?>
        
        <input placeholder  = "Password" 
               class        = "form-control"  
               type         = "password"  
               name         = "user_pass">
        <?php displayFormError('signup', 'user_pass'); ?>
        
        <input placeholder  = "Repeat password" 
               class        = "form-control"  
               type         = "password"  
               name         = "user_pass_repeat">
        <input type         = "hidden"  
               name         = "user_request_tokken"
               value        = "1">
        <input class        = "submit" 
               type         = "submit"
               value        = "Sign up">
    </form>
</div>


<?php include('./templates/footer.php'); ?>