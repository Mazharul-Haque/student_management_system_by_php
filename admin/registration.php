<?php
require_once './dbconnect.php';
session_start();

if (isset($_POST['registration'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    $photo = explode('.', $_FILES['photo']['name']);
    $photo = end($photo);
    $photo_name = $username . '.' . $photo;
    //echo $photo_name;

    $input_error = array();


    if (empty($name)) {
        $input_error['name'] = "**Name is Required";
        # code...
    }
    if (empty($email)) {
        $input_error['email'] = "**email is Required";
        # code...
    }
    if (empty($username)) {
        $input_error['username'] = "**username is Required";
        # code...
    }
    if (empty($password)) {
        $input_error['password'] = "**password is Required";
        # code...
    }
    if (empty($confirm_password)) {
        $input_error['confirm_password'] = "**confirm_password is Required";
        # code...
    }
    $password = md5($password);
    $query = "INSERT INTO `users`(`name`, `email`, `username`, `password`, `photo`, `status`) VALUES ('$name','$email','$username','$password','$photo_name','inactive')";
    $result = mysqli_query($link, $query);
    if ($result) {

        $_SESSION['Data_insert_Success'] = "Data Insert Successfully";
        //move_uploaded_file($_FILES['photo']['tmp_name'],'images/'.$photo_name);
        header('location:registration.php');

    } else {
        $_SESSION['Data_insert_error'] = "Data Insert Error";
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


    <title>User Registration Form</title>
    <hr />

</head>

<body>
    <div class="container mt-3">
        <h3>User Registration form</h3>
        <hr />

        <?php
        if (isset($_SESSION['Data_insert_Success'])) {
            echo '<div class="alert alert-success">' . $_SESSION['Data_insert_Success'] . '</div>';
        }
        ?>
        <?php unset($_SESSION['Data_insert_Success']); ?>

        <?php
        if (isset($_SESSION['Data_insert_error'])) {
            echo '<div class="alert alert-warning">' . $_SESSION['Data_insert_error'] . '</div>';
        }

        ?>
        <?php unset($_SESSION['Data_insert_error']); ?>

        <div class="col-md-12">
            <form action="" method="POST" enctype="multipart/form-data" class="form-horizontal">
                <div class="form-group">
                    <label class="control-label col-sm-1" for="name">Name :</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="name" name="name" placeholder="Enter Your Name" value="">
                    </div>
                    <!-- required warning msg -->
                    <label for="" style="font-weight: bold; color:red; ">
                        <!-- php code -->
                        <?php
                        if (isset($input_error['name'])) {
                            echo $input_error['name'];
                        }
                        ?>
                    </label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="email">Email :</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="email" id="email" name="email" placeholder="Enter Your email" value=" ">
                    </div>
                    <label for="" style="font-weight: bold; color:red; ">
                        <!-- php code -->
                        <?php
                        if (isset($input_error['email'])) {
                            echo $input_error['email'];
                        }
                        ?>
                    </label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="username">Username :</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="text" id="username" name="username" placeholder="Enter Your username" value=" ">
                    </div>
                    <label for="" style="font-weight: bold; color:red; ">
                        <!-- php code -->
                        <?php
                        if (isset($input_error['username'])) {
                            echo $input_error['username'];
                        }
                        ?>
                    </label>

                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="password">Password :</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="password" id="password" name="password" placeholder="Enter Your password" value="">
                    </div>
                    <label for="" style="font-weight: bold; color:red; ">
                        <!-- php code -->
                        <?php
                        if (isset($input_error['password'])) {
                            echo $input_error['password'];
                        }
                        ?>
                    </label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="confirm_password">confirm_password:</label>
                    <div class="col-sm-4">
                        <input class="form-control" type="password" id="confirm_password" name="confirm_password" placeholder="Enter Your confirm_password" value="">
                    </div>
                    <label for="" style="font-weight: bold; color:red; ">
                        <!-- php code -->
                        <?php
                        if (isset($input_error['confirm_password'])) {
                            echo $input_error['confirm_password'];
                        }
                        ?>
                    </label>
                </div>
                <div class="form-group">
                    <label class="control-label col-sm-1" for="photo">Photo:</label>
                    <div class="col-sm-4">
                        <input type="file" id="photo" name="photo">
                    </div>
                </div>
                <div class="col-sm-4 mt-2">
                    <input class="btn btn-primary" type="submit" value="Registration" name="registration">
                </div>


            </form>

        </div>
        <br>
        <p>if you have an account then <a class="btn btn-success" href="login.php">Login</a></p>
        <hr />
        <footer>
            <p>Copyright &copy; 2018 - <?php date("Y") ?> All rights Reserved </p>
        </footer>




    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>

</html>