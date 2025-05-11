<?php
require_once 'Model.php';
$peminjaman = getAllPeminjaman();
?>

<!DOCTYPE html>
<html>

<head>
    <title>Data Peminjaman</title>
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
                <a href="FormPeminjaman.php" class="btn btn-link">+ Tambah Peminjaman Baru</a>
            </div>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Tanggal Pinjam</th>
                <th>Tanggal Kembali</th>
                <th>Judul Buku</th>
                <th>Nama Member</th>
                <th>Aksi</th>
            </tr>
            <?php while ($row = mysqli_fetch_assoc($peminjaman)) : ?>
                <tr>
                    <td><?= $row['id_peminjaman']; ?></td>
                    <td><?= $row['tgl_pinjam']; ?></td>
                    <td><?= $row['tgl_kembali']; ?></td>
                    <td><?= $row['judul_buku']; ?></td>
                    <td><?= $row['nama_member']; ?></td>
                    <td>
                        <form action="FormEditPeminjaman.php" method="get" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $row['id_peminjaman']; ?>">
                            <button class="btn btn-edit">Edit</button>
                        </form>
                        <form method="post" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?');">
                            <input type="hidden" name="hapus_id" value="<?= $row['id_peminjaman']; ?>">
                            <button class="btn btn-hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>


    <?php
    if (isset($_POST['hapus_id'])) {
        $id = $_POST['hapus_id'];
        deletePeminjaman($id);
    }
    ?>
</body>

</html>