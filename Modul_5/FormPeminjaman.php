<?php
require_once 'Model.php';

$semuaBuku = getAllBuku(); // untuk dropdown buku
$semuaMember = getAllMember(); // untuk dropdown member

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $id_buku = $_POST['id_buku'];
    $id_member = $_POST['id_member'];

    insertPeminjaman($tgl_pinjam, $tgl_kembali, $id_buku, $id_member);
    header("Location: Peminjaman.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Tambah Peminjaman</title>
</head>
<body>
    <h1>Form Tambah Peminjaman</h1>
    <form method="post">
        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="tgl_pinjam" required><br><br>

        <label>Tanggal Kembali:</label><br>
        <input type="date" name="tgl_kembali" required><br><br>

        <label>Pilih Buku:</label><br>
        <select name="id_buku" required>
            <option value="">--Pilih Buku--</option>
            <?php while ($buku = mysqli_fetch_assoc($semuaBuku)) : ?>
                <option value="<?= $buku['id_buku']; ?>"><?= $buku['judul_buku']; ?></option>
            <?php endwhile; ?>
        </select><br><br>

        <label>Pilih Member:</label><br>
        <select name="id_member" required>
            <option value="">--Pilih Member--</option>
            <?php while ($member = mysqli_fetch_assoc($semuaMember)) : ?>
                <option value="<?= $member['id_member']; ?>"><?= $member['nama_member']; ?></option>
            <?php endwhile; ?>
        </select><br><br>

        <button type="submit">Simpan</button>
    </form>
</body>
</html>
