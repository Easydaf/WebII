<!DOCTYPE html>
<html>
<head>
    <title>PRAK303</title>
</head>
<body>
    <form method="post">
        <label>Batas Bawah : </label>
        <input type="number" name="bawah" value="<?= isset($_POST['bawah']) ? htmlspecialchars($_POST['bawah']) : '' ?>"><br>
        <label>Batas Atas : </label>
        <input type="number" name="atas" value="<?= isset($_POST['atas']) ? htmlspecialchars($_POST['atas']) : '' ?>"><br>
        <input type="submit" name="submit" value="Cetak">
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $bawah = $_POST['bawah'];
        $atas = $_POST['atas'];
        $gambar = "https://cdn-icons-png.flaticon.com/512/616/616489.png";
        if ($bawah <= $atas) {
            $i = $bawah;
            do {
                if (($i + 7) % 5 == 0) {
                    echo "<img src='$gambar' width='25' height='25'> ";
                } else {
                    echo "$i ";
                }
                $i++;
            } while ($i <= $atas);
        } else {
            echo "<p style='color:red;'>Batas bawah harus lebih kecil atau sama dengan batas atas.</p>";
        }
    }
    ?>
</body>
</html>
