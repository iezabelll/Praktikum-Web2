<?php
include("koneksi.php");
$query = mysqli_query($conn, "SELECT pesanan.*, pesanan.id as idpesanan ,produk.* FROM pesanan JOIN produk ON pesanan.produk_id = produk.id");

$pesandetail = mysqli_query($conn, "SELECT * FROM pesanan WHERE id=7");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <title>INISTORE</title>
</head>

<body class="bg-light">

    <!-- Header -->
    <nav style="height: 12vh;" class="navbar navbar-expand-lg navbar-light bg-light fixed-bottom shadow">
        <div class="container">
            <button type="button" class="btn btn-primary btn-lg">Check Out</button>
            <a href="index.php">
                <button type="button" class="btn btn-secondary btn-lg">Back</button>
            </a>
        </div>
    </nav>

    <!-- Tabel -->

    <div class="container bg-white mt-5 pt-1 pb-5 mb-5 shadow rounded-lg">
        <h1 align="center" style="margin: 20px;">Detail Pesanan</h1>

        <?php foreach ($query as $data) { ?>
            <div class="card mb-2 rounded-lg">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-3">
                            <?php
                            if ($data["kategori_produk_id"] == 1) { ?>
                                <img id="myImg" src="asset/sepatu.jpeg" style="height: 30vh" class="img-thumbnail" alt="...">
                            <?php
                            } elseif ($data["kategori_produk_id"] == 2) { ?>
                                <img id="myImg" src="asset/Baju.jpeg" style="height: 23vh" class="img-thumbnail" alt="...">
                            <?php
                            } else { ?>
                                <img id="myImg" src="asset/celana.jpg" style="height: 21vh" class="img-thumbnail" alt="...">
                            <?php
                            } ?>
                        </div>
                        <div class="col-md-5">
                            <h3><?php echo $data['nama']; ?></h3>
                            <h2>Rp <span style="color:red"><?= number_format($data["harga_jual"], 2, ",", "."); ?></span></h2><br>
                            <span>Nama Pemesan : <?= $data['nama_pemesan'] ?></span><br>
                            <span>Alamat : <?= $data['alamat_pemesan'] ?></span><br>
                            <span>Jumlah : <?= $data['jumlah_pesanan'] ?></span><br>
                            <span>No Hp : <?= $data['no_hp'] ?></span>
                        </div>
                        <div class="col-md-4">
                            <a href="editPesanan.php?id=<?php echo $data['idpesanan'] ?>">
                                <button type="button" style="height:30vh; width:20vh" class="btn btn-warning btn-lg" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap"><i class="fas fa-pencil-alt"></i><br>Edit</button>
                            </a>
                            <a href="hapusPesanan.php?id=<?php echo $data['idpesanan'] ?>">
                                <button type="button" style="height:30vh; width:20vh" class="btn btn-danger btn-lg"><i class="fas fa-trash-alt"></i><br>Delete</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        <?php
        } ?>
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