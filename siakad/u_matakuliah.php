<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kode_matakuliah = $_POST['kode_matakuliah'];
    $deskripsi = $_POST['deskripsi'];

    $query = "UPDATE matakuliah SET nama='$nama', kode_matakuliah='$kode_matakuliah', deskripsi='$deskripsi' WHERE id='$id'";
    $submit = mysqli_query($koneksi, $query);

    if ($submit) {
        echo "Data berhasil diperbarui";
        header("location: data_matakuliah.php");
        exit;
    } else {
        echo "Gagal memperbarui data";
    }
}

$id = $_GET['id'] ?? ''; 
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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php include('navbar.php'); ?>
<div class="container col-md-5 mt-4">
    <h1> UPDATE DATA</h1>
    <P> Silahkan UPDATE Data Dibawah ini</P>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <div class="mb-3">
            <label class="form-label"> Nama Mata Kuliah</label>
            <input class="form-control" class="form-label" value="<?php echo $baris['nama']; ?>" type="text" name="nama" placeholder="Isi dengan Nama Mata Kuliah" required>
            <input name="id" value="<?php echo $id; ?>" hidden>
        </div>
        <div class="mb-3">
            <label class="form-label"> Kode Mata Kuliah</label>
            <input class="form-control" value="<?php echo $baris['kode_matakuliah']; ?>" type="text" name="kode_matakuliah" placeholder="Isi dengan Kode Mata Kuliah" maxlength="5" required>
        </div>

        <div class="mb-3">
            <label class="form-label"> Deskripsi</label>
            <textarea class="form-control" name="deskripsi" placeholder="Masukan Deskripsi Mata Kuliah" required><?php echo $baris['deskripsi']; ?></textarea>
        </div>

        <button class="btn btn-primary" type="submit">UPDATE DATA</button>
    </form>
</div>
</body>
</html>