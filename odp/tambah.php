<?php  
include '../koneksi.php';
include '../asset/header.php';
$query = mysqli_query($connect, "SELECT * FROM suhu");
?>

<!DOCTYPE html>
<html>
<head>
	<title>Tambah Data</title>
	<style type="text/css">
		.row-custom {
	      	display: flex;
	      	justify-content: center;
	      	flex-wrap: wrap;
	      }
	      body {
	      	background-image: url("../img/2.gif");
	      	background-size: contain;
	      }
	</style>
</head>
<body>
	<div class="container">
		<div class="row mt-5">
			<div class="col row-custom mt-5">
				<div class="card text-white bg-danger mb-3" style="max-width: 20rem;">
				  <div class="card-body">
				  	<img src="suhu.png" width="50%">
				    <h5 class="card-title">Keterangan Suhu</h5>
				    <p class="card-text">
				    	<li>35-37^C -> Normal</li>
				    	<li>38^C -> Demam</li>
				    	<li>39-40^C -> Demam Tinggi</li>
				    	<li>>40^C -> Demam Sangat Tinggi</li>
				    </p>
				  </div>
				</div>
			</div>
	
			<div class="col mt-5">
				<div class="card text-white bg-secondary mb-3">
					<div class="card-header">
						<h2><i class="fas fa-user-plus"></i> Tambah Data Pasien</h2>
					</div>
					<div class="card-body bg-dark">
						<form method="post" action="proses-tambah.php">
						<div class="form-group">
							<label for="nama">Nama Pasien</label>
							<input type="text" class="form-control" name="nama" id="nama" placeholder="Masukkan Nama Lengkap">
						</div>						
						<div class="form-group">
							<label for="alamat">Alamat</label>
							<input type="text" class="form-control" name="alamat" id="alamat" placeholder="Masukkan Alamat">
						</div>
						<div class="form-group">
							<label for="datepicter">Tanggal Cek</label>
							<input type="date" name="tgl_cek" class="form-control">
						</div>
						<div class="form-group">
							<label for="ket">Keterangan</label>
							<textarea class="form-control" name="ket">
											
							</textarea>
						</div>
						<div class="form-group">
							<label for="suhu">Suhu</label>
							<select style="width: 200px" name="id_suhu" class="form-control">
								<option value="">-- Pilih Suhu --</option>
								<?php  
									while ($suhu = mysqli_fetch_assoc($query)):
								?>
								<option value="<?php echo $suhu['id_suhu']; ?>"><?php echo $suhu['suhu']; ?></option>
								<?php  
									endwhile;
								?>
							</select>
						</div>
						<tr>
							<td class="text-rigth" colspan="2">
								<a href="index.php" class="btn btn-outline-success my-2 my-sm-0"><i class="fas fa-angle-double-left"></i>Kembali</a>
							</td>
						</tr>
							<button type="submit" class="btn btn-outline-primary my-2 my-sm-0" name="simpan"> Simpan </button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
</body>
</html>

<?php  
include '../asset/footer.php';
?>
