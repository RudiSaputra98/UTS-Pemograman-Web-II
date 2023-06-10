<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $nidn = $_POST['nidn'];
    $jenjang_pendidikan = $_POST['jenjang_pendidikan'];

    $query = "UPDATE dosen SET nama='$nama', nidn='$nidn', jenjang_pendidikan='$jenjang_pendidikan' WHERE id='$id'";
    $submit = mysqli_query($koneksi, $query);

    if ($submit) {
        echo "Data berhasil diperbarui";
        header("location: data_dosen.php");
        exit;
    } else {
        echo "Gagal memperbarui data";
    }
}

$id = $_GET['id'] ?? ''; 
$dosen = mysqli_query($koneksi, "SELECT * FROM dosen WHERE id='$id'");
$baris = mysqli_fetch_array($dosen);
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
            <label class="form-label"> Nama Dosen</label>
            <input class="form-control" class="form-label" value="<?php echo $baris['nama']; ?>" type="text" name="nama" placeholder="Isi dengan Nama Dosen" required>
            <input name="id" value="<?php echo $id; ?>" hidden>
        </div>
        <div class="mb-3">
            <label class="form-label"> NIDN Dosen</label>
            <input class="form-control" value="<?php echo $baris['nidn']; ?>" type="text" name="nidn" placeholder="Isi dengan Kode Dosen" maxlength="8" required>
        </div>

        <div class="mb-3">
        <label class="form-label" for="">jenjang_pendidikan</label>
        <select class="form-control" name="jenjang_pendidikan" required>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
        </select>
    </div>

        <button class="btn btn-primary" type="submit">UPDATE DATA</button>
    </form>
</div>
</body>
</html>