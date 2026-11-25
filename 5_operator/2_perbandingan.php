<?php

$a = 5;
$b = 10;
$c = '5';

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Perbandingan</title>
</head>

<body>
    <p>a = 5</p>
    <p>b = 10</p>
    <p>c = '5'</p>
    <h1>Macam-macam operator perbandingan</h1>
    <ul>
        <li>operator == : sama dengan</li>
        <li>operator != : tidak sama dengan</li>
        <li>operator === : identik</li>
        <li>operator !== : tidak identik</li>
        <li>operator > : lebih besar dari</li>
        <li>operator < : lebih kecil dari</li>
        <li>operator >= : lebih besar sama dengan</li>
        <li>operator <= : lebih kecil sama dengan</li>
    </ul>
    <h1>Hasil Perbandingan</h1>
    <ul>
        <li>a == b | <?php var_dump($a == $b); ?></li>
        <li>a != b | <?php var_dump($a != $b); ?></li>
        <li>a === b | <?php var_dump($a === $b); ?></li>
        <li>a !== b | <?php var_dump($a !== $b); ?></li>
        <li>a > b | <?php var_dump($a > $b); ?></li>
        <li>a < b | <?php var_dump($a < $b); ?></li>
        <li>a >= b | <?php var_dump($a >= $b); ?></li>
        <li>a <= b | <?php var_dump($a <= $b); ?></li>
    </ul>
</body>

</html>