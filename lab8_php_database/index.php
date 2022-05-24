<?php 
include("koneksi.php"); 

// query untuk menampilkan data 
$sql = 'SELECT * FROM data_barang'; 
$result = mysqli_query($conn, $sql); 
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
    <title>Index</title>
</head>
<body>
    <div class="container"> 
        <div class="row">
            <div class="col-sm12">
                <div class="text-center">
                    <h1>Data Barang</h1>
                    <hr>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">            
                <a href="tambah.php" style="text-decoration: none;"><button class="btn btn-primary"><i class="fa fa-plus"></i> Tambah</button></a> <br><br>
                    <table class="table table-striped table-bordered">
                        <thead class="text-center">
                            <th>Gambar</th> 
                            <th>Nama Barang</th> 
                            <th>Katagori</th> 
                            <th>Harga Jual</th> 
                            <th>Harga Beli</th> 
                            <th>Stok</th> 
                            <th>Aksi</th> 
                        </thread>
                        <tbody> 
                        <?php
                            if($result):
                                while($row = mysqli_fetch_array($result)):
                        ?>
                        <tr>
                            <td><img src="gambar/<?= $row['gambar']; ?>" class="rounded mx-auto d-block"></td>
                            <td><?= $row['nama']; ?></td>
                            <td><?= $row['kategori']; ?></td>
                            <td class="text-center"><?= $row['harga_beli']; ?></td>
                            <td class="text-center"><?= $row['harga_jual']; ?></td>
                            <td class="text-center"><?= $row['stok']; ?></td>
                            <td>
                                <a href="ubah.php?id=<?= $row['id_barang'];?>">Ubah</a>
                                <a href="hapus.php?id=<?= $row['id_barang'];?>">Hapus</a>
                            </td>
                        </tr>
                            <?php endwhile; else: ?>
                            <tr>
                                <td colspan="7">Tidak ada data</td>
                            </tr>
                            <?php endif; ?>
                        </tbody>
                    </table>
            </div>
        </div>
    </div>
</body>
</html>