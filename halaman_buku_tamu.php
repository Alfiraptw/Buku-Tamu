<?php
require_once "mySql.php";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Buku Tamu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.24/css/jquery.dataTables.min.css">
</head>

<body>
    <div class="container mt-2">
        <div class="card">
            <div class="card-header">
                <h3> Form Input Buku Tamu</h3>
            </div>
            <div class="card-body">
                <form action="proses_insert_buku_tamu.php" method="POST">
                    <div class="form-group">
                        <input type="text" name="nama" class="form-control" placeholder="Masukan nama anda" required />
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Nama email@gmail.com" required />
                    </div>
                    <div class="form-group">
                        <textarea name="pesan" class="form-control" placeholder="Masukan pesan dan kesan anda"></textarea>
                    </div>
                    <div class="form-group">
                        <input vlass=" btn btn-primary btn-block" type="submit" value="kirim" />
                    </div>
                </form>
                <table class="table table-bordered" id="myTable">
                    <thead>
                        <tr align="center">
                            <th>No</th>
                            <th>Id</th>
                            <th>Nama</th>
                            <th>Email</th>
                            <th>Pesan/Komentar</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $sql = "SELECT * FROM pb_tamu ORDER BY id_tamu ASC";
                        $result =  $conn->query($sql);
                        if ($result->num_rows > 0) {
                            $no = 1;
                            while ($row = $result->fetch_assoc()) { ?>
                                <tr>
                                    <td><?= $no; ?></td>
                                    <td><?= $row['id_tamu']; ?></td>
                                    <td><?= $row['nama_tamu']; ?></td>
                                    <td><?= $row['email_tamu']; ?></td>
                                    <td><?= $row['pesan_tamu']; ?></td>
                                    <td align="center">
                                        <div class="btn-group">
                                            <a href="proses_delete_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Yakin mau hapus ?')">
                                                <i class="fas fa-trash"></i>
                                            </a>
                                            <a href="halaman_edit_buku_tamu.php?idTamu=<?= $row['id_tamu']; ?>" class="btn btn-primary btn-sm">
                                                <i class="fas fa-edit"></i>
                                            </a>
                                    </td>
                                </tr>
                        <?php
                                $no++;
                            }
                        }
                        ?>
                    </tbody>

                </table>
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
                <script src="https://cdn.datatables.net/1.10.24/js/jquery.dataTables.min.js"></script>
                <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>

                <script>
                    $(document).ready(function() {
                        $('#myTable').DataTable({
                            pageLength: 5,
                        });
                    });
                </script>
</body>

</html>