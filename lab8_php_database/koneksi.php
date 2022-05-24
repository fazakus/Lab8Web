<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Koneksi</title>
</head>
<body>
<?php 
$host = "localhost"; 
$user = "root"; 
$pass = ""; 
$db = "latihan1"; 

$conn = mysqli_connect($host, $user, $pass, $db); 
if ($conn == false) 
{ 
    echo "Koneksi ke server gagal."; 
    die(); 
} 
else 
{ 
    echo "Koneksi berhasil"; 
}
?>
</body>
</html>