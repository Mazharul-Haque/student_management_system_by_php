<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    

    <title>Student Management System</title>
</head>
<body>
<div class="container" >
<a class="btn btn-success float-right mt-3 " href="admin/login.php" >Login</a>
<h1 class="text-center" >Welcome to Student Management System</h1>

<div class="row">

<div class="offset-md-4 col-sm-5 mt-4" >

<form action="" method="POST" >


<table class="table table-bordered table-dark table-hover" >
    <tr>
        <td colspan="2"> <label>Student Information</label> </td>
        
    </tr>


    <tr>
        <td> <label for="choose">Choose Class : </label> </td>

        <td>
        <select class="form-control" name="choose" id="choose">
        <option value="">Select</option>
        <option value="1">1st</option>
        <option value="2">2nd</option>
        <option value="3">3rd</option>
        <option value="4">4th</option>
        <option value="5">5th</option>
        </select>
        
        </td>
    </tr>


    <tr>
        <td> <label for="roll">Roll</label> </td>
        <td> <input class="form-control" type="text" pattern="[0-9]{6}" name="roll" placeholder="Enter Roll" > </td>
    </tr>


    <tr>
        
        <td colspan="2" class="text-center" > <input type="submit" name="show_info" value="show info"> </td>
    </tr>
</table>

</form>

</div>

</div>
</div>



    















<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
</body>
</html>