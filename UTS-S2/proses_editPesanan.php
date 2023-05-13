<?php
include 'koneksi.php';
$id = $_POST['id'];
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
    "UPDATE pesanan set tanggal='$date',nama_pemesan='$nama',alamat_pemesan='$alamat',no_hp='$no',email='$email',
    jumlah_pesanan='$jumlah',deskripsi='$desc',produk_id='$produk' WHERE id='$id'"
);

if ($query == 1) {
    header('location: order.php');
} else {
    echo "Gagal Update";
}
