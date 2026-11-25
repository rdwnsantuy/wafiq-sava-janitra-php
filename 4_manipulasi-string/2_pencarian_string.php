<!-- Pencarian string adalah proses pencarian substring dalam string utama -->

<!-- (1) strpos() mencari substring yang berada di posisi paling awal -->

<?php

$kalimat = "Belajar PHP itu menyenangkan, yakni pemrograman PHP ";
$posisi = strpos($kalimat, "PHP");
echo $posisi;

?>

<!-- (2) strrpos() mencari substring yang berada di posisi paling akhir -->

<?php

$kalimat = "PHP adalah bahasa pemrograman PHP";
$posisi = strrpos($kalimat, "PHP");
echo $posisi;

?>