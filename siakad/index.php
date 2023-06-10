<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

</head>
<body>
<?php include('navbar.php'); ?>
<div class="row">
  <div class="col-sm-4 mb-3 mb-sm-0">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">TABEL MAHASISWA</h5>
        <p class="card-text">Berisi Tabel data data Mahasiswa</p>
        <p class="card-text">Klik Create untuk menambahkan data</p>
        <p class="card-text">Klik Read untuk menambahkan melihat daftar yang telah terinput</p>
        <a href="c_mahasiswa.php" class="btn btn-primary">CREATE DATA</a>
        <a href="data_mahasiswa.php" class="btn btn-primary">READ DATA</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">TABEL DOSEN</h5>
        <p class="card-text">Berisi Tabel data data Dosen</p>
        <p class="card-text">Klik Create untuk menambahkan data</p>
        <p class="card-text">Klik Read untuk menambahkan melihat daftar yang telah terinput</p>
        <a href="c_dosen.php" class="btn btn-primary">CREATE DATA</a>
        <a href="data_dosen.php" class="btn btn-primary">READ DATA</a>
      </div>
    </div>
  </div>
  <div class="col-sm-4">
    <div class="card">
      <div class="card-body">
        <h5 class="card-title">TABEL MATA KULIAH</h5>
        <p class="card-text">Berisi Tabel data data Mata Kuliah</p>
        <p class="card-text">Klik Create untuk menambahkan data</p>
        <p class="card-text">Klik Read untuk menambahkan melihat daftar yang telah terinput</p>
        <a href="c_matakuliah.php" class="btn btn-primary">CREATE DATA</a>
        <a href="data_matakuliah.php" class="btn btn-primary">READ DATA</a>
      </div>
    </div>
  </div>
</div>
</body>
</html>