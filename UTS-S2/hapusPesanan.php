<?php

include 'koneksi.php';

$id = $_GET['id'];

$query = mysqli_query(
    $conn,
    "DELETE FROM pesanan WHERE id=$id"
);

if ($query) {
    header('location:order.php');
} else {
    echo "gakbisa hapus";
}