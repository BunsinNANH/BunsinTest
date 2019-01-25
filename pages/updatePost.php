<?php 
    include_once "connection.php";
    $query = "UPDATE FROM tbl_blog WHERE blog_id=".$_GET['postId'];

    $result = mysqli_query($conn,$query);
foreach ($result as $data):
?>
<main class="container">
<div class="card bg-light shadow-lg">
                <div class="card-header text-center"><?php echo $data['blog_name']?></div>
                <div class="card-body">
                    <form action="#" method="POST">
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
                            <button class="btn btn-primary" type="submit" name="btn-post">Create New Post</button>
                            <button class="btn btn-warning float-right" type="reset" name="">Cancel Creation</button>
                        </div>
                    </form>
                </div>
            </div>
<?php endforeach;?>
</main>