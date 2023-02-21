

<?php
//echo "Hello World";

$nama = "Eza";
$jurusan = "Teknik Informatika";
$semester = 2;

echo "Nama saya adalah : {$nama}";
?> 

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2> <?php echo $nama; ?> </h2>

    <p>
        Saya kuliah deangan jurusan <?= $jurusan; ?>
    </p>

    <p>
        Saat ini saya semerter <?= $semester; ?>
    </p>
</body>
</html>

