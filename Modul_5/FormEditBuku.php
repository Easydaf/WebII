<?php
require_once 'Model.php';

if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
}

$id = $_GET['id'];
$buku = getBukuById($id);

$judul = $buku['judul_buku'];
$penulis = $buku['penulis'];
$penerbit = $buku['penerbit'];
$tahun = $buku['tahun_terbit'];

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $judul = $_POST['judul'];
    $penulis = $_POST['penulis'];
    $penerbit = $_POST['penerbit'];
    $tahun = $_POST['tahun'];

    updateBuku($id, $judul, $penulis, $penerbit, $tahun);
    header("Location: Buku.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Buku</title>
</head>
<body>
    <h1>Edit Data Buku</h1>
    <form method="post">
        <label>Judul Buku:</label><br>
        <input type="text" name="judul" value="<?= $judul; ?>" required><br><br>

        <label>Penulis:</label><br>
        <input type="text" name="penulis" value="<?= $penulis; ?>" required><br><br>

        <label>Penerbit:</label><br>
        <input type="text" name="penerbit" value="<?= $penerbit; ?>" required><br><br>

        <label>Tahun Terbit:</label><br>
        <input type="number" name="tahun" value="<?= $tahun; ?>" required><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>