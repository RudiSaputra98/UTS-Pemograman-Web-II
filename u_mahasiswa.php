<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nim = $_POST['nim'];
    $program_studi = $_POST['program_studi'];

    $query = "UPDATE mahasiswa SET nama='$nama', nim='$nim', program_studi='$program_studi' WHERE id='$id'";
    $submit = mysqli_query($koneksi, $query);

    if ($submit) {
        echo "Data berhasil diperbarui";
        header("location: data_mahasiswa.php");
        exit;
    } else {
        echo "Gagal memperbarui data";
    }
}

$id = $_GET['id'] ?? ''; 
$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa WHERE id='$id'");
$baris = mysqli_fetch_array($mahasiswa);
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
            <label class="form-label"> Nama Mahasiswa</label>
            <input class="form-control" class="form-label" value="<?php echo $baris['nama']; ?>" type="text" name="nama" placeholder="Isi dengan Nama Mahasiswa" required>
            <input name="id" value="<?php echo $id; ?>" hidden>
        </div>
        <div class="mb-3">
            <label class="form-label"> NIM</label>
            <input class="form-control" value="<?php echo $baris['nim']; ?>" type="text" name="nim" placeholder="Isi dengan NIM" maxlength="10" required>
        </div>

        <div class="mb-3">
            <label class="form-label"> program_studi</label>
            <input class="form-control" class="form-label" value="<?php echo $baris['program_studi']; ?>" type="text" name="program_studi" placeholder="Isi dengan Nama Program Studi" required>
            
        </div>

        <button class="btn btn-primary" type="submit">UPDATE DATA</button>
    </form>
</div>
</body>
</html>