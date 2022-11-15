<?php
//buat koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "companyprofile");

//baca data dari tabel iot_tb
$sql = mysqli_query($koneksi, "select * from iot_tb order by id desc");

$data = mysqli_fetch_array($sql);
$tegangan_in = $data['tegangan_in'];

//apabila teganga belum ada, maka anggap tegangan = 0
if( $tegangan_in == "") $tegangan_in = 0;

//cetak nilai tegangan 
echo $tegangan_in;
?>
