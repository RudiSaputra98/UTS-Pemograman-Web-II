<?php

include('koneksi.php');

$id = $_POST['id'];
$nama = $_POST['nama'];
$kode_matakuliah = $_POST['kode_matakuliah'];
$deskripsi = $_POST['deskripsi'];

echo $nama ;
echo $kode_matakuliah ;
echo $deskripsi;


$update = mysqli_query($koneksi,"UPDATE matakuliah SET nama='$nama', kode_matakuliah='$kode_matakuliah', deskripsi='$deskripsi' WHERE id='$id' ");

if($update == true){
    echo "berhasil tersempan";
    header("location: matakuliah.php");
} else "gagal";

?>