<?php
    include('koneksi.php');
    $id = $_GET['id'];
    $matakuliah = mysqli_query($koneksi, "SELECT * FROM matakuliah WHERE id='$id'");
    $baris = mysqli_fetch_array($matakuliah);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD</title>
</head>
<body>
    <h1> EDIT DATA</h1>
    <P> Silahkan Edit Data Dibawah ini</P>
    <form method="POST" action="update.php">
        <label> Nama Mata Kuliah</label>
        <input value="<?php echo $baris['nama'] ; ?>" type="text" name="nama" placeholder="Isi dengan Nama Mata Kuliah" required> 
        <input name="id" value="<?php echo $id; ?>" hidden>
        <br><br>

        <label> Kode Mata Kuliah</label>
        <input value="<?php echo $baris['kode_matakuliah'] ; ?>" type="number" name="kode_matakuliah" placeholder="Isi dengan Kode Mata Kuliah" required> <br><br>

        <label> Deskripsi</label>
        <input value="<?php echo $baris['deskripsi'] ; ?>" type="text" name="deskripsi" placeholder="Masukan Deskripsi Mata Kuliah" required> <br><br>

        <button type="submit" >Simpan</button>
    </form>
</body>
</html>