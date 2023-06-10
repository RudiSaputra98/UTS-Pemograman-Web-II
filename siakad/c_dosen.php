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
    $nidn = $_POST['nidn'];
    $jenjang_pendidikan = $_POST['jenjang_pendidikan'];

    $submit = mysqli_query($koneksi, "INSERT INTO dosen (id, nama, nidn, jenjang_pendidikan) VALUES ('$id', '$nama', '$nidn', '$jenjang_pendidikan')");

    if ($submit) {
        echo "Data berhasil tersimpan";
        header("Location: data_dosen.php");
        exit;
    } else {
        echo "Error saat menyimpan data: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

    <div class="container col-md-6 mt-4">
    <h1>DATA DOSEN</h1>
    <P> Silahkan Isi Data Dosen Dibawah ini</P>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="mb-3">
        <label class="form-label" for="">Masukan No ID</label>
        <input class="form-control" type="number" name="id" placeholder="Isi dengan ID" required>
    </div>   

    <div class="mb-3">
        <label class="form-label" for="">Nama Dosen</label>
        <input class="form-control" type="text" name="nama" placeholder="Isi dengan Nama Dosen" required>
    </div>   
    <div class="mb-3">
        <label class="form-label" for="">NIDN</label>
        <input class="form-control" type="text" name="nidn" placeholder="Isi dengan NIDN Dosen" maxlength="8" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">jenjang_pendidikan</label>
        <select class="form-control" name="jenjang_pendidikan" required>
        <option value="S2">S2</option>
        <option value="S3">S3</option>
    </select>
    </div>
        <button class="btn btn-primary" type="submit">submit</button>       
        </form>
    </div>
    

</body>

</html>