<!DOCTYPE html>
<html lang="en">
<head>
    <title>TEST</title>
    <style>
        table{
            border: double black;
            border-collapse: collapse;
        }
        th,td{
            border: 2px solid black;
            border-collapse: collapse;
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