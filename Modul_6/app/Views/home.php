<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<h1>Welcome to My Profile</h1>
<p>Nama: <?= $biodata['nama'] ?></p>
<p>NIM: <?= $biodata['nim'] ?></p>
<?= $this->endSection() ?>