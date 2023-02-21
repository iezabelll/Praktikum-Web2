<?php
// Array asosiatif
$nilai1 = ["Id" => 1, "Nim" => "01101", "Uts" => 80, "Uas" => 84, "Tugas" => 78];
$nilai2 = ["Id" => 2, "Nim" => "01102", "Uts" => 85, "Uas" => 94, "Tugas" => 100];
$nilai3 = ["Id" => 3, "Nim" => "01103", "Uts" => 90, "Uas" => 100, "Tugas" => 100];
$nilai4 = ["Id" => 4, "Nim" => "01104", "Uts" => 95, "Uas" => 100, "Tugas" => 78];

// Array Multidimensi
$kumpulan_nilai = [$nilai1, $nilai2, $nilai3, $nilai4];

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

    <title>Hello, world!</title>
</head>

<body>
    <div class="container">
        <h1 class="text-center">Daftar Nilai Siswa</h1>
    </div>

    <table class="table">
        <thead class="thead-dark">
            <tr>
                <th scope="col">No</th>
                <th scope="col">Nim</th>
                <th scope="col">UTS</th>
                <th scope="col">UAS</th>
                <th scope="col">Tugas</th>
                <th scope="col">Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach ($kumpulan_nilai as $Nilai):?>
            <tr>
                <?php $Nilaiakhir = ($Nilai["Uts"] + $Nilai["Uas"] + $Nilai["Tugas"]) / 3; ?>
                <td><?= $Nilai["Id"]?></td>
                <td><?= $Nilai["Nim"]?></td>
                <td><?= $Nilai["Uts"]?></td>
                <td><?= $Nilai["Uas"]?></td>
                <td><?= $Nilai["Tugas"]?></td>
                <td><?= number_format($Nilaiakhir, 2, ",", ".")  ?></td>
            </tr>

            <?php endforeach?>
        </tbody>
    </table>




    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous"></script>
</body>

</html>