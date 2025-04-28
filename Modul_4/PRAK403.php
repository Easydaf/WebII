<?php
$data = [
    [
        'nama' => 'Ridho',
        'mata_kuliah' => [
            ['nama_mk' => 'Pemrograman I', 'sks' => 2],
            ['nama_mk' => 'Praktikum Pemrograman I', 'sks' => 1],
            ['nama_mk' => 'Pengantar Lingkungan Lahan Basah', 'sks' => 2],
            ['nama_mk' => 'Arsitektur Komputer', 'sks' => 3]
        ]
    ],
    [
        'nama' => 'Ratna',
        'mata_kuliah' => [
            ['nama_mk' => 'Basis Data I', 'sks' => 2],
            ['nama_mk' => 'Praktikum Basis Data I', 'sks' => 1]
        ]
    ],
    [
        'nama' => 'Tono',
        'mata_kuliah' => [
            ['nama_mk' => 'Kalkulus', 'sks' => 3],
            ['nama_mk' => 'Rekayasa Perangkat Lunak', 'sks' => 3],
            ['nama_mk' => 'Analisis dan Perancangan Sistem', 'sks' => 3],
            ['nama_mk' => 'Komputasi Awan', 'sks' => 3],
            ['nama_mk' => 'Kecerdasan Bisnis', 'sks' => 3]
        ]
    ]
];

foreach ($data as $key => $value) {
    $total_sks = 0;
    foreach ($value['mata_kuliah'] as $mk) {
        $total_sks += $mk['sks'];
    }
    $data[$key]['total_sks'] = $total_sks;
    $data[$key]['keterangan'] = ($total_sks < 7) ? 'Revisi KRS' : 'Tidak Revisi';
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Output KRS</title>
    <style>
        table {
            border-collapse: collapse;
            width: 90%;
        }
        th, td {
            border: 1px solid black;
            padding: 5px;
        }
        th {
            background-color: #ddd;
        }
        .hijau {
            background-color: green;
            color: white;
            text-align: center;
        }
        .merah {
            background-color: red;
            color: white;
            text-align: center;
        }
    </style>
</head>
<body>

<h3>Cetak hasil output seperti berikut:</h3>

<table>
    <tr>
        <th>No</th>
        <th>Nama</th>
        <th>Mata Kuliah diambil</th>
        <th>SKS</th>
        <th>Total SKS</th>
        <th>Keterangan</th>
    </tr>

    <?php
    $no = 1;
    foreach ($data as $mhs) {
        $rowspan = count($mhs['mata_kuliah']);
        echo "<tr>";
        echo "<td rowspan='$rowspan'>{$no}</td>";
        echo "<td rowspan='$rowspan'>{$mhs['nama']}</td>";

        $first_mk = array_shift($mhs['mata_kuliah']);
        echo "<td>{$first_mk['nama_mk']}</td>";
        echo "<td>{$first_mk['sks']}</td>";

        echo "<td rowspan='$rowspan'>{$mhs['total_sks']}</td>";
        $class = ($mhs['keterangan'] == 'Tidak Revisi') ? 'hijau' : 'merah';
        echo "<td rowspan='$rowspan' class='$class'>{$mhs['keterangan']}</td>";
        echo "</tr>";

        foreach ($mhs['mata_kuliah'] as $mk) {
            echo "<tr>";
            echo "<td>{$mk['nama_mk']}</td>";
            echo "<td>{$mk['sks']}</td>";
            echo "</tr>";
        }

        $no++;
    }
    ?>
</table>

</body>
</html>
