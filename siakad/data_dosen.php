<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>DATA DOSEN</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<?php include('navbar.php'); ?>
<div class="container mt-4">
    <h1> DATA DOSEN</h1>
    <p>Berikut Adalah Dosen yang terdaftar</p>
    <?php
        include('koneksi.php');
        
        $dosen = mysqli_query($koneksi, "SELECT * FROM dosen");
        while ($baris = mysqli_fetch_array($dosen)){

    }
    ?>
    <table class="table table-striped-columns">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama </th>
                <th>NIDN</th>
                <th>Jenjang Pendidikan</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('koneksi.php');
            $dosen = mysqli_query($koneksi, "SELECT * FROM dosen");
            while ($baris = mysqli_fetch_array($dosen)){
            ?>
                <tr>
                    <td><?php echo $baris['id'] ; ?></td>
                    <td><?php echo $baris['nama'] ; ?></td>
                    <td><?php echo $baris['nidn'] ; ?></td>
                    <td><?php echo $baris['jenjang_pendidikan'] ; ?></td>
                    <td>
                        <a class="btn btn-primary" href="c_dosen.php?id=<?php echo $baris ['id'] ?>" role="button">CREATE DATA</a>
                        <a class="btn btn-primary" href="u_dosen.php?id=<?php echo $baris ['id'] ?>" role="button">UPDATE DATA</a>
                        <a class="btn btn-primary" href="d_dosen.php?id=<?php echo $baris ['id'] ?>" role="button">DELETE DATA</a>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>
    </div>
</body>
</html>