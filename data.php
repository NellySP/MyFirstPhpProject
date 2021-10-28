<?php

declare(strict_types=1);

$title = 'Växtgenerator';
$overviewText = 'Jaså, du vill ha en av varje du! Här har du dem!';
$safetyText = 'Jag vet vad du tänker. Finns det någon risk att växterna kan ta död på mig eller mitt husdjur? Hur stor skada kan de åsamka? Här finner du svaren.';
$lightFacts = 'Var vill den stå?';
$waterFacts = 'Hur mycket dricker den?';
$startText = 'Är du en notorisk plantmördare? Då har du hamnat rätt. Växtgeneratorn 2021 hjälper dig att hitta en växt som kan stå emot dina mordförsök så länge som möjligt! Sätt igång generatorn och se om du hittar något du gillar.';

$plants = [
    [
        'id' => 0,
        'name' => 'Ampellilja',
        'image' => 'images/ampellilja.jpeg',
        'latName' => 'Chlorophytum',
        'water' => 'Vattna rikligt, 1 - 2 ggr i veckan.',
        'light' => 'Trivs ljust till lätt skuggigt.',
        'poison' => 'Ogiftig!',
        'kill' => 'Tyvärr, det går nästan inte. Nästan. Du kommer nog på något sätt ska du se.',
        'bloom' => false,
    ],
    [
        'id' => 1,
        'name' => 'Fredskalla',
        'image' => 'images/fredskalla.jpeg',
        'latName' => 'Spathiphyllum',
        'water' => 'Håll jorden fuktig, men låt den inte stå i vatten.',
        'light' => 'Trivs både ljust och mörkt.',
        'poison' => 'Irriterande växtsaft!',
        'kill' => 'Utsätt den för kyla!',
        'bloom' => true,
    ],
    [
        'id' => 2,
        'name' => 'Kaktus',
        'image' => 'images/kaktusar.jpeg',
        'latName' => 'Cactaceae',
        'water' => 'Vattna sällan',
        'light' => 'Trivs ljust, klarar direkt solljus.',
        'poison' => 'Ogiftig men svårtuggad.',
        'kill' => 'Dränk den!',
        'bloom' => false,
    ],
    [
        'id' => 3,
        'name' => 'Porslinsblomma',
        'image' => 'images/porslinsblomma.jpeg',
        'latName' => 'Hoya carnosa',
        'water' => 'Fuktig jord vid blomning, annars vattna sparsamt.',
        'light' => 'Trivs ljust, men ej i direkt solljus i söderläge.',
        'poison' => 'Ogiftig!',
        'kill' => 'Tyvärr, du får bli kreativ!',
        'bloom' => true,
    ],
    [
        'id' => 4,
        'name' => 'Gullranka',
        'image' => 'images/gullranka.jpeg',
        'latName' => 'Epipremnum aureum',
        'water' => 'Låt jorden torka upp mellan vattningar.',
        'light' => 'Mörkt till ljust, men ej i direkt solljus.',
        'poison' => 'Irriterande växtsaft!',
        'kill' => 'Dränk den!',
        'bloom' => false,
    ],
    [
        'id' => 5,
        'name' => 'Garderobsblomma',
        'image' => 'images/garderobsblomma.jpeg',
        'latName' => 'Zamioculcas zamiifolia',
        'water' => 'Vattna sparsamt.',
        'light' => 'Trivs ej i direkt solljus.',
        'poison' => 'Starkt irriterande växtsaft!',
        'kill' => 'Dränk den!',
        'bloom' => false,
    ],
    [
        'id' => 6,
        'name' => 'Elefantöra',
        'image' => 'images/elefantora.jpeg',
        'latName' => 'Pilea peperomioides',
        'water' => 'Låt jorden torka upp mellan vattningarna.',
        'light' => 'Trivs halvljust, undvik direkt sol.',
        'poison' => 'Ogiftig!',
        'kill' => 'Låt den drunkna ...',
        'bloom' => false,
    ],
    [
        'id' => 7,
        'name' => 'Svärmorstunga',
        'image' => 'images/svarmorstunga.jpeg',
        'latName' => 'Sansevieria trifasciata',
        'water' => 'Vattna sparsamt.',
        'light' => 'Trivs både skuggigt och soligt, men växer bättre när den står ljust.',
        'poison' => 'Irriterande växtsaft!',
        'kill' => 'Vem vet. Inte jag. Svårt är det.',
        'bloom' => false,
    ],
];
