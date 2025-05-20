<!DOCTYPE html>
<html>

<head>
    <title>Daftar Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">
    <div class="container">
        <div class="justify-content-between align-items-center mb-4 text-center">
            <h2>---------------------------------|Daftar Buku|---------------------------------</h2>
        </div>

        <div class="d-flex justify-content-between align-items-center mb-3">
            <a href="/buku/create" class="btn btn-primary">Tambah Buku</a>
            <a href="/logout" class="btn btn-danger">Logout</a>
        </div>

        <?php if (session()->getFlashdata('success')) : ?>
            <div class="alert alert-success"><?= session()->getFlashdata('success') ?></div>
        <?php endif; ?>

        <div class="card shadow">
            <div class="card-header bg-primary text-white">
                <h5 class="mb-0">Tabel Buku</h5>
            </div>
            <div class="card-body p-0">
                <table class="table table-bordered table-striped mb-0">
                    <thead class="table-primary">
                        <tr>
                            <th>#</th>
                            <th>Judul</th>
                            <th>Penulis</th>
                            <th>Penerbit</th>
                            <th>Tahun Terbit</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $i = 1;
                        foreach ($buku as $item) : ?>
                            <tr>
                                <td><?= $i++ ?></td>
                                <td><?= esc($item['judul']) ?></td>
                                <td><?= esc($item['penulis']) ?></td>
                                <td><?= esc($item['penerbit']) ?></td>
                                <td><?= esc($item['tahun_terbit']) ?></td>
                                <td>
                                    <a href="/buku/edit/<?= $item['id'] ?>" class="btn btn-warning btn-sm">Edit</a>
                                    <form action="/buku/delete/<?= $item['id'] ?>" method="post" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus buku ini?')">
                                        <?= csrf_field() ?>
                                        <button type="submit" class="btn btn-danger btn-sm">Hapus</button>
                                    </form>
                                </td>
                            </tr>
                        <?php endforeach; ?>
                        <?php if (empty($buku)) : ?>
                            <tr>
                                <td colspan="6" class="text-center">Tidak ada data buku.</td>
                            </tr>
                        <?php endif; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>

</html>