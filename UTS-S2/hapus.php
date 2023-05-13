<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "DELETE FROM produk WHERE id=$id"
);

if ($query) {
    header('location:produk.php');
} else {
    echo "gakbisa hapus";
}