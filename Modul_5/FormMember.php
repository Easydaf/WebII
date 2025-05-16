<?php
require_once 'Model.php';



if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = $_POST['nama_member'];
    $alamat = $_POST['alamat'];
    $nomor = $_POST['nomor_member'];

    insertMember($nama, $alamat, $nomor);
    header("Location: Member.php");
    exit;
}
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Member</title>
</head>

<body>
    <h1>Tambah Data Member</h1>
    <form method="post">
        <label>Nama:</label><br>
        <input type="text" name="nama_member" required><br><br>

        <label>Alamat:</label><br>
        <input type="text" name="alamat" required><br><br>

        <label>Nomor Member:</label><br>
        <input type="text" name="nomor_member" required><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>

</html>