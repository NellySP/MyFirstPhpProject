<?php

declare(strict_types=1);

$rand_val = array_rand($plants);
$plant = $plants[$rand_val];

function getTitle($title = 'Växtväljaren')
{
    return $title;
}


// function getNames(array $plants): array
// {
//     $names = [];

//     foreach ($plants as $plant) {
//         $names[] = $plant['name'];
//     }

//     return $names;
// }
