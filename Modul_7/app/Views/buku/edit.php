<!DOCTYPE html>
<html>

<head>
    <title>Edit Buku</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body class="bg-light p-4">

    <div class="container">
        <div class="card shadow">
            <div class="card-header bg-success text-white">
                <h4 class="mb-0">Edit Buku</h4>
            </div>
            <div class="card-body">
                <form action="/buku/update/<?= $buku['id'] ?>" method="post">
                    <?= csrf_field() ?>
                    <div class="mb-3">
                        <label for="judul" class="form-label">Judul</label>
                        <input type="text" name="judul" class="form-control" value="<?= esc($buku['judul']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="penulis" class="form-label">Penulis</label>
                        <input type="text" name="penulis" class="form-control" value="<?= esc($buku['penulis']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="penerbit" class="form-label">Penerbit</label>
                        <input type="text" name="penerbit" class="form-control" value="<?= esc($buku['penerbit']) ?>" required>
                    </div>
                    <div class="mb-3">
                        <label for="tahun_terbit" class="form-label">Tahun Terbit</label>
                        <input type="number" name="tahun_terbit" class="form-control" value="<?= esc($buku['tahun_terbit']) ?>" required>
                    </div>
                    <button type="submit" class="btn btn-success">Perbarui</button>
                    <a href="/buku" class="btn btn-secondary ms-2">Kembali</a>
                </form>
            </div>
        </div>
    </div>

</body>

</html>