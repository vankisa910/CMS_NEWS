<?php include('./templates/header.php'); ?>
<?php include('./src/controllers/blog.php'); ?>

<?php $categoryFetch    = Database::query("SELECT * FROM tm_categories"); ?>

<div class="wrapper">
    <ul id      = "category-placeholder" 
        class   = "mb-25">
        <?php while($blogCategory = Database::fetch($categoryFetch)) {  ?>
        <li class ="category-placeholder--category">
            <?php   
            $categoryId = $blogCategory['id']; ?>
            <a href="<?php echo "http://localhost/CMS/blog.php?category=$categoryId" ?>">
                <?php echo $blogCategory['title'] ?>
            </a>
        </li>
        <?php } ?> 
    </ul>
    
    <div>
        <form method="GET">
            
            <input type         = "text" 
                   placeholder  = "type here..." 
                   name         = "q">
            
            <select name        = "q_selector">
                <option value   = "title">Search by title</option>
                <option value   = "content">Search by content</option>
            </select>            

            <input type       = "hidden" 
                   name       = "post_search_tokken" 
                   value      = "1">
            <input type       = "submit"
                   class      = "search"
                   value      = "search">
        </form>
    </div>    
    
</div>


<div id="blog-post--content">

    <div class="post">
        <?php 
        foreach (listAllBlogPost() as $key => $blogPost) { ?>
        
        <span class="post-title"> 
            <?php echo $blogPost['title']; ?>
        </span>
        <div class="post-content">
            <p><?php echo $blogPost['preview_content']; ?> </p>                        

        </div>                    

        <?php } ?>
    </div>
    
    <?php Pagination::display(); ?>
</div>

<?php include('./templates/user/footer.php'); ?>