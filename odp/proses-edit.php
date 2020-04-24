<?php  
include '../koneksi.php';

if(isset($_POST['simpan'])){
    $id_odp     = $_POST['id_odp'];
    $nama       = $_POST['nama'];
    $alamat     = $_POST['alamat'];
    $tgl_cek     = $_POST['tgl_cek'];
    $ket        = $_POST['ket'];
    $suhu       = $_POST['id_suhu'];

    $sql = "UPDATE odp SET nama='$nama', alamat='$alamat', tgl_cek='$tgl_cek', ket='$ket', id_suhu='$suhu' WHERE id_odp=$id_odp";

    $res = mysqli_query($connect, $sql);
    $count = mysqli_affected_rows($connect);
    // var_dump($count);
    if($res==1){
        echo "
            <script>
            alert('Data Berhasil Di Edit !!!');
            document.location.href='index.php';
            </script>
        ";
    }
  }
?>