<?php include('./templates/admin/header.php' ); ?>
<?php include('./src/util/static_list.php'   ); ?>
<?php include('./src/controllers/admin_post.php' ); ?>

<div class="wrapper">
    
    <form method="post">
        <input type        = "text"
               class       = "form-control"               
               name        = "post_title" 
               placeholder = "Post title">
        
        <?php getCategoryStaticList('post_category'); ?>
        
        <textarea 
               class       = "form-control"             
               name        = "post_content" 
               placeholder = "Post content"></textarea>
        
        <textarea 
               class       = "form-control"            
               name        = "post_preview_content" 
               placeholder = "Post preview content"></textarea>        
        
        <input type        = "hidden" 
               class       = "form-control"                
               name        = "create_new_post_tokken" 
               value       = "1">
        <input type        = "submit" 
               class       = "form-control"                
               value       = "Create new post">
        
    </form>
</div>
<?php include('./templates/admin/footer.php'); ?>