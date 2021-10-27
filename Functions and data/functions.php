<?php

declare(strict_types=1);

require __DIR__ . '/data.php';

// funktion som hämtar rand index ur min array of plants(inbyggd)

$rand_val = array_rand($plants);
$plant = $plants[$rand_val];

// funktion som hämtar titeln till min hemsida(hemmasnickrad)

function getTitle($title = 'Växtgenerator 2021')
{
    return $title;
}

// funktion som går igenom min Flowersarray och printar de nycklar som har värdet true(hemmasnickrad)

function getBloomin($flowers)
{
    foreach ($flowers as $key => $value) {
        if ($value === true) {
            echo "$key <br>";
        }
    }
}

// om den blommar ekar den följande(hemmasnickrad): 

function ifTrue($plant)
{
    if ($plant['bloom'] === true) {
        echo 'Den blommar!';
    } else {
        echo 'Den blommar inte vanligtvis.';
    }
}
