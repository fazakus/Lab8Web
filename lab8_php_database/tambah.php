<?php 
error_reporting(E_ALL); 
include_once 'koneksi.php'; 

if (isset($_POST['submit'])) 
{ 
    $nama = $_POST['nama']; 
    $kategori = $_POST['kategori']; 
    $harga_jual = $_POST['harga_jual']; 
    $harga_beli = $_POST['harga_beli']; 
    $stok = $_POST['stok']; 
    $file_gambar = $_FILES['file_gambar']; 
    $gambar = null; 
    if ($file_gambar['error'] == 0) 
    { 
        $filename = str_replace(' ', '_',$file_gambar['name']); 
        $destination = dirname(__FILE__) .'/gambar/' . $filename; 
        if(move_uploaded_file($file_gambar['tmp_name'], $destination)) 
        { 
            $gambar = 'gambar/' . $filename;; 
        } 
    } 
    $sql = 'INSERT INTO data_barang (nama, kategori,harga_jual, harga_beli, stok, gambar) '; 
    $sql .= "VALUE ('{$nama}', '{$kategori}','{$harga_jual}', '{$harga_beli}', '{$stok}', '{$gambar}')"; 
    $result = mysqli_query($conn, $sql); 
    header('location: index.php'); 
}

?> 
<!DOCTYPE html> 
<html lang="en"> 
    <head> <meta charset="UTF-8"> 
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.3.1/dist/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css" integrity="sha512-KfkfwYDsLkIlwQp6LFnl8zNdLGxu9YAA1QvwINks4PhcElQSvqcyVLLD9aMhXd13uQjoXtEKNosOWaZqXgel0g==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Menambah Data Barang</title> 
    </head>
<body>

<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <div class="text-center">
                <h1>Tambah Data Barang</h1>
                <hr>
            </div>
        </div>
    </div>
    <form method="post" action="" enctype="multipart/form-data">
    <div class="col-sm-12">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Nama Barang</label>
            <div class="col-sm-7">
                <input type="text" name="nama" class="form-control" id="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="kategori" class="col-sm-2 col-form-label">Kategori Barang</label>
            <div class="col-sm-7">
                <select name="kategori" class="form-control form-select">
                    <option value="Komputer">Komputer</option>
                    <option value="Elektronik">Elektronik</option>
                    <option value="Handphone">Handphone</option>
                </select>
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hargabeli" class="col-sm-2 col-form-label">Harga Beli</label>
            <div class="col-sm-7">
                <input type="text" name="harga_beli" id="hargabeli" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="hargajual" class="col-sm-2 col-form-label">Harga Jual</label>
            <div class="col-sm-7">
                <input type="text" name="harga_jual" id="hargajual" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="stok" class="col-sm-2 col-form-label">Stok</label>
            <div class="col-sm-7">
                <input type="text" name="stok" id="stok" class="form-control">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="gambar" class="col-sm-2 col-form-label">Gambar</label>
            <div class="col-sm-7">
                <input type="file" name="picture" class="form-control file-upload-info" placeholder="Upload J">
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-7">
                <button type="submit" name="submit" class="btn btn-primary"><i class="fa fa-save"></i> Simpan</button>
            </div>
        </div>
    </div>
    </form>
</div>
</body>
</html>