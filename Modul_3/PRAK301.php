<!DOCTYPE html>

<head>
    <title>Soal 1</title>
    <style>
        .green {
            color: green;
        }

        .red {
            color: red;
        }
    </style>

</head>

<body>
    <form method="post">
        <label for="Jumlah Peserta:">Jumlah Peserta: </label>
        <input type="number" name="jumlah" value="<?= isset($_POST['jumlah']) ? htmlspecialchars($_POST['jumlah']) : '' ?>"><br>
        <input type="submit" name="submit" value="cetak">
    </form>
</body>

</html>

<?php
$i = 1;
if (isset($_POST['submit'])) {
    $jumlah = $_POST['jumlah'];
    while ($i <= $jumlah) {
        if ($i % 2 == 0) {
            echo "<h2 class='green'>Peserta ke-$i</h2>";
        } else {
            echo "<h2 class='red'>Peserta ke-$i</h2>";
        }
        $i++;
    }
}
?>