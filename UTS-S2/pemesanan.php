<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM produk WHERE id=$id");
$pesan = mysqli_query($conn, "SELECT * FROM pesanan");
$kategori = mysqli_query($conn, "SELECT * FROM kategori_produk");
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
    <title>INISTORE</title>
</head>
<body>
    <!-- Header -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <div class="container">
            <a class="navbar-brand" href="#">INISTORE</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                        Kategori
                        </a>
                        <div class="dropdown-menu">
                        <a class="dropdown-item" href="index.php.#sneakers">Sneakers</a>
                        <a class="dropdown-item" href="index.php.#baju">Baju</a>
                        <a class="dropdown-item" href="index.php.#celana">Celana</a>
                    </li>
                </ul>
            </div>
            <form class="form-inline my-2 my-lg-0">
                <a href="order.php">
                    <button type="button" class="btn btn-outline-secondary border-0"><i class="fas fa-shopping-cart"></i></button>
                </a>
                <a href="produk.php">
                    <button type="button" class="btn btn-outline-secondary border-0"><i class="fas fa-sign-in"></i></button>
                </a>
            </form>
        </div>
    </nav>
    
    <div class="container-fluid mt-2">
    <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page"><?php foreach ($query as $data ) { echo $data['nama'];}  ?></li>
        </ol>
    </nav>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-5">
            <?php
            foreach ($query as $data) {
                if ($data["kategori_produk_id"] == 1) { ?>
                    <img id="myImg" src="asset/sepatu.jpeg" class="img-thumbnail" alt="...">
                    <?php
                } elseif ($data["kategori_produk_id"] == 2) { ?>
                    <img id="myImg" src="asset/Baju.jpeg" class="img-thumbnail" alt="...">
                    <?php
                } else { ?>
                    <img id="myImg" src="asset/celana.jpg" class="img-thumbnail" alt="...">
                    <?php
                } }?>
            </div>



                <!-- The Modal -->
                <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
                </div>


                
            <div class="col-md-7">
                <h1><?php foreach ($query as $data ) { echo $data['nama'];}  ?></h1>
                <span>
                    <i class="fas fa-star" style="color: #ffd500;"></i>
                    <i class="fas fa-star" style="color: #ffd500;"></i>
                    <i class="fas fa-star" style="color: #ffd500;"></i>
                    <i class="fas fa-star" style="color: #ffd500;"></i>
                    <i class="fas fa-star-half-alt" style="color: #ffd500;"></i>
                </span>
                <span style="margin-left: 10px; color: gray;">100 Terjual</span>
                <h1 style="font-size: 10vh;">Rp <?php foreach ($query as $data ) { echo number_format($data["harga_jual"],2,",","."); }  ?></h1><br><br>
                <span><?php foreach ($query as $data ) { echo $data['deskripsi'];}  ?></span>
                <br><br>
                <!-- Button trigger modal -->
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal" data-whatever="@getbootstrap">Pesan Barang</button>

                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Pesan Barang</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="prosesPesan.php" method="POST">
                                <div class="form-group col-md-12">
                                    <label for="nama">Nama Barang</label>
                                    <input type="hidden" name="produk_id" value="<?php foreach ($query as $data ) { echo $data['id'];}  ?>">
                                    <input type="text" class="form-control" name="" id="nama" value="<?php foreach ($query as $data ) { echo $data['nama'];}  ?>" disabled>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="namacust">Nama Pemesan</label>
                                    <input type="text" class="form-control" name="nama_pemesan" id="namacust">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="alamat">Alamat</label>
                                    <textarea class="form-control" id="alamat" name="alamat_pemesan" rows="3"></textarea>
                                </div>
                                <div class="form-row col-md-12">
                                    <div class="form-group col-md-6">
                                        <label for="tanggal">Tanggal Transaksi</label>
                                        <input type="date" class="form-control" name="tanggal" id="tanggal">
                                    </div>
                                    <div class="form-group col-md-6">
                                        <label for="jumlah">Jumlah Pesanan</label>
                                        <input type="number" class="form-control" name="jumlah_pesanan" id="jumlah">
                                    </div>
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="Nocust">Nomer Hp</label>
                                    <input type="number" class="form-control" name="no_hp" id="Nocust">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="email">Email</label>
                                    <input type="email" class="form-control" name="email" id="email">
                                </div>
                                <div class="form-group col-md-12">
                                    <label for="desc">Deskripsi pesanan</label>
                                    <input type="text" class="form-control" name="deskripsi" id="desc">
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary" onclick="alert('Pesanan Anda Berhasil Dimasukan Kedalam Keranjang')">Beli</button>
                                </div>
                            </form>
                        </div>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    <!-- <script>
        // Get the modal
        var modal = document.getElementById("myModal");

        // Get the image and insert it inside the modal - use its "alt" text as a caption
        var img = document.getElementById("myImg");
        var modalImg = document.getElementById("img01");
        var captionText = document.getElementById("caption");
        img.onclick = function(){
        modal.style.display = "block";
        modalImg.src = this.src;
        captionText.innerHTML = this.alt;
        }

        // Get the <span> element that closes the modal
        var span = document.getElementsByClassName("close")[0];

        // When the user clicks on <span> (x), close the modal
        span.onclick = function() { 
        modal.style.display = "none";
        }
    </script> -->
</body>
</html>