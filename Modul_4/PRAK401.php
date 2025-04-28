<!DOCTYPE html>
<html lang="en">

<head>
    <title>SOAL 1</title>

    <style>
        table {
            border-collapse: collapse;
        }

        td {
            border: 1px solid;
            padding: 5px;
        }
    </style>
</head>

<body>
    <form method="post">
        <label for="Panjang">Panjang: </label>
        <input type="number" name="Panjang" value="<?= isset($_POST['Panjang']) ? htmlspecialchars($_POST['Panjang']) : '' ?>"><br>
        <label for="Lebar">Lebar: </label>
        <input type="number" name="Lebar" value="<?= isset($_POST['Lebar']) ? htmlspecialchars($_POST['Lebar']) : '' ?>"><br>
        <label for="Nilai">Nilai: </label>
        <input type="text" name="Nilai" value="<?= isset($_POST['Nilai']) ? htmlspecialchars($_POST['Nilai']) : '' ?>"><br>
        <input type="submit" name="submit" value="cetak">
    </form>
    <?php
    $panjang = $nilai = $lebar = "";
    if (isset($_POST['submit'])) {
        $panjang = $_POST['Panjang'];
        $lebar = $_POST['Lebar'];
        $nilai = $_POST['Nilai'];
        $a = explode(" ", $nilai);

        if ($panjang * $lebar != count($a)) {
            echo "panjang nilai tidak sesuai dengan ukuran matriks";
        } else { ?>
            <table>
                <?php
                for ($i = 0; $i < $panjang; $i++) {
                ?>
                    <tr>
                        <?php for ($j = 0; $j < $lebar; $j++) { ?>
                            <td>
                                <?php
                                if (empty($a[(  $i * $panjang) + $j])) {
                                    echo 0;
                                } else {
                                    echo $a[($i * $panjang) + $j];
                                }
                                ?>
                            </td>
                        <?php } ?>
                    </tr>
                <?php
                }
                ?>
            </table>
    <?php
        }
    }
    ?>
</body>
</html>