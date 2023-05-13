<?php
$host = "localhost"; // ganti sesuai host Anda
$username = "root"; // ganti sesuai username Anda
$password = ""; // ganti sesuai password Anda
$database = "ecommerce"; // ganti sesuai nama database Anda

// Membuat koneksi ke database
$conn = mysqli_connect($host, $username, $password, $database);

// Cek koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>