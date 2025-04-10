<?php
    $namaErr = $nimErr = $jenisKelaminErr = "";
    $nama = $nim = $jenisKelamin = "";
    if (isset($_POST["submit"])) {
        empty($_POST['nama']) ? $namaErr = "Isi woy" : $nama = $_POST["nama"];
        empty($_POST['nim']) ? $nimErr = "Isi woy" : $nim = $_POST["nim"];
        empty($_POST['jenisKelamin']) ? $jenisKelaminErr = "Isi woy" : $jenisKelamin = $_POST["jenisKelamin"];
    }
    ?>
<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Soal 2</title>
    <style>
        span {color: #FF0000;}
    </style>
</head>
<body>

    <form method="post">
        <label for="nama">nama: </label>
        <input type="text" name="nama" id="nama" value="<?= $nama ?>"><span>* <?= $namaErr ?></span><br>
        <label for="nim">nim: </label>
        <input type="text" name="nim" id="nim" value="<?= $nim ?>"><span>* <?= $nimErr ?></span><br>
        <label for="jenisKelamin"> jenisKelamin: </label><span>* <?= $jenisKelaminErr ?></span><br>
        <input type="radio" name="jenisKelamin" <?php if (isset($_POST['jenisKelamin']) && $_POST['jenisKelamin'] === 'laki-laki') echo 'checked' ?> id="laki-laki" value="laki-laki">
        <label for="laki-laki">laki-laki</label><br>
        <input type="radio" name="jenisKelamin" <?php if (isset($_POST['jenisKelamin']) && $_POST['jenisKelamin'] === 'perempuan') echo 'checked' ?> id="perempuan" value="perempuan">
        <label for="perempuan">perempuan</label><br>
        <button name="submit" type="submit">submit</button>
        

    </form>

    <?php
    if(!empty($nama) && !empty($nim) && !empty($jenisKelamin))
    echo "
    <h2>otput:</h2>
    $nama<br>
    $nim<br>
    $jenisKelamin<br>";
    ?>
</body>
</html>