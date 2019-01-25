<main class="container" role="main">
<a href="?page=addUser" class="btn btn-primary mt-4 mb-4">Create New User</a>
<table id="example" class="table table-striped table-bordered" style="width:100%">
        <thead>
            <tr>
                <th>Name</th>
                <th>Position</th>
                <th>City</th>
                <th>Age</th>
                <th>Action</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Bunsin</td>
                <td>Developer</td>
                <td>Ratanakiri</td>
                <td>22</td>
                <td>
                    <a href="?page=updatePost&postId=<?php echo $data['blog_id']?>" class="btn btn-primary btn-sm">Update</a>
                    <a href="?page=deletePost&postId=<?php echo $data['blog_id']?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Bunsin</td>
                <td>Developer</td>
                <td>Ratanakiri</td>
                <td>22</td>
                <td>
                    <a href="?page=updatePost&postId=<?php echo $data['blog_id']?>" class="btn btn-primary btn-sm">Update</a>
                    <a href="?page=deletePost&postId=<?php echo $data['blog_id']?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Bunsin</td>
                <td>Developer</td>
                <td>Ratanakiri</td>
                <td>22</td>
                <td>
                    <a href="?page=updatePost&postId=<?php echo $data['blog_id']?>" class="btn btn-primary btn-sm">Update</a>
                    <a href="?page=deletePost&postId=<?php echo $data['blog_id']?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
            <tr>
                <td>Bunsin</td>
                <td>Developer</td>
                <td>Ratanakiri</td>
                <td>22</td>
                <td>
                    <a href="?page=updatePost&postId=<?php echo $data['blog_id']?>" class="btn btn-primary btn-sm">Update</a>
                    <a href="?page=deletePost&postId=<?php echo $data['blog_id']?>" class="btn btn-danger btn-sm">Delete</a>
                </td>
            </tr>
        </tbody>
    </table>
</main>