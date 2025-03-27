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
        th{
            background-color:rgb(255, 0, 0);
            color:black;
            font-weight: bold;
            font-size: large;
            height: 50px;
        }
    </style>
</head>
<body>
    <?php
    $samsul = array("samsul1" => "Samsung Galaxy S22", "samsul2" => "Samsung Galaxy 22+", "samsul3" => "Samsung Galaxy A03", "samsul4" => "Samsung Galaxy Xcover");
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