<?php 
    $connect= mysqli_connect("localhost", "root", "", "covid");
    $id_odp= $_GET['id_odp'];
    $query = mysqli_query($connect, "DELETE FROM odp where id_odp=$id_odp");
    // var_dump($query);

    if($query>0){
        echo "
        <script>
        alert('Data berhasil dihapus, Yeay!');
        document.location.href = 'index.php';
        </script>
        "
        ;
    }
?>