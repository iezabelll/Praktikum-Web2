<?php
// Buat Array

// $animals = ["Kucing", "ayam", "Ikan", "Burung"];

// echo $animals[0]. "<br>";
// echo $animals[2]. "<br>";
// echo $animals[3]. "<br>";

// foreach ($animals as $animal) {
//     echo "<li> {$animal} </li>";
// };

// Array asosiatif

// $mahasiswa = ["Nama"=>"Eza", "Umur"=>"20", "Alamat"=>"Bali"];

// echo $mahasiswa["Nama"];

// foreach ($mahasiswa as $key => $value) {
//     echo "{$key} : {$value}";
//     echo "<br>";
// }

// Array Multidimensi

$dosen = [
    ["Pak Rojul", "Web"],
    ["Pak Reza", "DDP"],
    ["Pak Lukman", "SO"]
];

echo $dosen[0][0];

foreach ($dosen as $dsn) {
    echo "Nama Dosen : {$dsn[0]}";
    echo "Matkul : {$dsn[1]}";
    echo "<br>";
}
?>