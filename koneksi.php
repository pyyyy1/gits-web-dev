<?php
$servername = "localhost"; // Ganti dengan nama server Anda jika berbeda
$username = "root"; // Ganti dengan username MySQL Anda
$password = ""; // Ganti dengan password MySQL Anda
$dbname = "git_nilai_mahasiswa"; // Ganti dengan nama database Anda

// Membuat koneksi ke database
$conn = new mysqli($servername, $username, $password, $dbname);

// Memeriksa koneksi
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
