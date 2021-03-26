<?php
    require_once "mySql.php";

    $id = $_GET['idTamu'];
    $sql = "SELECT * FROM pb_tamu WHERE id_tamu='$id'";
    $result = $conn->query($sql);
    while($row = $result->fetch_assoc()){
        $nama = $row['nama_tamu'];
        $email = $row['email_tamu'];
        $pesan = $row['pesan_tamu'];
    }
?>
<!DOCTYPE html>
<html lang="en">  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
</head>
<body>
    <div class="container mt-2">
        <div class="card">
            <div class= "card-header">
                <h3> Form Edit Buku Tamu</h3>    
    </div>
    <div class="card-body">
        <form action="proses_insert_buku_tamu.php" method="POST">
            <div class="form-group">
                <input type="text" name="id" class="form-control" readonly value="<?=$_GET['idTamu'];?>" required/>
            </div>
            <div class="form-group">
                <input type="text" name="nama" class="form-control" value="<?=$nama?>" placeholder="Masukan nama anda" required/>
            </div>
             <div class="form-group">
                 <input type="email" name="email" class="form-control" value="<?=$email?>" placeholder="Nama email@gmail.com" required/>
            </div>
            <div class="form-group">
                <textarea name="pesan" class="form-control" placeholder="Masukan pesan dan kesan anda"><?=$pesan?></textarea>	   
            </div>
            <div class="form-group">
                <input vlass=" btn btn-primary btn-block" type="submit" value="Update"/>
            </div>
            <div class="card-footer">
                <a href="halaman_buku_tamu.php">
                    <i class="fas fa-arrow-left"></i>
                    Kembali
                </a>
            </div>
        </form>
    </div>
</body>
</html>
