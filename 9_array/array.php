<!-- Array adalah sebuah variabel yang dapat menyimpan lebih dari
 satu nilai dalam satu variabel.
 Di dalam PHP, array didefinisikan dengan tanda kurung siku[] atau function array()
 Untuk mengakses elemen di dalam array, kita bisa menggunakan indeks seperti di python -->

<!-- (1) Array sederhana -->
<?php

$buah = ["Apel", "Pisang", "Jeruk"];
$fruit = array("Mangga", "Alpukat", "Sirsak");

echo $buah[0];
echo $buah[1];

// (2) Array Asosiatif
// Array Asosiatif adalah array yang menggunakan kata kunci (key) yang diatur secara manual. Kunci dapat berupa string maupun angka.
// Dalam Array Asosiatif kita menggunakan key untuk mengakses nilai yang terkait dengan key tersebut
$umur = [
    "Andi" => 25,
    "Budi" => 30,
    "Citra" => 28
];

echo $umur["Andi"];
echo $umur["Budi"];

// (3) Array Multidimensi
// Array Multidimensi adalah array yang memiliki array di dalamnya
// Pada array jenis ini kita menggunakan dua atau lebih indeks untuk mengakses elemen di dalamnya
// Indeks pertama merujuk pada array utama
// Indeks kedua merujuk pada elemen di dalam array tersebut
$data = [
    ["Andi", 25, "Jakarta"],
    ["Budi", 30, "Bandung"],
    ["Citra", 28, "Surabaya"]
];

echo $data[0][0];
echo $data[1][1];
?>