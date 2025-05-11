<?php
require_once 'Model.php';

// Pastikan ID ada di URL
if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
}

$id = $_GET['id'];
$members = getMemberById($id);

// Cek jika member tidak ditemukan
if (!$members) {
    echo "Data member tidak ditemukan di database!";
    exit;
}

// Ambil data untuk isi form
$nama = $members['nama_member'];
$alamat = $members['alamat'];
$nomor = $members['nomor_member'];

// Saat form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor'];

    updateMember($id, $nama, $alamat, $nomor);
    header("Location: Member.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Member</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h1>Edit Data Member</h1>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama" value="<?= $nama; ?>" required><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" value="<?= $alamat; ?>" required><br><br>

        <label>Nomor Member:</label><br>
        <input type="text" name="nomor" value="<?= $nomor; ?>" required><br><br>

        <button type="submit" class="btn btn-edit">Update</button>
        <a href="Member.php" class="btn btn-back">Batal</a>
    </form>
</div>
</body>
</html>