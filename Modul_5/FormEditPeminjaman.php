<?php
require_once 'Model.php';

// Pastikan ada ID
if (!isset($_GET['id'])) {
    echo "ID tidak ditemukan!";
    exit;
}

$id = $_GET['id'];
$data = getPeminjamanById($id); // Ambil data peminjaman lama

$tgl_pinjam = $data['tgl_pinjam'];
$tgl_kembali = $data['tgl_kembali'];
$id_buku_lama = $data['id_buku'];
$id_member_lama = $data['id_member'];

$semuaBuku = getAllBuku();     // Untuk dropdown buku
$semuaMember = getAllMember(); // Untuk dropdown member

// Jika form disubmit
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $tgl_pinjam = $_POST['tgl_pinjam'];
    $tgl_kembali = $_POST['tgl_kembali'];
    $id_buku = $_POST['id_buku'];
    $id_member = $_POST['id_member'];

    updatePeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_buku, $id_member);
    header("Location: Peminjaman.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Peminjaman</title>
</head>
<body>
    <h1>Edit Data Peminjaman</h1>
    <form method="post">
        <label>Tanggal Pinjam:</label><br>
        <input type="date" name="tgl_pinjam" value="<?= $tgl_pinjam; ?>" required><br><br>

        <label>Tanggal Kembali:</label><br>
        <input type="date" name="tgl_kembali" value="<?= $tgl_kembali; ?>" required><br><br>

        <label>Pilih Buku:</label><br>
        <select name="id_buku" required>
            <?php while ($buku = mysqli_fetch_assoc($semuaBuku)) : ?>
                <option value="<?= $buku['id_buku']; ?>" <?= $buku['id_buku'] == $id_buku_lama ? 'selected' : ''; ?>>
                    <?= $buku['judul_buku']; ?>
                </option>
            <?php endwhile; ?>
        </select><br><br>

        <label>Pilih Member:</label><br>
        <select name="id_member" required>
            <?php while ($member = mysqli_fetch_assoc($semuaMember)) : ?>
                <option value="<?= $member['id_member']; ?>" <?= $member['id_member'] == $id_member_lama ? 'selected' : ''; ?>>
                    <?= $member['nama_member']; ?>
                </option>
            <?php endwhile; ?>
        </select><br><br>

        <button type="submit">Update</button>
    </form>
</body>
</html>
