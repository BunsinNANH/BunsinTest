<?php include_once "connection.php"?>
<main class="container">
    <a href="?page=addPost" class="btn btn-primary mt-4 mb-4">Create New Post</a>
    <?php 
        $query = "SELECT * FROM tbl_blog ORDER BY blog_id desc";
        $result = mysqli_query($conn,$query);
        foreach ($result as $data):
    ?>
    <div class="card">
        <div class="card-body">
            <h4 class="card-title"><?php echo $data['blog_name']?></h4>
            <p class="card-text">
                <?php echo $data['blog_post']?>
            </p>
            <div class="btn-group float-right">
            <a href="?page=updatePost&postId=<?php echo $data['blog_id']?>" class="btn btn-primary btn-sm">Update Post</a>
            <a href="?page=deletePost&postId=<?php echo $data['blog_id']?>" class="btn btn-danger btn-sm">Delete Post</a>
            </div>
        </div>
        <div class="card-footer">
            Date : <?php echo $data['post_at']?>
        </div>
    </div>
        <?php endforeach;?>
</main>