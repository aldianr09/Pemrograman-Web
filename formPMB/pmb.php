<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elemen Form</title>
</head>
<body>
    <h3>Silakan Mengisi data Diri anda<h3>
    <form method="POST" action="konfirmasi.php">
        <table rules="rows">
            <tr>
                <td>Nama lengkap</td>
                <td><input type="text" nama="name" placeholder="Masukan nama..." style="width:99%;"></td>
            </tr>
            <tr>
                <td>Nomor Induk Mahasiswa</td>
                <td><input type="text" nama="NIM" placeholder= "masukan nim.."style="width:99%;"></td>
            </tr>
            <tr>
                <td> Tanggal Lahir</td>
                <td><input type="date" nama="Tgllahir"style="width:99%;"></td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td><input type="radio" name="JK" Value="Laki-Laki">Laki-laki
                <input type="radio" name="JK" Value="Perempuan">Perempuan</td>
            </tr>
            <tr>
                <td>Foto Profil</td>
                <td><input type="file" nama="Foto" accept="image"/*></td>
            </tr>
            <tr>
                <td>Tahun lulus Mahasiswa</td>
                <td><select name="Tahun_lulus_Mahasiswa" id=""style="width:100%;">
                    <option value="">--pilih--</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option> 
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="2021">2021</option>
                </select></td>
            </tr>
            <tr>
                <td>Hobby</td>
                <td><input type="checkbox" nama="check1" value="Sepak Bola">Sepak Bola
                <input type="checkbox" nama="check1" value="Futsal">Futsal
                <input type="checkbox" nama="check1" value="Codding">Codding
                <input type="checkbox" nama="check1" value="basket">basket
                <input type="checkbox" nama="check1" value="berenang">berenang
                <input type="checkbox" nama="check1" value="Silat">Silat</td>
            </tr>
        </table>
        <br>
        <td><button type="submit" name="submit" value="submit">Kirim</button></td>
    </form>
</body>
</html>