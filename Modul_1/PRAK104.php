<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEST</title>
    <style>
        table{
            border-spacing: 1;
            border:  solid black;
            border-collapse: separate;
        }
        th,td{
            border: solid black;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    $samsul = array("Samsung Galaxy S22", "Samsung Galaxy 22+", "Samsung Galaxy A03", "Samsung Galaxy Xcover");
    ?>
    <table>
    <tr>
        <th>Daftar Smartphone Samsung</th>
    </tr>
    <?php
    foreach ($samsul as $items) {
            echo "<tr><td>$items</td></tr>";}
    ?>
    </table>
</body>
</html>