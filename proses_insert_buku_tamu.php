<?php
require_once "mySql.php";


$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
// proses sql
$sql = "INSERT INTO pb_tamu VALUES ('', '$nama','$email', '$pesan')";

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