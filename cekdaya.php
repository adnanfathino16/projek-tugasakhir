<?php
//buat koneksi database
$koneksi = mysqli_connect("localhost", "root", "", "companyprofile");

//baca data dari tabel iot_tb
$sql = mysqli_query($koneksi, "select * from iot_tb order by id desc");

$data = mysqli_fetch_array($sql);
$tegangan = $data['tegangan'];
$arus = $data['arus']/1000;
$daya = $tegangan*$arus;

//apabila teganga belum ada, maka anggap tegangan = 0
if( $daya == "") $daya = 0;

//cetak nilai tegangan 
echo (round($daya,0));
?>
