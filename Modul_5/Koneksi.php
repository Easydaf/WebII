<?php
function koneksiDatabase() {$host = "localhost"; $user = "root"; $password = "";$database = "perpustakaan";

    $koneksi = mysqli_connect($host, $user, $password, $database);

    if (!$koneksi) {
        die("Koneksi gagal: " . mysqli_connect_error());
    }

    return $koneksi;
}
?>