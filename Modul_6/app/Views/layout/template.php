<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8">
  <title><?= $title ?? 'PRAK601' ?></title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Share+Tech&display=swap" rel="stylesheet">
  <style>
    body {
      font-family: "Share Tech", sans-serif;
      background-color: #f8f9fa;
    }

    .navbar {
      border-bottom: 2px solid #ddd;
    }

    .navbar-brand {
      font-weight: 600;
    }

    .nav-link {
      font-weight: 500;
      transition: color 0.3s ease;
    }

    .nav-link:hover {
      color: #ff6f61 !important;
    }
  </style>
</head>

<body>

  <nav class="navbar navbar-expand-lg bg-primary">
    <div class="container">
      <a class="navbar-brand text-white" href="#">Prak 6</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav ms-auto">
          <a class="nav-link active text-white" aria-current="page" href="/">Home</a>
          <a class="nav-link text-white" href="/profil">Profile</a>
        </div>
      </div>
    </div>
  </nav>

  <div class="container my-3" style="max-width: 500px;">
    <div class="p-5 bg-white rounded-4 shadow-lg text-center">
      <?= $this->renderSection('content') ?>
    </div>
  </div>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>