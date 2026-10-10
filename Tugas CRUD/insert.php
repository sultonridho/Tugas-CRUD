<?php
// Panggil koneksi database
include 'config.php'; 

if (isset($_POST['submit'])) {
    $nama = $_POST['nama'];
    $nomor_sim = $_POST['nomor_sim_aktif'];
    $umur = $_POST['umur'];
    $pengalaman = $_POST['pengalaman_pengemudi'];
    $kontak = $_POST['kontak'];
    $status = $_POST['status'];

    // Query untuk memasukkan data ke tabel 'users'
    $query = "INSERT INTO users (nama, nomor_sim_aktif, umur, pengalaman_pengemudi, kontak, status) 
              VALUES ('$nama', '$nomor_sim', '$umur', '$pengalaman', '$kontak', '$status')";
    
    // Gunakan variabel koneksi '$mysqli' sesuai yang ada di config.php
    $result = mysqli_query($mysqli, $query);

    if ($result) {
        header("Location: index.php");
        exit();
    } else {
        echo "<script>alert('Gagal menambah data!');</script>";
    }
}
?>