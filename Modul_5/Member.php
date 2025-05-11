<?php
require_once 'Model.php'; // ngambil fungsi dari file Model.php
$members = getAllMember(); // ngambil data dari database member
?>

<!DOCTYPE html>
<html>

<head>
    <title>Daftar Member</title>
    <link rel="stylesheet" href="style.css"> <!-- Link ke file CSS -->
</head>

<body>
    <div class="container">
        <h1>Data Member</h1>

        <div class="actions">
            <form>
                <input type="search" placeholder="Cari...">
            </form>
            <div>
                <a href="index.php" class="btn btn-home">Home</a>
                <a href="FormMember.php" class="btn btn-link">+ Tambah Peminjaman Baru</a>
            </div>
        </div>

        <table>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Nomor Telpon</th>
                <th>Tanggal Mendaftar</th>
                <th>Tanggal Terakhir Bayar</th>
                <th>Aksi</th>
            </tr>
            <!-- Data baris diulang di sini -->
            <?php while ($row = mysqli_fetch_assoc($members)) : ?>
                <tr>
                    <td><?= $row['id_member']; ?></td> <!-- Tampilkan ID -->
                    <td><?= $row['nama_member']; ?></td> <!-- Tampilkan Nama -->
                    <td><?= $row['alamat']; ?></td> <!-- Tampilkan Alamat -->
                    <td><?= $row['nomor_member']; ?></td> <!-- Tampilkan Nomor Member -->
                    <td><?= $row['tgl_mendaftar']; ?></td> <!-- Tampilkan Tanggal Mendaftar -->
                    <td><?= $row['tgl_terakhir_bayar']; ?></td> <!-- Tampilkan Tanggal Terakhir Bayar -->
                    <td>
                        <form action="FormEditMember.php" method="get" style="display:inline;">
                            <input type="hidden" name="id" value="<?= $row['id_member']; ?>">
                            <button class="btn btn-edit">Edit</button>
                        </form>
                        <form method="post" style="display:inline;" onsubmit="return confirm('Yakin ingin menghapus?');">
                            <input type="hidden" name="hapus_id" value="<?= $row['id_member']; ?>">
                            <button class="btn btn-hapus">Hapus</button>
                        </form>
                    </td>
                </tr>
            <?php endwhile; ?>
        </table>
    </div>


    <?php
    // Jika tombol hapus ditekan
    if (isset($_POST['hapus_id'])) {
        $id = $_POST['hapus_id'];
        deleteMember($id);
        header("Location: Member.php");
        exit;
    }
    ?>
</body>

</html>