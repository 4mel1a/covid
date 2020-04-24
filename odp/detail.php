<?php  
include '../koneksi.php';
include '../asset/header.php';

$id_odp = $_GET['id_odp'];

$sql = mysqli_query($connect, "SELECT * FROM odp o INNER JOIN suhu s ON o.id_suhu=s.id_suhu INNER JOIN petugas p ON o.id_petugas=p.id_petugas WHERE id_odp=$id_odp");
$detail = mysqli_fetch_assoc($sql);
?>

<!DOCTYPE html>
<html>
<head>
	<title>Detail</title>
	<style type="text/css">
		body {
			background-image: url("../img/3.gif");
		}
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col mt-5">
				<div class="card text-white bg-dark mb-3">
					<div class="card-header">
						<h2><i class="fas fa-info-circle"></i> Detail Data</h2>
					</div>
					<div class="card-body bg-secondary">
						<table class="table table-dark">
							<tr>
								<td><strong>Nama Pasien</strong></td>
								<td><?=$detail['nama'];?></td>
							</tr>
							<tr>
								<td><strong>Alamat</strong></td>
								<td><?=$detail['alamat']?></td>
							</tr>
							<tr>
								<td><strong>Tanggal Cek</strong></td>
								<td><?=$detail['tgl_cek']?></td>
							</tr>
							<tr>
								<td><strong>Keterangan</strong></td>
								<td><?=$detail['ket']?></td>
							</tr>
							<tr>
								<td><strong>Suhu</strong></td>
								<td><?=$detail['suhu']?></td>
							</tr>
							<tr>
								<td><strong>Petugas</strong></td>
								<td><?=$detail['nama_petugas']?></td>
							</tr>
							<tr>
								<td class="text-rigth" colspan="2">
									<a href="index.php" class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-angle-double-left"></i>Kembali</a>
								</td>
							</tr>
						</table>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>