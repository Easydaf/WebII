<?php
require_once 'Model.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul_buku'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun_terbit'];

    insertBuku($judul, $penulis, $penerbit, $tahun);
    header("Location: Buku.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Buku</title>
</head>
<body>
    <h1>Tambah Data Buku</h1>
    <form method="post">
        <label>Judul Buku:</label><br>
        <input type="text" name="judul_buku" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" required><br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun_terbit" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
