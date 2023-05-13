<?php
include("koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>Detail Produk</title>
</head>
<body>

<!-- Header -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">INISTORE</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
            <a class="nav-link" href="index.php">Dashboard<span class="sr-only"></span></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="produk.php">Produk</a>
        </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>

<!-- Tabel -->

<div class="container-fluid mt-5">
    <h1>Detail Produk</h1>
<a href="tambah_produk.php">
    <button type="button" class="btn btn-outline-primary mb-3">Tambah Data</button>
</a>
<table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">No</th>
        <th scope="col">Nama Barang</th>
        <th scope="col">Harga</th>
        <th scope="col">Code barang</th>
        <th scope="col">Stock</th>
        <th scope="col">Kategori</th>
        <th scope="col"></th>
        </tr>
    </thead>
    <tbody>
        <?php
            $no = 1;
            foreach ($query as $data) {
        ?>
        <tr>
        <th scope="row"><?= $no ?></th>
        <td><?= $data["nama"]; ?></td>
        <td><?= $data["harga_jual"]; ?></td>
        <td><?= $data["code"]; ?></td>
        <td><?= $data["stock"]; ?></td>
        <td>
            <?php if ($data["kategori_produk_id"] == 1) { ?>
                <span class="badge badge-info">Sneakers</span>
                <?php
            } elseif ($data["kategori_produk_id"] == 2) { ?>
                <span class="badge badge-secondary">Baju</span>
                <?php
            } else { ?>
                <span class="badge badge-success">Celana</span>
                <?php
            } ?>
        </td>
        <td>
            <a href="editprod.php?id=<?= $data['id'] ?>">
            <span class="badge badge-warning"><i class="fas fa-pencil-alt"></i></span>
            </a>
            <a href="hapus.php?id=<?php echo $data['id'] ?>">
                <span onclick="return confirm('Are You Sure?')" class="badge badge-danger ml-3"><i class="fas fa-trash-alt"></i></span>
            </a>
        </td>
        </tr>
        <?php
            $no++;
        } ?>
    </tbody>
</table>
</div>


<!-- <span class="badge badge-info">Info</span> -->

    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
</body>
</html>