<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SIAKAD</title>
</head>
<body>
    <h1> DATA MATAKULIAH</h1>
    <P> Silahkan Isi Data Dibawah ini</P>
    <form method="POST" action="submit.php">
        <label> Nama Mata Kuliah</label>
        <input type="text" name="nama" placeholder="Isi dengan Nama Mata Kuliah" required> <br><br>

        <label> Kode Mata Kuliah</label>
        <input type="number" name="kode_matakuliah" placeholder="Isi dengan Kode Mata Kuliah" required> <br><br>

        <label> Deskripsi</label>
        <input type="text" name="deskripsi" placeholder="Masukan Deskripsi Mata Kuliah" required> <br><br>

        <button type="submit" >Submit</button>
    </form>
</body>
</html>