<!-- Concatenation adalah menggabungkan dua atau lebih string menjadi satu -->
<!-- di PHP ada 2 cara sebagai berikut -->

<!-- (1) Menggunakan operator titik "." -->
<?php
$firstName = "Jhon";
$lastName = "Chena";
$fullName = $firstName . " " . $lastName;
echo $fullName;
?>
<!-- Output: JhonChena -->

<!-- (2) Menggunakan interpolasi string / tanda kutip ganda " " -->
<?php
$firstName = "Jhon";
$lastName = "Chena";
$fullName = "$firstName $lastName";
echo $fullName;
?>
<!-- Output: Jhon Chena -->