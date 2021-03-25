<?php
require_once "mySql.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$email = $_POST['email'];
$pesan = $_POST['pesan'];
echo $id."-".$nama."-".$email."-".$pesan;
// proses sql
$sql = "UPDATE pb_tamu SET nama_tamu='$nama', email_tamu='$email', pesan_tamu='$pesan' WHERE id_tamu=$id";

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