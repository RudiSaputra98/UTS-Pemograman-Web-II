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
    <div class="container col-md-10 mt-8">

    <h1> DATA MATA KULIAH</h1>
    <P> Silahkan Isi Data Dibawah ini</P>
    <form method="POST" action="submit.php">

    <div class="mb-1">
        <label class="form-label" for="">Masukan No ID</label>
        <input class="form-control" type="number" name="id" placeholder="Isi dengan ID" required>
    </div>   

    <div class="mb-3">
        <label class="form-label" for="">Nama Mata Kuliah</label>
        <input class="form-control" type="text" name="nama" placeholder="Isi dengan Nama Mata Kuliah" required>
    </div>   
    <div class="mb-3">
        <label class="form-label" for="">Kode Mata Kuliah</label>
        <input class="form-control" type="number" name="kode_matakuliah" placeholder="Isi dengan Kode Mata Kuliah" required>
    </div>
    <div class="mb-3">
        <label class="form-label" for="">Deskripsi</label>
        <input class="form-control" type="text" name="deskripsi" placeholder="Masukan Deskripsi Mata Kuliah" required>
    </div>
        <button class="btn btn-primary" type="submit">submit</button>
    
    </form>
    </div>
</body>

<body>
<div class="container col-md-12 mt-5">
    <h1> DATA DOSEN</h1>
    <P> Silahkan Isi Data Dosen Dibawah ini</P>
    <form method="POST" action="submit.php">

    
    <div class="mb-1">
        <label class="form-label" for="">Masukan No ID</label>
        <input class="form-control" type="number" name="id" placeholder="Isi dengan ID dosen" required>
    </div>   

    <div class="mb-3">    
        <label class="form-label" for="">Nama Dosen</label>
        <input class="form-control" type="text" name="namadosen" placeholder="Isi dengan Nama Dosen" required>
    </div> 

    <div class="mb-3">    
        <label class="form-label" for="">NIDN Dosen</label>
        <input class="form-control" type="number" name="nidn" placeholder="Isi dengan NIDN Dosen" required>
    </div>   

    <div class="mb-3">  
        <label class="form-label" for="">Jenjang Pendidikan</label>
        <input class="form-control" type="text" name="jenjang" placeholder="Masukan Jenjang Pendidikan Dosen" required>
    </div>
        <button class="btn btn-primary" type="submit">submit</button>

    </form>
    </div>
</body>

<body>
<div class="container col-md-12 mt-5">
    <h1> DATA MAHASISWA</h1>
    <P> Silahkan Isi Data Mahasiswa Dibawah ini</P>
    <form method="POST" action="submit.php">

    
    <div class="mb-1">
        <label class="form-label" for="">Masukan No ID</label>
        <input class="form-control" type="number" name="id" placeholder="Isi dengan ID" required>
    </div>   

    <div class="mb-3">
        <label class="form-label" for="">Nama Mahasiswa</label>
        <input class="form-control" type="text" name="namamahasiswa" placeholder="Isi dengan Nama Mahasiswa" required>

    <div class="mb-3">
        <label class="form-label" for="">NIDN Dosen</label>
        <input class="form-control" type="number" name="nim" placeholder="Isi dengan NIM Mahasiswa" required
    
    <div class="mb-3">
        <label class="form-label" for="">Program Studi</label>
        <input class="form-control" type="text" name="pstudi" placeholder="Masukan Program Studi Mahasiswa" required>

        <button class="btn btn-primary" type="submit">submit</button>

    </form>
</div>
</body>

</html>