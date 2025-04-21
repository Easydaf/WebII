<!DOCTYPE html>
<html>

<head>
    <title>PRAK304</title>
</head>

<body>
    <?php
    $jumlah = isset($_POST['jumlah']) ? $_POST['jumlah'] : 0;

    if (isset($_POST['submit'])) {
    } elseif (isset($_POST['tambah'])) {
        $jumlah++;
    } elseif (isset($_POST['kurang'])) {
        if ($jumlah > 0) $jumlah--;
    }

    $gambar = "https://cdn-icons-png.flaticon.com/512/616/616489.png";
    ?>

    <?php if (!isset($_POST['submit']) && !isset($_POST['tambah']) && !isset($_POST['kurang'])): ?>
        <form method="post">
            <label for="jumlah">Jumlah bintang</label>
            <input type="number" name="jumlah">
            <input type="submit" name="submit" value="Submit">
        </form>

    <?php else: ?>
        <p>Jumlah bintang <?= $jumlah ?></p>

        <?php
        for ($i = 0; $i < $jumlah; $i++) {
            echo "<img src='$gambar' width='50' height='50'>";
        }
        ?>

        <form method="post">
            <input type="hidden" name="jumlah" value="<?= $jumlah ?>">
            <input type="submit" name="tambah" value="Tambah">
            <input type="submit" name="kurang" value="Kurang">
        </form>
    <?php endif; ?>
</body>

</html>