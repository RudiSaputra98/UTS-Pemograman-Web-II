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
<?php
include('navbar.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    include('koneksi.php');

    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $kode_matakuliah = $_POST['kode_matakuliah'];
    $deskripsi = $_POST['deskripsi'];

    $submit = mysqli_query($koneksi, "INSERT INTO matakuliah (id, nama, kode_matakuliah, deskripsi) VALUES ('$id', '$nama', '$kode_matakuliah', '$deskripsi')");

    if ($submit) {
        echo "Data berhasil tersimpan";
        header("Location: data_matakuliah.php");
        exit;
    } else {
        echo "Error saat menyimpan data: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

    <div class="container col-md-6 mt-4">
    <h1>DATA MATA KULIAH</h1>
    <P> Silahkan Isi Data Dibawah ini</P>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="mb-3">
        <label class="form-label" for="">Masukan No ID</label>
        <input class="form-control" type="number" name="id" placeholder="Isi dengan ID" required>
    </div>   

    <div class="mb-3">
        <label class="form-label" for="">Nama Mata Kuliah</label>
        <input class="form-control" type="text" name="nama" placeholder="Isi dengan Nama Mata Kuliah" required>
    </div>   
    <div class="mb-3">
        <label class="form-label" for="">Kode Mata Kuliah</label>
        <input class="form-control" type="text" name="kode_matakuliah" placeholder="Isi dengan Kode Mata Kuliah" maxlength="5" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Deskripsi</label>
        <textarea class="form-control" type="text" name="deskripsi" placeholder="Masukan Deskripsi Mata Kuliah" required></textarea>
    </div>
        <button class="btn btn-primary" type="submit">submit</button>       
        </form>
    </div>
    

</body>

</html>