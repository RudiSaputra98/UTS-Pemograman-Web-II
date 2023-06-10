<?php
include ('koneksi.php');
$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM mahasiswa WHERE id='$id'");
if ($hapus == true){
    echo"BERHASIL TERHAPUS";
    header("location: data_mahasiswa.php");
    } else {
        echo "GAGAL HAPUS" ; 
    }
?>