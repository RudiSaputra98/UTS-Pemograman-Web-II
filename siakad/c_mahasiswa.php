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
    $nim = $_POST['nim'];
    $program_studi = $_POST['program_studi'];

    $submit = mysqli_query($koneksi, "INSERT INTO mahasiswa (id, nama, nim, program_studi) VALUES ('$id', '$nama', '$nim', '$program_studi')");

    if ($submit) {
        echo "Data berhasil tersimpan";
        header("Location: data_mahasiswa.php");
        exit;
    } else {
        echo "Error saat menyimpan data: " . mysqli_error($koneksi);
    }

    mysqli_close($koneksi);
}
?>

    <div class="container col-md-6 mt-4">
    <h1>DATA MAHASISWA</h1>
    <P> Silahkan Isi Data Mahasiswa Dibawah ini</P>
    <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">

    <div class="mb-3">
        <label class="form-label" for="">Masukan No ID</label>
        <input class="form-control" type="number" name="id" placeholder="Isi dengan ID" required>
    </div>   

    <div class="mb-3">
        <label class="form-label" for="">Nama Mahasiswa</label>
        <input class="form-control" type="text" name="nama" placeholder="Isi dengan Nama Mahasiswa" required>
    </div>   
    <div class="mb-3">
        <label class="form-label" for="">NIM</label>
        <input class="form-control" type="text" name="nim" placeholder="Isi dengan NIM" maxlength="10" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Program Studi</label>
        <input class="form-control" type="text" name="program_studi" placeholder="Masukan program_studi Mahasiswa" required></input>
    </div>
        <button class="btn btn-primary" type="submit">submit</button>       
        </form>
    </div>
    

</body>

</html>