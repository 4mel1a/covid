<?php
// session_start();
// if(!isset($_SESSION["id_petugas"])){
//   header("Location:http://localhost/siperpus/login/index.php");
// }
?>
<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" href="http://localhost/covid/asset/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" href="http://localhost/covid/asset/fontawesome/css/all.min.css">
	<title>Covid</title>
  <style type="text/css">
  .img-box {
    height: 50px;
    /* height sesuai tinggi navbar, atau dikurangi sedikit */
    margin: auto;
  }

  .img-box img {
    height: 90%;
  }

  .navbar-brand{
    display: flex;
    align-items: center;
  }
  </style>
</head>
<body class="mt-5">
	<nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark">
  <div class="container">  
  <a class="navbar-brand" href="#"><div class="img-box"><img src="http://localhost/covid/asset/logo1.png" alt="logo"></div> KARANTINA COVID-19</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse nav justify-content-end" id="navbarNavAltMarkup">
    <div class="navbar-nav">
      <a class="nav-item nav-link" href="http://localhost/covid/about.php">About</a>
      <a class="nav-item nav-link" href="http://localhost/covid/index.php">Home</a>
      <a class="nav-item nav-link" href="http://localhost/covid/odp/index.php">ODP</a>
      <a class="nav-item nav-link" href="http://localhost/covid/login/logout.php">Logout</a>
    </div>
      <a href="http://localhost/covid/login/index.php" class="btn btn-outline-primary my-2 my-sm-0">Login</a> 
  </div>
  </div>
</nav>
</body>
</html>