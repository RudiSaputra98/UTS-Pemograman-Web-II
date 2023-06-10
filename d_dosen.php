<?php
include ('koneksi.php');
$id = $_GET['id'];

$hapus = mysqli_query($koneksi, "DELETE FROM dosen WHERE id='$id'");
if ($hapus == true){
    echo"BERHASIL TERHAPUS";
    header("location: data_dosen.php");
    } else {
        echo "GAGAL HAPUS" ; 
    }
?>