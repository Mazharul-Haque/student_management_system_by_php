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
                    <button type="button" class="list-group-item list-group-item-action active" aria-current="true">
                        Dashboard
                    </button>
                    <button type="button" class="list-group-item list-group-item-action">Add Student</button>
                    <button type="button" class="list-group-item list-group-item-action">All Student</button>
                    <button type="button" class="list-group-item list-group-item-action">All Users</button>

                </div>
            </div>
            <div class="col-sm-9">
                <div class="content">
                    <h2 class="text-primary">Dashboard <small>Statistics Overview </small></h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item active" aria-current="page">Dashboard</li>
                        </ol>
                    </nav>

                    <div class="row">

                        <div class="col-sm-4 border border-5">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            test
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="pull-right"> <a href="#"> All Students</a></div>
                                            <div class="pull-right">10 </div>

                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>
                        <!-- 2ndbox -->
                        <div class="col-sm-4 border border-5 ms-4 ">
                            <div class="panel panel-primary">
                                <div class="panel-heading">
                                    <div class="row">
                                        <div class="col-xs-3">
                                            test
                                        </div>
                                        <div class="col-xs-9">
                                            <div class="pull-right"> <a href="#"> All Students</a></div>
                                            <div class="pull-right">10 </div>

                                        </div>

                                    </div>


                                </div>

                            </div>

                        </div>
                        <!-- 2nd box end -->

                    </div>

                    <hr />
                    <h3>New Students</h3>
                    <table class="table" >
                        <th>

                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Roll</th>
                                <th>City</th>
                                <th>Contact</th>
                            </tr>

                        </th>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>Sagor</td>
                                <td>16115</td>
                                <td>Dhaka</td>
                                <td>01743107750</td>
                                
                            </tr>

                        </tbody>
                        <tbody>
                            <tr>
                                <td>2</td>
                                <td>Mahmud</td>
                                <td>15115</td>
                                <td>Chittagong</td>
                                <td>015542689</td>
                                
                            </tr>

                        </tbody>
                        <tbody>
                            <tr>
                                <td>3</td>
                                <td>Kamal</td>
                                <td>14265</td>
                                <td>Khulna</td>
                                <td>01658978</td>
                                
                            </tr>

                        </tbody>

                    </table>


                </div>
            </div>

        </div>

    </div>


    <footer class="text-center">
        <p>Copyrright &copy; ALL Rights Reserved Student Management System </p>
    </footer>
</body>

</html>