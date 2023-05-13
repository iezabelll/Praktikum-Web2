<?php
include("koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM produk");
// $kategori = mysqli_query($conn, "SELECT * FROM kategori_produk");
$sql1 = mysqli_query($conn, "SELECT * FROM produk WHERE kategori_produk_id = 1");
$sql2 = mysqli_query($conn, "SELECT * FROM produk WHERE kategori_produk_id = 2");
$sql3 = mysqli_query($conn, "SELECT * FROM produk WHERE kategori_produk_id = 3");
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
    <style>
        .scrolling-wrapper {
            overflow-x: auto;
        }
    </style>
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
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-expanded="false">
                            Kategori
                        </a>
                        <div class="dropdown-menu">
                            <a class="dropdown-item" href="#sneakers">Sneakers</a>
                            <a class="dropdown-item" href="#baju">Baju</a>
                            <a class="dropdown-item" href="#celana">Celana</a>
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
    <!-- banner -->
    <div class="container">
        <img src="asset/banner.jpg" style="height:68vh" alt="">
    </div>
    <div class="container mt-5">
        <h1 id="sneakers">Sneakers</h1>
        <div class="container scrolling-wrapper row flex-row flex-nowrap ">
            <div class="row flex-row flex-nowrap">
                <!-- <div class="col-md-12"> -->
                <?php
                $no = 1;
                foreach ($sql1 as $data) {
                ?>

                    <div class="card" style="width: 15rem; margin:10px">
                        <a href="pemesanan.php?id=<?= $data['id'] ?>">
                            <img src="asset/sepatu.jpeg" class="card-img-top" alt="sepatu">
                        </a>
                        <div class="card-body">
                            <span>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star-half-alt" style="color: #ffd500;"></i>
                            </span>
                            <p><?= $data["nama"] ?></p>
                            <h5>Rp <?= number_format($data["harga_jual"], 2, ",", "."); ?></h5>
                            <p align="right" style="margin-top: 30px; font-size:small"> 100 Terjual</p>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 id="baju">Baju</h1>
        <div class="container scrolling-wrapper row flex-row flex-nowrap ">
            <div class="row flex-row flex-nowrap">
                <!-- <div class="col-md-12"> -->
                <?php
                $no = 1;
                foreach ($sql2 as $data) {
                ?>

                    <div class="card" style="width: 15rem; margin:10px">
                        <a href="pemesanan.php?id=<?= $data['id'] ?>">
                            <img src="asset/Baju.jpeg" class="card-img-top" alt="sepatu">
                        </a>
                        <div class="card-body">
                            <span>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star-half-alt" style="color: #ffd500;"></i>
                            </span>
                            <p><?= $data["nama"] ?></p>
                            <h5>Rp <?= number_format($data["harga_jual"], 2, ",", "."); ?></h5>
                            <p align="right" style="margin-top: 30px; font-size:small"> 500 Terjual</p>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- </div> -->
            </div>
        </div>
    </div>
    <div class="container mt-5">
        <h1 id="celana">Celana</h1>
        <div class="container scrolling-wrapper row flex-row flex-nowrap ">
            <div class="row flex-row flex-nowrap">
                <!-- <div class="col-md-12"> -->
                <?php
                $no = 1;
                foreach ($sql3 as $data) {
                ?>

                    <div class="card" style="width: 15rem; margin:10px">
                        <a href="pemesanan.php?id=<?= $data['id'] ?>">
                            <img src="asset/Celana.jpg" class="card-img-top" alt="sepatu">
                        </a>
                        <div class="card-body">
                            <span>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star" style="color: #ffd500;"></i>
                                <i class="fas fa-star-half-alt" style="color: #ffd500;"></i>
                            </span>
                            <p><?= $data["nama"] ?></p>
                            <h5>Rp <?= number_format($data["harga_jual"], 2, ",", "."); ?></h5>
                            <p align="right" style="margin-top: 30px; font-size:small"> 100 Terjual</p>
                        </div>
                    </div>
                <?php
                }
                ?>
                <!-- </div> -->
            </div>
        </div>
    </div>


    <!-- Remove the container if you want to extend the Footer to full width. -->
    <div class="navbar-expand-lg mt-5">

        <!-- Footer -->
        <footer class="text-center text-lg-start text-white" style="background-color: #1c2331">
            <!-- Section: Social media -->
            <section class="d-flex justify-content-between p-4" style="background-color: #6351ce">
                <!-- Left -->
                <div class="me-5">
                    <span>Get connected with us on social networks:</span>
                </div>
                <!-- Left -->

                <!-- Right -->
                <div>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-google"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="" class="text-white me-4">
                        <i class="fab fa-github"></i>
                    </a>
                </div>
                <!-- Right -->
            </section>
            <!-- Section: Social media -->

            <!-- Section: Links  -->
            <section class="">
                <div class="container text-center text-md-start mt-5">
                    <!-- Grid row -->
                    <div class="row mt-3">
                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-4 col-xl-3 mx-auto mb-4">
                            <!-- Content -->
                            <h6 class="text-uppercase fw-bold">INISTORE</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                INISTORE adalah situs belanja online fesyen dan kecantikan ternama di Indonesia.
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Products</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#sneakers" class="text-white">Sneakers</a>
                            </p>
                            <p>
                                <a href="#baju" class="text-white">Baju</a>
                            </p>
                            <p>
                                <a href="#celana" class="text-white">Celana</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Useful links</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p>
                                <a href="#!" class="text-white">Your Account</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Become an Affiliate</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Shipping Rates</a>
                            </p>
                            <p>
                                <a href="#!" class="text-white">Help</a>
                            </p>
                        </div>
                        <!-- Grid column -->

                        <!-- Grid column -->
                        <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mb-md-0 mb-4">
                            <!-- Links -->
                            <h6 class="text-uppercase fw-bold">Contact</h6>
                            <hr class="mb-4 mt-0 d-inline-block mx-auto" style="width: 60px; background-color: #7c4dff; height: 2px" />
                            <p><i class="fas fa-home mr-3"></i> Jl. Situ Indah 116, Tugu, Cimanggis, Depok, Jawa Barat.</p>
                            <p><i class="fas fa-envelope mr-3"></i> inistore@gmail.com</p>
                            <p><i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                            <p><i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                        </div>
                        <!-- Grid column -->
                    </div>
                    <!-- Grid row -->
                </div>
            </section>
            <!-- Section: Links  -->

            <!-- Copyright -->
            <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2)">
                © 2020 Copyright:
                <a class="text-white" href="#">INISTORE.com</a>
            </div>
            <!-- Copyright -->
        </footer>
        <!-- Footer -->

    </div>
    <!-- End of .container -->


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init();
    </script>
    </div>
</body>

</html>