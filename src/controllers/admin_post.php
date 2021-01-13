<?php

if((Auth::isAdmin())) {
    redirectTo('admin_post');
}

if(isset($_POST['create_new_post_tokken']) && $_POST['create_new_post_tokken'] == '1') {
    
    Database::insert('tb_blog_post', array(
        'title'             => $_POST['post_title'],
        'content'           => $_POST['post_content'],
        'preview_content'   => $_POST['post_preview_content']
    ));
    
    Database::insert('tb_blog_post__categories', array(
        'blog_post_id'  => Database::getLastInsertedId(),
        'category_id'   => $_POST['post_category'],
    ));    
}