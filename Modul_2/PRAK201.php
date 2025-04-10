<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <title>Soal 1</title>
</head>
<body>
    <form action="" method="post">
        <input type="text" name="name1"><br>
        <input type="text" name="name2"><br>
        <input type="text" name="name3"><br>
        <button type="submit" name="btn">Urutkan</button>
    </form>

    <?php
    if (isset($_POST['btn'])) {
        $name1 = $_POST['name1'];
        $name2 = $_POST['name2'];
        $name3 = $_POST['name3'];

        $names = array($name1, $name2, $name3);
        ksort($names);

        echo "<h2>Nama yang sudah diurutkan:</h2>";
        foreach ($names as $name) {
            echo $name . "<br>";
        }
    }
    ?>
</body>
</html>
