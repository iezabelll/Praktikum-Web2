<?php
include 'koneksi.php';
$date = $_POST['tanggal'];
$nama = $_POST['nama_pemesan'];
$alamat = $_POST['alamat_pemesan'];
$no = $_POST['no_hp'];
$email = $_POST['email'];
$jumlah = $_POST['jumlah_pesanan'];
$desc = $_POST['deskripsi'];
$produk = $_POST['produk_id'];



$query = mysqli_query(
    $conn,
    "INSERT INTO pesanan(tanggal,nama_pemesan,alamat_pemesan,no_hp,email,jumlah_pesanan,deskripsi,produk_id)
    VALUES ('$date','$nama','$alamat','$no','$email','$jumlah','$desc','$produk')"
);

if ($query == 1) {
    header('location: order.php');
} else {
    echo mysqli_error($conn);
}
