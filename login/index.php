<?php
session_start();
// if(isset($_SESSION['id_petugas']))
// {
//     header("Location:http://localhost/covid/login/index.php");
//     // die();
// }
// include '../asset/header.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Form Login</title>
    <link rel="stylesheet" href="http://localhost/covid/asset/bootstrap/css/bootstrap.min.css">
    <script src="http://localhost/covid/asset/jquery.js"></script>
    <script src="http://localhost/covid/asset/bootstrap/js/bootstrap.min.js"></script>
</head>
<center><body style="background-image: url('../img/4.gif'); background-size: 100%; background-repeat: no-repeat;">
    <br>
    <br>
    <br>
    <br>
    <div class="card text-white bg-dark" style="width: 30%">
        <div class="card-header">
            <h2 style="text-shadow: 2px 2px 4px grey; box-shadow: 10px 10px 5px grey;"><i class="fas fa-user"></i> Form Login</h2>
                <div class="card-body" style="width: 50%">
                <form action="proses-login.php" method="post">
                  <div class="form-group">
                    <label for="">Username</label>
                    <input type="text" class="form-control" id="" name="username">
                    <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                  </div>
                  <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control" id="" name="password">
                  </div>
                  <!-- <div class="form-group form-check">
                    <input type="checkbox" class="form-check-input" id="exampleCheck1">
                    <label class="form-check-label" for="exampleCheck1">Check me out</label>
                  </div> -->
                  <button type="submit" class="btn btn-outline-primary" name="btnlogin">Submit</button>
                </form>
            </div>
        </div>
</center>
</body>
</html>