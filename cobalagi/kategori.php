<?php include 'inc/db.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Pilih Kategori</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>
    <h2>Pilih Kategori Berita</h2>
    <ul>
        <?php
        $result = $conn->query("SELECT * FROM kategori");
        while ($row = $result->fetch_assoc()) {
            echo "<li><a href='berita.php?id_kategori={$row['id_kategori']}'>{$row['nama_kategori']}</a></li>";
        }
        ?>
    </ul>
</body>
</html>
