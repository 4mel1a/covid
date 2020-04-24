<?php 
// include 'koneksi.php';
include 'asset/header.php';
?>

<!DOCTYPE html>
<html>
<head>
	<title>About</title>
	<style>
		section {
			min-height: 420px;
		}
		.jumbotron {
	        height: 600px;
	        background-image: url("smk.jpg");
	        background-attachment: fixed;
	        background-size: cover;
	        background-position: 0 -30px;
	      }
		.jumbotron h1,
	    .jumbotron p {
	        text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
	    }
	    .jumbotron img {
	    	box-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
	    }
	    
	</style>
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
	  	<div class="container text-center">
	  		<img src="profil.JPG" width="25%" class="rounded-circle img-thumbnail">
	    	<h1 class="display-4">Amelia Azizah</h1>
	    	<p class="lead">Siswa | X RPL 7 | SMK Telkom Malang</p>
	  	</div>
	</div>

	<section id="about" class="about">
	<div class="container text-center">
		<div class="row mb-4 bg-secondary">
			<div class="col">
				<h2>About Me</h2>
			</div>
		</div>
		<div class="row justify-content-center bg-light">
			<div class="col-md-5 mb-4">
				<p>Nama saya Amelia Siti Nur Azizah.
				Saya dari Kelas X RPL 7.
				Saya membuat website ini untuk mengetahui suhu para pasien setiap harinya.</p>
				<a href="http://localhost/covid/login/index.php" class="btn btn-outline-dark my-2 my-sm-0">Yuk Login !</a> 
			</div>
		</div>
		<img src="img/1.gif" style="width: 50%">
	</div>
	</section>
</body>
</html>

<?php  
include 'asset/footer.php';
?>