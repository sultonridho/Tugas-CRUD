<?php
// Memasukkan koneksi database
include_once("config.php");

if (isset($_POST['Submit'])) {
    $nama = $_POST['nama'];
    $umur = $_POST['umur'];
    $pengalaman_pengemudi = $_POST['pengalaman_pengemudi'];
    $nomor_sim_aktif = $_POST['nomor_sim_aktif'];

    // Menyimpan data ke database
    $result = mysqli_query($mysqli, "INSERT INTO users (nama, umur, pengalaman_pengemudi, nomor_sim_aktif) VALUES('$nama', '$umur', '$pengalaman_pengemudi', '$nomor_sim_aktif')");

    // Setelah berhasil, arahkan kembali ke index.php
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <title>Tambah Data Driver</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
   <a href="index.php" class="btn-kembali">Kembali ke Beranda</a>
    <br/><br/>
    <form action="add.php" method="post" name="form1">
        <table width="25%" border="0">
            <tr> 
                <td>Nama</td>
                <td><input type="text" name="nama" required></td>
            </tr>
            <tr> 
                <td>Umur</td>
                <td><input type="text" name="umur" required></td>
            </tr>
            <tr> 
                <td>Pengalaman Pengemudi</td>
                <td><input type="text" name="pengalaman_pengemudi" required></td>
            </tr>
            <tr> 
                <td>Nomor SIM Aktif</td>
                <td><input type="text" name="nomor_sim_aktif" required></td>
            </tr>
            <tr>
                <td>Kontak</td>
                <td><input type="text" name="kontak" required></td>
            </tr>
            <tr> 
                <td>Status</td>
                <td><input type="text" name="status" required></td>
            </tr>
            <tr> 
                <td></td>
                <td><input type="submit" name="Submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>
</html>