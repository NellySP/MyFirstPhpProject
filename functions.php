<?php

declare(strict_types=1);

$rand_val = array_rand($plants);
$plant = $plants[$rand_val];

function getNames(array $plants): array
{
    $names = [];

    foreach ($plants as $plant) {
        $names[] = $plant['name'];
    }

    return $names;
}

/* hämtar random nummer ur */
function random(array $kol): int
{
    $arrayLength = count($kol);
    return rand(0, $arrayLength - 1);
}
