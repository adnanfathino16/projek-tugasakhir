<?php

//koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "companyprofile");

//baca data dari tabel iot_tb
$sql = mysqli_query($koneksi, "select * from iot_tb order by id desc");

$data = mysqli_fetch_array($sql);
$tegangan = $data['tegangan'];
$nilai = ($tegangan/12*100);

//apabila teganga belum ada, maka anggap tegangan = 0
if( $nilai== "") $nilai = 0;

//cetak nilai tegangan 
echo (round($nilai,0));

?>