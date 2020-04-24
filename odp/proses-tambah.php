<?php  
include '../koneksi.php';
session_start();
if(isset($_POST['simpan'])){
	$nama 		= $_POST['nama'];
	$alamat 	= $_POST['alamat'];
	$tgl_cek 	= $_POST['tgl_cek'];
	$ket 	 	= $_POST['ket'];
	$suhu 	 	= $_POST['id_suhu'];
	$petugas 	= $_SESSION['id_petugas'];

	$sql = "INSERT INTO odp(nama, alamat, tgl_cek, ket, id_suhu, id_petugas) VALUES ('$nama', '$alamat', '$tgl_cek', '$ket', '$suhu', '$petugas')";

	$res = mysqli_query($connect, $sql);
	$count = mysqli_affected_rows($connect);

	if($count>0){
		echo "
			<script>
			alert('Data Berhasil Di tambah !!!');
			document.location.href='index.php';
			</script>
		";
	}
}
?>