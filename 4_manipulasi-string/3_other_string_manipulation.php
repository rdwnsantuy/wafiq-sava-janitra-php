<?php

$text = "Saya suka belajar Javascript";

// str_replace() untuk mengganti substring tertentu
$newText = str_replace("Javascript", "PHP", $text);
echo $newText;

// strlen() untuk menghitung panjang string
$panjang = strlen($text);
echo $panjang;

// strtoupper() untuk mengubah seluruh huruf menjadi kapital
$upperText = strtoupper($text);
echo $upperText;

// strtolower() untuk mengubah seluruh huruf menjadi kecil
$lowerText = strtolower($text);
echo $lowerText;

// substr() untuk mengambil sebagian string
$subText = substr($text, 0, 7);
echo $subText;
