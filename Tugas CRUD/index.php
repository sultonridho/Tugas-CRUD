<?php
// Memasukkan koneksi database
include_once("config.php");
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pengelolaan driver & pengemudi</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <header>
        <h1>Driver / Pengemudi</h1>
    </header>

    <div class="container-utama">
        <!-- Tombol Tambah Data -->
        <a href="add.php" class="btn-tambah">+ Tambah Data Baru</a>

        <article class="hero">
            <?php
            // Mengambil data dari database secara dinamis dan menampilkannya dalam bentuk kartu
            $query_data = mysqli_query($mysqli, "SELECT * FROM users ORDER BY id DESC");
            while($user_data = mysqli_fetch_array($query_data)) {
                echo "<div class='kartu'>";
                echo "<p><strong>nama :</strong> " . $user_data['nama'] . "</p>";
                echo "<p><strong>nomor sim aktif :</strong> " . $user_data['nomor_sim_aktif'] . "</p>";
                echo "<p><strong>umur :</strong> " . $user_data['umur'] . " tahun</p>";
                echo "<p><strong>pengalaman :</strong> " . $user_data['pengalaman_pengemudi'] . "</p>";
                echo "<p><strong>status :</strong> " . $user_data['status'] . "</p>";
                echo "<p><strong>kontak :</strong> " . $user_data['kontak'] . "</p>";
                echo "<div class='aksi-container'>";
                echo "<button><a href='edit.php?id=" . $user_data['id'] . "'>edit</a></button>";
                echo "<button><a href='delete.php?id=" . $user_data['id'] . "'>hapus</a></button>";
                echo "</div>";
            }
            ?>
        </article>
    </div>
</body>
</html>