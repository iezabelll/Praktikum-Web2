<?php
include("koneksi.php");
$id = $_GET['id'];
$query = mysqli_query($conn, "SELECT * FROM pesanan WHERE id=$id");
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
            <h1>Edit Pesanan</h1>
            <hr>
            <?php
            foreach ($query as $data) {
            ?>
                <form action="proses_editPesanan.php" method="POST">
                    <div class="form-group col-md-12">
                        <label for="namacust">Nama Pemesan</label>
                        <input type="hidden" name="id" value="<?php echo $data['id']  ?>">
                        <input type="hidden" name="produk_id" value="<?php echo $data['produk_id']  ?>">
                        <input type="text" class="form-control" name="nama_pemesan" id="namacust" value="<?php echo $data['nama_pemesan'] ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="alamat">Alamat</label>
                        <textarea class="form-control" id="alamat" name="alamat_pemesan" rows="3"><?php echo $data['alamat_pemesan']  ?></textarea>
                    </div>
                    <div class="form-row col-md-12">
                        <div class="form-group col-md-6">
                            <label for="tanggal">Tanggal Transaksi</label>
                            <input type="date" class="form-control" name="tanggal" id="tanggal" value="<?php echo $data['tanggal']  ?>" disabled>
                        </div>
                        <div class="form-group col-md-6">
                            <label for="jumlah">Jumlah Pesanan</label>
                            <input type="number" class="form-control" name="jumlah_pesanan" id="jumlah" value="<?php echo $data['jumlah_pesanan']  ?>">
                        </div>
                    </div>
                    <div class="form-group col-md-12">
                        <label for="Nocust">Nomer Hp</label>
                        <input type="number" class="form-control" name="no_hp" id="Nocust" value="<?php echo $data['no_hp']  ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" id="email" value="<?php echo $data['email']  ?>">
                    </div>
                    <div class="form-group col-md-12">
                        <label for="desc">Deskripsi pesanan</label>
                        <input type="text" class="form-control" name="deskripsi" id="desc" value="<?php echo $data['deskripsi']  ?>">
                    </div>
                    <div class="modal-footer">
                        <a href="order.php">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        </a>
                        <button type="submit" class="btn btn-primary" onclick="alert('Pesanan Anda Berhasil di Ubah')">Done</button>
                    </div>
                </form>
            <?php
            }
            ?>
        </div>
    </div>
    <!-- js -->
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>