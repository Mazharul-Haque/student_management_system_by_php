<?php
require_once'./dbconnect.php';
session_start();
if(isset($_POST['login'])){
     $username = $_POST['username'];
     $password = $_POST['password'];

    $query = "SELECT * FROM `users` WHERE `username` ='$username'";

    $username_check = mysqli_query($link,$query);
    if(mysqli_num_rows($username_check) > 0 ){
        $row = mysqli_fetch_assoc($username_check);
        if($row['password']== md5($password)){
            if($row['status'] == 'active'){
                header('location:index.php');
            }else{
                $status_inactive ="Your status inactive, please active your status";
            }
        }else{
            $Wrong_password = "That password not correct, please try again";
        }
    }else{
        $username_not_found = "That user not found";
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">

    <title>student_management_System</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center mt-3">Student Management System</h1> <br>
        <div class="row">


            <div class="col-sm-4 offset-md-4">
                <h3 class="text-center">Admin login form</h3>
                <form action="login.php" method="POST">
                    <input type="text" class="form-control" placeholder="UserName" name="username" required=""> <br>
                    <input type="password" class="form-control" placeholder="Password" name="password" required=""><br>
                    <input type="submit" class=" btn btn-success" name="login" value="Login">
                </form>
            </div>
        </div> <br>
        <?php if(isset($username_not_found)){
             echo '<div class="alert alert-danger col-sm-4 offset-sm-4" >'.$username_not_found.'</div>';
        }
        ?>
        <?php if(isset($Wrong_password)){
             echo '<div class="alert alert-danger col-sm-4 offset-sm-4" >'.$Wrong_password.'</div>';
        }
        ?>
          <?php if(isset($status_inactive)){
             echo '<div class="alert alert-danger col-sm-4 offset-sm-4" >'.$status_inactive.'</div>';
        }
        ?>

          

    </div>









    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>