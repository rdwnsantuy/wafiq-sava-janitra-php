<?php

// Function adalah blok kode yang dirancang untuk melakukan tugas tertentu dan dapat dipanggil berulang kali dalam program.
// Penggunaan function memudahkan pengelolaan kode, menghindari perulangan, dan meningkatkan keterbacaan
// Function didefinisikan menggunakan kata kunci "function" di depan nama function
// Untuk memanggil function dapat menggunakan nama function diikuti dengan ()

// Contoh function simpel
function salam()
{
    echo "Halo, selamat datang!";
}

salam();

// Contoh parameter
function penjumlahan($a, $b)
{
    $hasil = $a + $b;
    echo "Hasil penjumlahan: $hasil";
}

penjumlahan(5, 3);

// Return atau Nilai Kembalian
function luasPersegi($sisi)
{
    return $sisi * $sisi;
}

$luas = luasPersegi(4);
echo "Luas persegi : $luas";

