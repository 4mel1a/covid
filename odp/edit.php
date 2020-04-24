<?php  
include '../koneksi.php';
include '../asset/header.php';

$id_odp = $_GET['id_odp'];
$sql = mysqli_query($connect, "SELECT * FROM odp WHERE id_odp=$id_odp");
$query = mysqli_query($connect, "SELECT * FROM suhu");

?>

<!DOCTYPE html>
<html>
<head>
	<title>Edit</title>
	<style type="text/css">
		.row-custom {
	      	display: flex;
	      	justify-content: center;
	      	flex-wrap: wrap;
	      }
	      body {
	      	background-image: url(../img/9.gif);
	      	background-size: contain;
	      	background-position: center;
	      }
	</style>
</head>
<body>
	<div class="container">
		<div class="row">
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
						<h2><i class="fas fa-edit"></i> Edit Data</h2>
					</div>
					<div class="card-body bg-dark">
						<form method="post" action="proses-edit.php">
							<?php  
								while ($odp = mysqli_fetch_assoc($sql)):
							?>
							<div class="form-group">
								<input type="hidden" name="id_odp" value="<?php echo $odp['id_odp'];?>">
								<label for="nama">Nama Pasien</label>
								<input type="text" class="form-control" name="nama" id="nama" value="<?php echo $odp['nama'];?>" required>
							</div>						
							<div class="form-group">
								<label for="alamat">Alamat</label>
								<input type="text" class="form-control" name="alamat" id="alamat" value="<?php echo $odp['alamat'];?>" required>
							</div>
							<div class="form-group">
							<label for="datepicter">Tanggal Cek</label>
							<input type="date" name="tgl_cek" class="form-control" value="<?php echo $odp['tgl_cek'];?>">
						</div>
							<div class="form-group">
								<label for="ket">Keterangan</label>
								<textarea class="form-control" name="ket">
									<?php echo $odp['ket'];?>		
								</textarea>
							</div>
							<?php  
							endwhile;
							?>
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