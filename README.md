# Lab8Web
## PHP dan Database MySQl

<hr>
Nama : Faza Ardan Kusuma<br>
NIM : 312010001<br>
Kelas : TI 20 B1<br>
<hr>

Disini saya mendapatkan tugas untuk memahami dan membuat program CRUD menggunakan PHP. Saya akan mengerjakan semua latihan lalu akan saya jelaskan pada setiap langkahnya.<br>
![Tugas](Pic/tugas.png)<br>

## Menjalankan Server
Untuk menjalankan server MySQL server, buka aplikasi XAMPP lalu start Apache dan MySQL. <br>
![XAMPP](Pic/server.png).<br>
Kemudian buka melalui browser dengan link berikut http://localhost/phpmyadmin/.<br>

## Membuat Database
Disini saya akan membuat database dengan nama latihan1.<br>
![Create Database](Pic/create_database.png)<br>

Kemudian saya membuat tabel dengan cara masuk ke database latihan1 dan ke sub menu SQL.<br>
![Create Table](Pic/create_table.png)<br>
Lalu masukan syntax berikut :
```
CREATE TABLE data_barang ( 
    id_barang int(10) auto_increment Primary Key, 
    kategori varchar(30), 
    nama varchar(30), 
    gambar varchar(100), 
    harga_beli decimal(10,0), 
    harga_jual decimal(10,0), 
    stok int(4) 
);    
```
Bila berhasil akan seperti ini tampilannya :<br>
![Create Table 2](Pic/create_table2.png)<br>

## Menambahkan Data
Setelah selesai membuat tabel, saya akan menambahkan data. Masih dengan cara yang tadi ke Sub Menu SQL, lalu masukan syntax berikut :<br>
```
INSERT INTO data_barang (kategori, nama, gambar, harga_beli, harga_jual, stok) 
VALUES ('Elektronik', 'HP Samsung Android', 'hp_samsung.jpg', 2000000, 2400000, 5), 
('Elektronik', 'HP Xiaomi Android', 'hp_xiaomi.jpg', 1000000, 1400000, 5), 
('Elektronik', 'HP OPPO Android', 'hp_oppo.jpg', 1800000, 2300000, 5);
```
![Add Data](Pic/input_data1.png)<br>
Bila Sukses maka seperti berikut :<br>
![Add Data 2](Pic/input_data2.png)<br>

