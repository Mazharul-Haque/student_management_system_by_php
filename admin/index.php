<?php
session_start();
if (!isset($_SESSION['user_login'])) {
    header('location :login.php');
}

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <script defer src="/your-path-to-fontawesome/js/brands.js"></script>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../css/dataTables.bootstrap5.min.css">
    <!-- js link -->
    <script src="../js/jquery-3.5.1.js"></script>
    <script src="../js/jquery.dataTables.min.js"></script>
    <script src="../js/dataTables.bootstrap5.min.js"></script>
    <script src="../js/script.js"></script>

    <title>SMS</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="index.php">SMS</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <div class="navbar-nav me-auto mb-2 mb-lg-0">

                </div>
                <div class="d-flex">
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>SMS</a>
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Profile</a>
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Add User</a>
                    <a class="nav-link" href="logout.php"><i class="fas fa-sign-out-alt"></i>Log Out</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- dashboard side bar -->
    <div class="container-fluid">

        <div class="row">

            <div class="col-sm-3">
                <div class="list-group">
                    <a href="index.php?page=dashboard" type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        Dashboard
                    </a>
                    <a href="index.php?page=add-student" type="button" class="list-group-item list-group-item-action">Add Student</a>
                    <a href="index.php?page=all-student" type="button" class="list-group-item list-group-item-action">All Student</a>
                    <a href="index.php?page=add-user" type="button" class="list-group-item list-group-item-action">All Users</a>

                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">

                    <?php 

                    

                    if(isset($_GET['page'])){
                        $page = $_GET['page'].'.php';

                    } else{
                        $page = "dashboard.php";
                    }

                    // require_once $page;
                    if(file_exists($page)){
                        require_once $page;
                    }else{
                        echo '<h2>File not found</h2>';
                    }
                    
                    
                    ?>

                </div>

            </div>

        </div>


        <!-- <footer class="text-center">
        <p>Copyrright &copy; ALL Rights Reserved Student Management System </p>
    </footer> -->
</body>

</html>