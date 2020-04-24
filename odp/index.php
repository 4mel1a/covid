<?php  
include '../koneksi.php';
include '../asset/header.php';

$sql = "SELECT * FROM odp o INNER JOIN suhu s ON o.id_suhu=s.id_suhu INNER JOIN petugas p ON o.id_petugas=p.id_petugas";

$res = mysqli_query($connect, $sql);

$odp = array();

while ($data = mysqli_fetch_assoc($res)) {
	$odp[] = $data;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>ODP</title>
	<style type="text/css">
		.jumbotron {
	        height: 400px;
	        background-image: url("back.png");
	        background-attachment: fixed;
	        background-size: cover;
	        background-position: 0 -30px;
	      }
	      .jumbotron h1,
	      .jumbotron p {
	        text-shadow: 1px 1px 10px rgba(0, 0, 0, 0.5);
	      }
	</style>
</head>
<body>
	<div class="jumbotron jumbotron-fluid">
	  <div class="container">
	    <h1 class="display-4">Data Pasien ODP</h1>
	    <p class="lead">Ingat ! Stay Safe and Stay At Home</p>
	    <a href="http://localhost/covid/odp/tambah.php" type="button" class="btn btn-outline-dark my-2 my-sm-0"> Tambah Data </a>
	  </div>
	</div>

	<section id="table-tambah" class="table-tambah">
	<div class="container">
		<div class="row mb-5">
			<div class="col">
				<table class="table table-hover table-dark">
				  <thead>
				    <tr>
				      <th scope="col">No</th>
				      <th scope="col">Nama Pasien</th>
				      <th scope="col">Alamat</th>
				      <th scope="col">Tanggal Cek</th>
				      <th scope="col">Keterangan</th>
				      <th scope="col">Suhu</th>
				      <th scope="col">Petugas</th>
				      <th scope="col">Aksi</th>
				    </tr>
				  </thead>
				  <?php  
				  	$no = 1;
				  	foreach ($odp as $o) {?>
				  	<tr>
				      <th scope="row"><?=$no?></th>
				      <td><?=$o['nama']?></td>
				      <td><?=$o['alamat']?></td>
				      <td><?=date('d F Y', strtotime($o['tgl_cek']))?></td>
				      <td><?=$o['ket']?></td>
				      <td><?=$o['suhu']?></td>
				      <td><?=$o['nama_petugas']?></td>
				      <td>
				      	<a href="detail.php?id_odp=<?= $o['id_odp'];?>" class="badge badge-success">Detail</a>
						<a href="edit.php?id_odp=<?= $o['id_odp'];?>" class="badge badge-warning">Edit</a>
						<a href="hapus.php?id_odp=<?= $o['id_odp'];?>" class="badge badge-danger">Hapus</a>
				      </td>
				    </tr>
				    <?php
				    	$no++;
				  	}
				  ?>
				  <!-- </tbody> -->
				</table>
			</div>
		</div>
	</div>
	</section>
</body>
</html>

<?php  
include '../asset/footer.php';
?>