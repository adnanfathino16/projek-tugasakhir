<?php
//koneksi ke database
$koneksi = mysqli_connect("localhost", "root", "", "companyprofile");

//baca data yang dikirim data esp32

$tegangan_in = $_GET['tegangan_in'];
$tegangan = $_GET['tegangan'];
$arus = $_GET['arus'];


 



//simpan ke tabel iot_tb

//auto increment = 1
mysqli_query($koneksi, "ALTER TABLE iot_tb AUTO_INCREMENT=1");
//simpan data sensor ke tabel iot_tb
$simpan = mysqli_query($koneksi, "insert into iot_tb (tegangan_in, tegangan, arus)values('$tegangan_in', '$tegangan', '$arus')");

//uji simpan untuk memberikan respon
if($simpan)
    echo "Berhasil dikirim";
else
    echo "Gagal Terkirim";



?>