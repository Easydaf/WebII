<?php
require_once 'Koneksi.php';

// ------------------- MEMBER -------------------
function getAllMember() {
    $koneksi = koneksiDatabase();
    $query = "SELECT * FROM member";
    return mysqli_query($koneksi, $query);
}

function getMemberById($id) {
    $koneksi = koneksiDatabase();
    $query = "SELECT * FROM member WHERE id_member = $id";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

function insertMember($nama, $alamat, $nomor) {
    $koneksi = koneksiDatabase();
    $query = "INSERT INTO member (nama_member, alamat, nomor_member) 
            VALUES ('$nama', '$alamat', '$nomor')";
    return mysqli_query($koneksi, $query);
}

function updateMember($id, $nama, $alamat, $nomor) {
    $koneksi = koneksiDatabase();
    $query = "UPDATE member 
            SET nama_member='$nama', alamat='$alamat', nomor_member='$nomor'WHERE id_member=$id";
    return mysqli_query($koneksi, $query);
}

function deleteMember($id) {
    $koneksi = koneksiDatabase();
    $query = "DELETE FROM member WHERE id_member='$id'";
    return mysqli_query($koneksi, $query);
}



//untuk buku
// ------------------- BUKU -------------------
function getAllBuku() {
    $koneksi = koneksiDatabase();
    $query = "SELECT * FROM buku";
    return mysqli_query($koneksi, $query);
}

function getBukuById($id) {
    $koneksi = koneksiDatabase();
    $query = "SELECT * FROM buku WHERE id_buku = $id";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

function insertBuku($judul, $penulis, $penerbit, $tahun) {
    $koneksi = koneksiDatabase();
    $query = "INSERT INTO buku (judul_buku, penulis, penerbit, tahun_terbit) VALUES ('$judul', '$penulis', '$penerbit', $tahun)";
    return mysqli_query($koneksi, $query);
}

function updateBuku($id, $judul, $penulis, $penerbit, $tahun) {
    $koneksi = koneksiDatabase();
    $query = "UPDATE buku SET judul_buku='$judul', penulis='$penulis', penerbit='$penerbit', tahun_terbit=$tahun WHERE id_buku = $id";
    return mysqli_query($koneksi, $query);
}

function deleteBuku($id) {
    $koneksi = koneksiDatabase();
    $query = "DELETE FROM buku WHERE id_buku = $id";
    return mysqli_query($koneksi, $query);
}


//untuk peminjaman
// ------------------- PEMINJAMAN -------------------
function getAllPeminjaman() {
    $koneksi = koneksiDatabase();
    $query = "SELECT peminjaman.*, buku.judul_buku, member.nama_member 
            FROM peminjaman 
            JOIN buku ON peminjaman.id_buku = buku.id_buku 
            JOIN member ON peminjaman.id_member = member.id_member";
    return mysqli_query($koneksi, $query);
}

function getPeminjamanById($id) {
    $koneksi = koneksiDatabase();
    $query = "SELECT * FROM peminjaman WHERE id_peminjaman = $id";
    $result = mysqli_query($koneksi, $query);
    return mysqli_fetch_assoc($result);
}

function insertPeminjaman($tgl_pinjam, $tgl_kembali, $id_buku, $id_member) {
    $koneksi = koneksiDatabase();
    $query = "INSERT INTO peminjaman (tgl_pinjam, tgl_kembali, id_buku, id_member)
            VALUES ('$tgl_pinjam', '$tgl_kembali', $id_buku, $id_member)";
    return mysqli_query($koneksi, $query);
}

function updatePeminjaman($id, $tgl_pinjam, $tgl_kembali, $id_buku, $id_member) {
    $koneksi = koneksiDatabase();
    $query = "UPDATE peminjaman SET 
            tgl_pinjam='$tgl_pinjam', 
            tgl_kembali='$tgl_kembali', 
            id_buku=$id_buku, 
            id_member=$id_member 
            WHERE id_peminjaman=$id";
    return mysqli_query($koneksi, $query);
}

function deletePeminjaman($id) {
    $koneksi = koneksiDatabase();
    $query = "DELETE FROM peminjaman WHERE id_peminjaman=$id";
    return mysqli_query($koneksi, $query);
}

?>