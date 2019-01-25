<?php 
    if(isset($_POST['btn-post'])){
        $username = $_POST['username'];
        $post = $_POST['post'];

        $query = "INSERT INTO tbl_blog(blog_name,blog_post,post_at)";
    }
?>
<main class="container">
    <div class="card bg-light shadow-lg">
        <div class="card-header text-center">Create New Post</div>
            <div class="card-body">
                <form action="insertPost.php" method="POST">
                    <!-- input username -->
                    <div class="form-group">
                        <input type="text" name="username" class="form-control" placeholder="Username">
                    </div>
                    <!-- Describe what your mind -->
                    <div class="form-group">
                        <textarea name="post" id="post" cols="30" class="form-control" rows="10" placeholder="Comment Post"></textarea>
                    </div>
                    <!-- button submit and reset -->
                    <div class="form-group">
                        <a href="?page=updatePost&postId=<?php echo $data['blog_id']?>" class="btn btn-primary" name="btn-post">Create New Post</a>
                        <a href="?page=deletePost&postId=<?php echo $data['blog_id']?>" class="btn float-right btn-warning">Cancel Information</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
</main>