<?php

$name = $_POST['name'] ?? '';
$nim = $_POST['nim'] ?? '';
$prodi = $_POST['prodi'] ?? '';
$gender = $_POST['gender'] ?? '';
$hobies = $_POST['hoby'] ?? [];
$address = $_POST['address'] ?? '';

$hoby = implode(", ", $hobies);

$search = $_GET['search'] ?? '';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Input Data Mahasiswa</title>
</head>

<body>
    <h1>Pengelolaan Data Mahasiswa</h1>
    <form action="" method="POST">
        <table>
            <tr>
                <td><label for="name">Nama Lengkap</label></td>
                <td>:</td>
                <td><input type="text" name="name" id="name"></td>
            </tr>
            <tr>
                <td><label for="nim">NIM</label></td>
                <td>:</td>
                <td><input type="number" name="nim" id="nim"></td>
            </tr>
            <tr>
                <td>Program Studi</td>
                <td>:</td>
                <td>
                    <select name="prodi" id="prodi">
                        <option value="Informatika">Informatika</option>
                        <option value="Statistika">Statistika</option>
                        <option value="Teknik Mesin">Teknik Mesin</option>
                        <option value="Teknik Kimia">Teknik Kimia</option>
                        <option value="Teknik Sipil">Teknik Sipil</option>
                        <option value="Teknik Industri">Teknik Industri</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td>Jenis Kelamin</td>
                <td>:</td>
                <td>
                    <input type="radio" id="laki-laki" name="gender" value="Laki-laki">
                    <label for="laki-laki">Laki-laki</label>
                    <input type="radio" id="perempuan" name="gender" value="Perempuan">
                    <label for="perempuan">Perempuan</label>
                </td>
            </tr>
            <tr>
                <td>Hobi</td>
                <td>:</td>
                <td>
                    <input type="checkbox" id="olahraga" name="hoby[]" value="Olahraga">
                    <label for="olahraga">Olahraga</label>
                    <input type="checkbox" id="musik" name="hoby[]" value="Musik">
                    <label for="musik">Musik</label>
                    <input type="checkbox" id="jalan-jalan" name="hoby[]" value="Jalan-jalan">
                    <label for="jalan-jalan">Jalan-jalan</label>
                </td>
            </tr>
            <tr>
                <td><label for="address">Alamat</label></td>
                <td>:</td>
                <td><textarea name="address" id="address" rows="4" cols="50"></textarea></td>
            </tr>
        </table>
        <br>
        <input type="submit" value="KIRIM">
        <input type="reset" value="BATAL">
    </form>
    <br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th colspan="3">Data Mahasiswa</th>
        </tr>
        <tr>
            <td>Nama Lengkap</td>
            <td>:</td>
            <td><?= $name ?></td>
        </tr>
        <tr>
            <td>NIM</td>
            <td>:</td>
            <td><?= $nim ?></td>
        </tr>
        <tr>
            <td>Program Studi</td>
            <td>:</td>
            <td><?= $prodi ?></td>
        </tr>
        <tr>
            <td>Jenis Kelamin</td>
            <td>:</td>
            <td><?= $gender ?></td>
        </tr>
        <tr>
            <td>Hobi</td>
            <td>:</td>
            <td><?= $hoby ?></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><?= $address ?></td>
        </tr>
    </table>
    <br>

    <form action="" method="GET">
        <input type="text" name="search" id="search" placeholder="Cari Data Mahasiswa...">
        <input type="submit" value="CARI">
        <br>
        <p>Anda mencari data dengan kata kunci: <?= $search ?></p>
    </form>
</body>

</html>