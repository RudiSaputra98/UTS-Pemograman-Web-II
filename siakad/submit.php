<?php

include('koneksi.php');

$nama = $_POST['nama'];
$kode_matakuliah = $_POST['kode_matakuliah'];
$deskripsi = $_POST['deskripsi'];

echo $nama ;
echo $kode_matakuliah ;
echo $deskripsi;


$submit = mysqli_query($koneksi,"INSERT INTO matakuliah (nama,kode_matakuliah,deskripsi) VALUES ('$nama','$kode_matakuliah','$deskripsi')" );

if($submit == true){
    echo "berhasil tersempan";
    header("location: matakuliah.php");
} else "gagal";

?>