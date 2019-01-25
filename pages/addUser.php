<?php 
    require_once "connection.php";
    if(isset($_POST['btn-submit'])){
        $username = $_POST['user'];
        $position = $_POST['positon'];
        $city = $_POST['city'];
        $age = $_POST['age'];

        $query = "INSERT INTO tbl_user(username,position,city,age) VALUES ('$username','$position','$city','$age')";

        $result=mysqli_query($conn,$query);
        
        if($result){
            header("location:users.php");
        }else{
            echo "cannot insert";
        }
    }
?>
<main class="container">
<div class="card bg-light shadow-lg">
                <div class="card-header text-center">Information Form</div>
                <div class="card-body">
                    <form action="users.php" method="POST">
                        <!-- input username -->
                        <div class="form-group">
                            <input type="text" name="user" class="form-control" placeholder="Username">
                        </div>

                        <div class="form-group">
                            <input type="text" name="position" class="form-control" placeholder="Position">
                        </div>

                        <div class="form-group">
                            <input type="text" name="city" class="form-control" placeholder="City">
                        </div>

                        <div class="form-group">
                            <input type="number" name="age" class="form-control" placeholder="Age">
                        </div>
                    
                        <!-- button submit and reset -->
                        <div class="form-group">
                            <button class="btn btn-primary" type="submit" name="btn-submit">Submit Infomation</button>
                            <button class="btn btn-warning float-right" type="reset" name="">Cancel Infomation</button>
                        </div>
                    </form>
                </div>
            </div>
</main>