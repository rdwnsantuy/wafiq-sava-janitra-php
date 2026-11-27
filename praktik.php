<?php
$a = true;
$b = false;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Operator Logika</title>
</head>

<body>
    <p>a = true</p>
    <p>b = false</p>
    <h1>Macam-macam operator logika</h1>
    <ul>
        <li>&& atau AND -> bernilai true jika 2 operand bernilai true</li>
        <li>|| atau OR -> bernilai true jika salah 1 operand bernilai true</li>
        <li>! atau NOT -> bernilai true jika operand bernilai false</li>
        <li>xor atau XOR -> bernilai true jika hanya 1 operand bernilai true, tetapi tidak jika 2 operand sama sama true</li>
    </ul>
    <h1>Hasil operator logika</h1>
    <ul>
        <li>a && b = <?php var_dump($a && $b); ?></li>
        <li>a || b = <?php var_dump($a || $b); ?></li>
        <li>!a = <?php var_dump(!$a); ?></li>
        <li>a xor b = <?php var_dump($a xor $b); ?></li>
    </ul>
</body>

</html>