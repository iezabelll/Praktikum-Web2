<?php
include 'koneksi.php';
$code = $_POST['code']; 
$nama  = $_POST['nama'];
$harga_jual = $_POST['harga_jual'];
$harga_beli = $_POST['harga_beli'];
$stock = $_POST['stock'];
$minstock = $_POST['min_stock'];
$deskripsi = $_POST['deskripsi'];
$kategori = $_POST['kategori_produk_id'];



$query = mysqli_query(
    $conn,
    "INSERT INTO produk(code,nama,harga_jual,harga_beli,stock,min_stock,deskripsi,kategori_produk_id)
    VALUES ('$code','$nama','$harga_jual','$harga_beli','$stock','$minstock','$deskripsi','$kategori')"
);

if ($query == 1) {
    header('location: produk.php');
} else {
    echo mysqli_error($con);
}
