<?php
require_once 'Model.php';
$buku = getAllBuku();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Buku</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
    <h1>Data Peminjaman</h1>

    <div class="actions">
        <form>
            <input type="search" placeholder="Cari...">
        </form>
        <div>
            <a href="index.php" class="btn btn-home">Home</a>
            <a href="FormBuku.php" class="btn btn-link">+ Tambah Peminjaman Baru</a>
        </div>
    </div>

    <table>
        <tr>
            <th>ID</th>
            <th>Judul Buku</th>
            <th>Penulis</th>
            <th>Penerbit</th>
            <th>Tahun Terbit</th>
            <th>Aksi</th>
        </tr>
        <!-- Data baris diulang di sini -->
        <?php while ($row = mysqli_fetch_assoc($buku)) : ?>
            <tr>
                <td><?= $row['id_buku']; ?></td>
                <td><?= $row['judul_buku']; ?></td>
                <td><?= $row['penulis']; ?></td>
                <td><?= $row['penerbit']; ?></td>
                <td><?= $row['tahun_terbit']; ?></td>
                <td>
                    <form action="FormEditBuku.php" method="get" style="display:inline;">
                        <input type="hidden" name="id" value="<?= $row['id_buku']; ?>">
                        <button type="submit" class="btn btn-edit">Edit</button>
                    </form>
                    <form method="post" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?');">
                        <input type="hidden" name="hapus_id" value="<?= $row['id_buku']; ?>">
                        <button type="submit" class="btn btn-hapus">Hapus</button>
                    </form>
                </td>
            </tr>
        <?php endwhile; ?>
    </table>
</div>

    <?php
    if (isset($_POST['hapus_id'])) {
        $id = $_POST['hapus_id'];
        deleteBuku($id);
        header("Location: Buku.php");
        exit;
    }
    ?>
</body>

</html>