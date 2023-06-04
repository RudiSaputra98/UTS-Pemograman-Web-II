<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1> Data Mata Kuliah</h1>
    <p>Berikut Adalah mata kuliah yang terdaftar</p>
    <?php
        include('koneksi.php');
        
        $matakuliah = mysqli_query($koneksi, "SELECT * FROM matakuliah");
        while ($baris = mysqli_fetch_array($matakuliah)){

    }
    ?>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama </th>
                <th>Kode Matakuliah</th>
                <th>Deskripsi</th>
            </tr>
        </thead>
        <tbody>
            <?php
            include('koneksi.php');
            $matakuliah = mysqli_query($koneksi, "SELECT * FROM matakuliah");
            while ($baris = mysqli_fetch_array($matakuliah)){
            ?>
                <tr>
                    <td><?php echo $baris['id'] ; ?></td>
                    <td><?php echo $baris['nama'] ; ?></td>
                    <td><?php echo $baris['kode_matakuliah'] ; ?></td>
                    <td><?php echo $baris['deskripsi'] ; ?></td>
                    <td>
                        <a href="index.php?id=<?php echo $baris ['id'] ?>"> CREATE DATA</a>  
                        <a href="edit.php?id=<?php echo $baris ['id'] ?>"> UPDATE DATA</a> 
                        <a href="hapus.php?id=<?php echo $baris ['id'] ?>"> HAPUS DATA</a>
                    </td>

                </tr>
            <?php } ?>
        </tbody>
    </table>

</body>
</html>