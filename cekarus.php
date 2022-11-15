<?php
//buat koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "companyprofile");

//baca data dari tabel iot_tb
$sql = mysqli_query($koneksi, "select * from iot_tb order by id desc");

$data = mysqli_fetch_array($sql);
$arus = $data['arus'];

//apabila teganga belum ada, maka anggap tegangan = 0
if( $arus == "") $arus = 0;

//cetak nilai tegangan 
echo $arus;
?>
