<?php require __DIR__ . '/header.php'; ?>

<?php

require __DIR__ . '/data.php';

$rand_val = array_rand($plants, 1);

echo $plants[$rand_val];


?>

<?php require __DIR__ . '/footer.php'; ?>