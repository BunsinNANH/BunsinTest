<?php 
    if(isset($_POST['btn-post'])){
        $username = $_POST['username'];
        $post = $_POST['post'];

        $query = "INSERT INTO tbl_blog(blog_name,blog_post,post_at)";
    }
?>