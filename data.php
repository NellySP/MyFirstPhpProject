<?php

declare(strict_types=1);

$plants = [
    [
        'id' => 0,
        'name' => 'Ampellilja',
        'image' => 'images/ampellilja.jpeg',
        'latName' => 'Chlorophytum',
        'water' => 'vattna rikligt',
        'light' => 'trivs ljust till lätt skuggigt',
        'poison' => 'ej giftig',
    ],
    [
        'id' => 1,
        'name' => 'Fredskalla',
        'image' => 'images/fredskalla.jpeg',
        'latName' => 'Spathiphyllum',
        'water' => 'håll jorden fuktig',
        'light' => 'trivs både ljust och mörkt',
        'poison' => 'irriterande växtsaft',
    ],
    [
        'id' => 2,
        'name' => 'Kaktus',
        'image' => 'images/kaktusar.jpeg',
        'latName' => 'Cactaceae',
        'water' => 'vattna sällan',
        'light' => 'trivs ljust, klarar direkt solljus',
        'poison' => 'ogiftig men svårtuggad',
    ],
    [
        'id' => 3,
        'name' => 'Porslinsblomma',
        'image' => 'images/porslinsblomma.jpeg',
        'latName' => 'Hoya carnosa',
        'water' => 'fuktig jord vid blomning, annars vattna sparsamt',
        'light' => 'trivs ljust, men ej i direkt solljus i söderläge',
        'poison' => 'ogiftig',
    ],
    [
        'id' => 4,
        'name' => 'Gullranka',
        'image' => 'images/gullranka.jpeg',
        'latName' => 'Epipremnum aureum',
        'water' => 'låt jorden torka mellan vattningar',
        'light' => 'mörkt till ljust, men ej i direkt solljus',
        'poison' => 'irriterande växtsaft',
    ],
    [
        'id' => 5,
        'name' => 'Garderobsblomma',
        'image' => 'images/garderobsblomma.jpeg',
        'latName' => 'Zamioculcas zamiifolia',
        'water' => 'vattna sparsamt',
        'light' => 'trivs ej i direkt solljus',
        'poison' => 'starkt irriterande växtsaft',
    ],
    [
        'id' => 6,
        'name' => 'Elefantöra',
        'image' => 'images/elefantöra.jpeg',
        'latName' => 'Pilea peperomioides',
        'water' => 'låt jorden torka upp mellan vattningarna',
        'light' => 'trivs halvljust, undvik direkt sol',
        'poison' => 'ogiftig',
    ],
    [
        'id' => 7,
        'name' => 'Svärmorstunga',
        'image' => 'images/svarmorstunga.jpeg',
        'latName' => 'Sansevieria trifasciata',
        'water' => 'vattna sparsamt',
        'light' => 'trivs både skuggigt och soligt, växer bättre när den står ljust',
        'poison' => 'irriterande växtsaft',
    ],
];

$flowers = [
    'Ampellilja' => 'blommar',
    'Fredskalla' => 'blommar',
    'Kaktus' => 'kan blomma',
    'Porslinsblomma' => 'blommar',
    'Gullranka' => 'blommar inte',
    'Garderobsblomma' => 'kan blomma',
    'Elefantöra' => 'kan blomma',
    'Svärmorstunga' => 'blommar inte',
];

$killIt = [
    'Ampellilja' => 'Tyvärr, det går nästan inte. Nästan. Du kommer nog på något sätt ska du se.',
    'Fredskalla' => 'Utsätt den för kyla!',
    'Kaktus' => 'Dränk den!',
    'Porslinsblomma' => 'Tyvärr, du får bli kreativ! Kanske för mycket vatten?',
    'Gullranka' => 'Dränk den!',
    'Garderobsblomma' => 'Dränk den!',
    'Elefantöra' => 'Låt den drunkna ...',
    'Svärmorstunga' => 'Vem vet. Inte jag. Svårt är det.',
];

$plantList = [
    'Ampellilja',
    'Fredskalla',
    'Kaktus',
    'Porslinsblomma',
    'Gullranka',
    'Garderobsblomma',
    'Elefantöra',
    'Svärmorstunga',
];

$images = [
    'images/svärmorstunga.jpeg',
    'images/elefantöra.jpeg',
    'images/garderobsblomma.jpeg',
    'images/gullranka.jpeg',
    'images/porslinsblomma.jpeg',
    'images/kaktusar.jpeg',
    'images/fredskalla.jpeg',
    'images/ampellilja.jpeg',
];
