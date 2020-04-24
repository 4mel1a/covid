<?php  
include 'koneksi.php';
include 'asset/header.php';
session_start();
if(!isset($_SESSION["id_petugas"])){
  header("Location:http://localhost/covid/login/index.php");
  die();
}
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Home</title>
    <style>
      section {
        min-height: 420px;
      }
      .jumbotron {
        height: 600px;
        background-image: url("1.jpg");
        background-attachment: fixed;
        background-size: cover;
        background-position: 0 -30px;
        margin-bottom: 0 !important;
      }
      .jumbotron h1,
      .jumbotron p {
        text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
      }
      .about {
        background-image: url("img/back-covid.png");
        background-repeat: no-repeat center;
        background-size: cover;
        padding-bottom: 0;
      }
      .c-img-box {
        position: relative;
        width: 100%;
        min-height: 200px;
        overflow: hidden;
      }
      .c-img-box img {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        height: 100%;
      }
      .card {
        margin-bottom: 30px;
      }
      .row-custom {
        display: flex;
        justify-content: center;
        flex-wrap: wrap;
      }
      .gejala {
        background-color: #d1ccc0;
        background-size: cover;
      }
    </style>
  </head>
  <body>
    <div class="jumbotron jumbotron-fluid">
      <div class="container text-center">
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <h1 class="display-4">Hai Semua !!</h1>
        <p class="lead">Selamat Datang di Aplikasi Karantina Covid-19.</p>
      </div>
    </div>

    <section id="about" class="about">
      <div class="container text-center">
        <div class="row pt-4 mb-4">
          <div class="col">
            <h2>About ODP</h2>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-md-5">
            <p>
              ODP adalah mereka yang memiliki gejala panas badan atau gangguan
              saluran pernapasan ringan, dan pernah mengunjungi atau tinggal di
              daerah yang diketahui merupakan daerah penularan virus tersebut.
              Selain itu, bisa juga orang sehat yang pernah kontak erat dengan
              kasus terkonfirmasi Covid-19.
            </p>
            <a
              href="http://localhost/covid/odp/index.php"
              class="btn btn-outline-primary my-2 my-sm-5"
            >
              Cek Data !</a
            >
          </div>
        </div>
      </div>
    </section>

    <section id="gejala" class="gejala pb-4">
      <div class="container">
        <div class="row mb-4 pt-4">
          <div class="col text-center">
            <h2>Gejala Klinis</h2>
          </div>
        </div>

        <div class="row">
          <div class="col-md-4">
            <div class="card">
              <div class="c-img-box">
                <img src="img/demam.png" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <p class="card-title text-center">Demam</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="c-img-box">
                <img src="img/batuk.png" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <p class="card-title text-center">Batuk</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="c-img-box">
                <img src="img/flu.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <p class="card-title text-center">Flu</p>
              </div>
            </div>
          </div>
        </div>

        <div class="row mb-5 row-custom">
          <div class="col-md-4">
            <div class="card">
              <div class="c-img-box">
                <img src="img/sakit.jpg" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <p class="card-title text-center">Sakit Tenggorokan</p>
              </div>
            </div>
          </div>

          <div class="col-md-4">
            <div class="card">
              <div class="c-img-box">
                <img src="img/letih.png" class="card-img-top" alt="..." />
              </div>
              <div class="card-body">
                <p class="card-title text-center">Letih / Lelah</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </body>
</html>

<?php  
include 'asset/footer.php';
?>
