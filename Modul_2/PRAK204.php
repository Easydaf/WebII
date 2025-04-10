<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 4</title>
</head>

<body>
    <form method="post">
        <label for="nilai">Nilai: </label>
        <input type="number" name="nilai"><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    $nilai = $_POST['nilai'];
    switch ($nilai) {
        case 0:
            echo "<h2>hasil: enol</h2>";
            break;
        case ($nilai > 0 && $nilai < 10):
            echo "<h2>hasil: satuan</h2>";
            break;
        case ($nilai >= 11 && $nilai < 20):
            echo "<h2>hasil: belasan</h2>";
            break;
        case ($nilai > 10 && $nilai < 100):
            echo "<h2>hasil: puluhan</h2>";
            break;
        case ($nilai >= 100 && $nilai < 1000):
            echo "<h2>hasil: ratusan</h2>";
            break;
        default:
            echo "<h2>hasil: Kelebihan Limit</h2>";
            break;
    }
}
?>