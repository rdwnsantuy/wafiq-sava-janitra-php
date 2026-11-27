<?php

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        break; // ketika $i mencapai angka 5, loop akan berhenti
    }
    echo $i . "\n";
}

for ($i = 1; $i <= 10; $i++) {
    if ($i == 5) {
        continue; // saat $i bernilai 5, iterasi dilewatkan
    }
    echo $i . "\n";
}

// break digunakan untuk menghentikan eksekusi loop secara langsung, sehingga alur program akan keluar dari loop yang sedang berjalan
// continue digunakan untuk melewatkan sisa kode atau loop pada iterasi yang ditentukan dan langsung melanjutkan iterasi berikutnya