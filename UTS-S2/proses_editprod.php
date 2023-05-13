<?php
include 'koneksi.php';
$id = $_POST['id']; 
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
    "UPDATE produk set code='$code',nama='$nama',harga_jual='$harga_jual',harga_beli='$harga_beli',stock='$stock',
    min_stock='$minstock',deskripsi='$deskripsi',kategori_produk_id='$kategori' WHERE id=$id"
);
if ($query) {
    header('location:produk.php');
} else {
    echo mysqli_error($conn);
}