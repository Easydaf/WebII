<!DOCTYPE html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Soal 3</title>
</head>

<body>
    <form method="post">
        <label for="nilai">Nilai: </label>
        <input type="number" name="suhu" value="<?= isset($_POST['suhu']) ? htmlspecialchars($_POST['suhu']) : '' ?>"><br>
        <span>dari: </span><br>
        <input type="radio" name="suhuAwal" <?php if (isset($_POST['suhuAwal']) && $_POST['suhuAwal'] === 'celsius') echo 'checked' ?> value="celsius">
        <label for="celsius">Celsius</label><br>
        <input type="radio" name="suhuAwal" <?php if (isset($_POST['suhuAwal']) && $_POST['suhuAwal'] === 'fahrenheit') echo 'checked' ?> value="fahrenheit">
        <label for="fahrenheit">Fahrenheit</label><br>
        <input type="radio" name="suhuAwal" <?php if (isset($_POST['suhuAwal']) && $_POST['suhuAwal'] === 'reamur') echo 'checked' ?> value="reamur">
        <label for="reamur">Reamur</label><br>
        <input type="radio" name="suhuAwal" <?php if (isset($_POST['suhuAwal']) && $_POST['suhuAwal'] === 'kelvin') echo 'checked' ?> value="kelvin">
        <label for="kelvin">Kelvin</label><br>
        <span>ke: </span><br>
        <input type="radio" name="konversiSuhu" <?php if (isset($_POST['suhuAwal']) && $_POST['suhuAwal'] === 'celsius') echo 'checked' ?> value="celsius">
        <label for="toCelsius">Celsius</label><br>
        <input type="radio" name="konversiSuhu" <?php if (isset($_POST['suhuAwal']) && $_POST['suhuAwal'] === 'fahrenheit') echo 'checked' ?> value="fahrenheit">
        <label for="toFahrenheit">Fahrenheit</label><br>
        <input type="radio" name="konversiSuhu" <?php if (isset($_POST['suhuAwal']) && $_POST['suhuAwal'] === 'reamur') echo 'checked' ?> value="reamur">
        <label for="toReamur">Reamur</label><br>
        <input type="radio" name="konversiSuhu" <?php if (isset($_POST['suhuAwal']) && $_POST['suhuAwal'] === 'kelvin') echo 'checked' ?> value="kelvin">
        <label for="toKelvin">Kelvin</label><br>
        <input type="submit" name="submit" value="Konversi">
    </form>
</body>

</html>

<?php
if (isset($_POST['submit'])) {
    if (isset($_POST['suhu']) && isset($_POST['suhuAwal']) && isset($_POST['konversiSuhu'])) {
        $suhu = $_POST['suhu'];
        $suhuAwal = $_POST['suhuAwal'];
        $konversiSuhu = $_POST['konversiSuhu'];

        switch ($suhuAwal) {
            case 'celsius':
                switch ($konversiSuhu) {
                    case 'celsius':
                        echo "<h2>Hasil Konfersi: $suhu &deg;C</h2>";
                        break;
                    case 'fahrenheit':
                        echo "<h2>Hasil Konfersi: " . ($suhu * 1.8 + 32) . " &deg;F</h2>";
                        break;
                    case 'reamur':
                        echo "<h2>Hasil Konfersi: " . ($suhu * 0.8) . " &deg;R</h2>";
                        break;
                    case 'kelvin':
                        echo "<h2>Hasil Konfersi: " . ($suhu + 273.15) . " K</h2>";
                        break;
                }
                break;
            case 'fahrenheit':
                switch ($konversiSuhu) {
                    case 'celsius':
                        echo "<h2>Hasil Konfersi: " . ($suhu - 32) / 1.8 . " &deg;C</h2>";
                        break;
                    case 'fahrenheit':
                        echo "<h2>Hasil Konfersi: $suhu &deg;F</h2>";
                        break;
                    case 'reamur':
                        echo "<h2>Hasil Konfersi: " . ($suhu - 32) / 2.25 . " &deg;R</h2>";
                        break;
                    case 'kelvin':
                        echo "<h2>Hasil Konfersi: " . ($suhu + 459.67) / 1.8 . " K</h2>";
                        break;
                }
                break;
            case 'reamur':
                switch ($konversiSuhu) {
                    case 'celsius':
                        echo "<h2>Hasil Konfersi: " . ($suhu * 1.25) . " &deg;C</h2>";
                        break;
                    case 'fahrenheit':
                        echo "<h2>Hasil Konfersi: " . ($suhu * 2.25 + 32) . " &deg;F</h2>";
                        break;
                    case 'reamur':
                        echo "<h2>Hasil Konfersi: $suhu &deg;R</h2>";
                        break;
                    case 'kelvin':
                        echo "<h2>Hasil Konfersi: " . ($suhu + 273.15) / 0.8 . " K</h2>";
                        break;
                }
                break;
            case 'kelvin':
                switch ($konversiSuhu) {
                    case 'celsius':
                        echo "<h2>Hasil Konfersi: " . ($suhu - 273.15) . " &deg;C</h2>";
                        break;
                    case 'fahrenheit':
                        echo "<h2>Hasil Konfersi: " . ($suhu * 1.8 - 459.67) . " &deg;F</h2>";
                        break;
                    case 'reamur':
                        echo "<h2>Hasil Konfersi: " . ($suhu - 273.15) * 0.8 . " &deg;R</h2>";
                        break;
                    case 'kelvin':
                        echo "<h2>Hasil Konfersi: $suhu K</h2>";
                        break;
                }
        }
    } else {
        echo "Isi semua nilai woy";
    }
}
?>