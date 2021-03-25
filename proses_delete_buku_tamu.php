<?php
require_once "mySql.php";


$id = $_GET['idTamu'];
// proses sql
$sql = "DELETE FROM pb_tamu WHERE id_tamu='$id'";

// eksekusi perintah
if($conn->query($sql) === true){
    echo "<script>
    alert('Berhasil tersimpan');
    location.assign('halaman_buku_tamu.php');

    </script>";
}else{
    echo "<script>
    alert('Gagal tersimpan');
    location.assign('halaman_buku_tamu.php');

    </script>";
}

?>