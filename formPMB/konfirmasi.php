<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>di konfirmasi
    <table border="1">
        <tr>
            <td>nama lengkap</td>
            <td>:</td>
            <td><?php echo $_POST['name']; ?></td>
        </tr>
        <tr>
            <td>Nomor Induk Mahasiswa</td>
            <td>:</td>
            <td><?php echo $_POST['NIM']; ?></td>
        </tr>
        <tr>
            <td>Tanggal Lahir</td>
            <td>:</td>
            <td><?php echo $_POST['Tgllahir']; ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?php echo $_POST['JK']; ?></td>
        </tr>
        <tr>
            <td>Foto Profil</td>
            <td>:</td>
            <td><img src ="<?php echo $_POST['foto']; ?>" alt = ""width="150px" height="150PX"></td>
        </tr>
        <tr>
            <td>Tahun lulus Mahasiswa</td>
            <td>:</td>
            <td><?php echo $_POST['Tahun_lulus_Mahasiswa']; ?></td>
        </tr>
    </table>
</body>
</html>