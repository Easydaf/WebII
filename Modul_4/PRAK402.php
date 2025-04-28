<!DOCTYPE html>
<html>

<head>
    <title>PRAK402</title>
</head>

<body>

    <?php
    $mahasiswa = [
        [
            "nama" => "Andi",
            "nim" => "2101001",
            "uts" => 87,
            "uas" => 65
        ],
        [
            "nama" => "Budi",
            "nim" => "2101002",
            "uts" => 76,
            "uas" => 79
        ],
        [
            "nama" => "Tono",
            "nim" => "2101003",
            "uts" => 50,
            "uas" => 41
        ],
        [
            "nama" => "Jessica",
            "nim" => "2101004",
            "uts" => 60,
            "uas" => 75
        ],
    ];

    foreach ($mahasiswa as $key => $data) {
        $nilaiAkhir = (0.4 * $data["uts"]) + (0.6 * $data["uas"]);
        $mahasiswa[$key]["nilai_akhir"] = $nilaiAkhir;

        if ($nilaiAkhir >= 80) {
            $huruf = "A";
        } elseif ($nilaiAkhir >= 70) {
            $huruf = "B";
        } elseif ($nilaiAkhir >= 60) {
            $huruf = "C";
        } elseif ($nilaiAkhir >= 50) {
            $huruf = "D";
        } else {
            $huruf = "E";
        }

        $mahasiswa[$key]["huruf"] = $huruf;
    }
    ?>

    <!-- 3. Tampilkan tabel -->
    <table border="1" cellpadding="5" cellspacing="0">
        <tr>
            <th>Nama</th>
            <th>NIM</th>
            <th>Nilai UTS</th>
            <th>Nilai UAS</th>
            <th>Nilai Akhir</th>
            <th>Huruf</th>
        </tr>

        <?php foreach ($mahasiswa as $data) : ?>
            <tr>
                <td><?= $data["nama"] ?></td>
                <td><?= $data["nim"] ?></td>
                <td><?= $data["uts"] ?></td>
                <td><?= $data["uas"] ?></td>
                <td><?= number_format($data["nilai_akhir"], 1) ?></td>
                <td><?= $data["huruf"] ?></td>
            </tr>
        <?php endforeach; ?>

    </table>

</body>

</html>