<?= $this->extend('layout/template') ?>

<?= $this->section('content') ?>
<div class="card mb-3" style="max-width: 540px;">
  <div class="row g-0">
    <div class="col-md-4">
      <img src="/images/<?= $biodata['gambar'] ?>" class="card-img-top" alt="Foto Profil">
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title">Profile</h5>
        <p class="card-text"><strong>Nama:</strong> <?= $biodata['nama'] ?></p>
        <p class="card-text"><strong>NIM:</strong> <?= $biodata['nim'] ?></p>
        <p class="card-text"><strong>Asal Prodi:</strong> <?= $biodata['asal_prodi'] ?></p>
        <p class="card-text"><strong>Hobi:</strong> <?= $biodata['hobi'] ?></p>
        <p class="card-text"><strong>Skill:</strong> <?= $biodata['skill'] ?></p>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection() ?>