<?php

$server = "localhost";
$user = "root";
$password = "";
$database = "siakad";


$koneksi = mysqli_connect ($server,$user,$password,$database);

if ($koneksi == true){
   //echo "BERHASIL TERHUBUNG";
} else "GAGAL TERHUBUNG";


?>