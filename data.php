<?php

declare(strict_types=1);

$overviewText = 'Jaså, du vill ha en av varje du! Här har du dem!';
$safetyText = 'Jag vet vad du tänker. Finns det någon risk att växterna kan ta död på mig eller mitt husdjur? Hur stor skada kan de åsamka? Här finner du svaren.';

$plants = [
    [
        'id' => 0,
        'name' => 'Ampellilja',
        'image' => 'images/ampellilja.jpeg',
        'latName' => 'Chlorophytum',
        'water' => 'vattna rikligt, 1 - 2 ggr i veckan',
        'light' => 'trivs ljust till lätt skuggigt',
        'poison' => 'ogiftig',
        'kill' => 'Tyvärr, det går nästan inte. Nästan. Du kommer nog på något sätt ska du se.',
        'bloom' => false,
    ],
    [
        'id' => 1,
        'name' => 'Fredskalla',
        'image' => 'images/fredskalla.jpeg',
        'latName' => 'Spathiphyllum',
        'water' => 'håll jorden fuktig, men låt den inte stå i vatten',
        'light' => 'trivs både ljust och mörkt',
        'poison' => 'irriterande växtsaft',
        'kill' => 'Utsätt den för kyla!',
        'bloom' => true,
    ],
    [
        'id' => 2,
        'name' => 'Kaktus',
        'image' => 'images/kaktusar.jpeg',
        'latName' => 'Cactaceae',
        'water' => 'vattna sällan',
        'light' => 'trivs ljust, klarar direkt solljus',
        'poison' => 'ogiftig men svårtuggad',
        'kill' => 'Dränk den!',
        'bloom' => false,
    ],
    [
        'id' => 3,
        'name' => 'Porslinsblomma',
        'image' => 'images/porslinsblomma.jpeg',
        'latName' => 'Hoya carnosa',
        'water' => 'fuktig jord vid blomning, annars vattna sparsamt',
        'light' => 'trivs ljust, men ej i direkt solljus i söderläge',
        'poison' => 'ogiftig',
        'kill' => 'Tyvärr, du får bli kreativ!',
        'bloom' => true,
    ],
    [
        'id' => 4,
        'name' => 'Gullranka',
        'image' => 'images/gullranka.jpeg',
        'latName' => 'Epipremnum aureum',
        'water' => 'låt jorden torka mellan vattningar',
        'light' => 'mörkt till ljust, men ej i direkt solljus',
        'poison' => 'irriterande växtsaft',
        'kill' => 'Dränk den!',
        'bloom' => false,
    ],
    [
        'id' => 5,
        'name' => 'Garderobsblomma',
        'image' => 'images/garderobsblomma.jpeg',
        'latName' => 'Zamioculcas zamiifolia',
        'water' => 'vattna sparsamt',
        'light' => 'trivs ej i direkt solljus',
        'poison' => 'starkt irriterande växtsaft',
        'kill' => 'Dränk den!',
        'bloom' => false,
    ],
    [
        'id' => 6,
        'name' => 'Elefantöra',
        'image' => 'images/elefantora.jpeg',
        'latName' => 'Pilea peperomioides',
        'water' => 'låt jorden torka upp mellan vattningarna',
        'light' => 'trivs halvljust, undvik direkt sol',
        'poison' => 'ogiftig',
        'kill' => 'Låt den drunkna ...',
        'bloom' => false,
    ],
    [
        'id' => 7,
        'name' => 'Svärmorstunga',
        'image' => 'images/svarmorstunga.jpeg',
        'latName' => 'Sansevieria trifasciata',
        'water' => 'vattna sparsamt',
        'light' => 'trivs både skuggigt och soligt, växer bättre när den står ljust',
        'poison' => 'irriterande växtsaft',
        'kill' => 'Vem vet. Inte jag. Svårt är det.',
        'bloom' => false,
    ],
];
