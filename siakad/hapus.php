<?php
include ('koneksi.php');
$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM matakuliah WHERE id='$id'");
if ($hapus == true){
    echo"BERHASIL TERHAPUS";
    header("location: matakuliah.php");
    } else {
        echo "GAGAL HAPUS" ; 
    }
?>