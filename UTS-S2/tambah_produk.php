<?php
include("koneksi.php");
$query = mysqli_query($conn, "SELECT * FROM produk");
$kategori = mysqli_query($conn, "SELECT * FROM kategori_produk");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <title>INISTORE</title>
</head>
<body>
    <div class="container shadow rounded-lg p-3 pb-4 mt-3">
        <div class="container-fluid">
        <h1>Tambah Data Produk</h1>
        <hr>
        <form action="proses_tambahproduk.php" method="POST">
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="nama">Nama Barang</label>
                    <input type="text" class="form-control" name="nama" id="nama">
                </div>
                <div class="form-group col-md-6">
                    <label for="code">Code Barang</label>
                    <input type="text" class="form-control" name="code" id="code">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="jual">Harga Jual</label>
                    <input type="number" class="form-control" name="harga_jual" id="jual">
                </div>
                <div class="form-group col-md-6">
                    <label for="beli">Harga Beli</label>
                    <input type="number" class="form-control" name="harga_beli" id="beli">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                    <label for="stock">Stock</label>
                    <input type="number" class="form-control" name="stock" id="stock">
                </div>
                <div class="form-group col-md-6">
                    <label for="minstock">Minimal Stock</label>
                    <input type="number" class="form-control" name="min_stock" id="minstock">
                </div>
            </div>
            <div class="form-group">
                <label for="deskripsi">Deskripsi Produk</label>
                <textarea class="form-control" id="deskripsi" name="deskripsi" rows="3"></textarea>
            </div>
            <div class="form-row">
                <div class="form-group col-md-4">
                    <label for="kategori">Kategori</label>
                    <select id="kategori" name="kategori_produk_id" class="form-control">
                        <option hidden>--= Pilih Kategori =--</option>
                            <?php
                            foreach ($kategori as $data) {
                            ?>
                            <option value="<?= $data['id'] ?>">
                                <?php
                                if ($data['id'] == 1) {
                                    echo "Sneakers";
                                } elseif ($data['id'] == 2) {
                                    echo "Baju";
                                } else {
                                    echo "Celana";
                                }
                                ?></option>
                            <?php
                                # code...
                            }
                            ?>
                    </select>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
        </div>
    </div>


    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>
</html>