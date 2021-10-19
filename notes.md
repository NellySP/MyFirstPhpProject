att göra:

-   skriv en funktion som returnerar random blomma med info vid knapptryck.
-   funktion som ekar växtinfo - en sån vill jag ha!
-   Funktion som ekar dödsinfö - den ska dö!

function getrandomelement($array) {
  $pos=rand(0,sizeof($array)-1);
$res=$array[$pos];
if (is_array($res)) return getrandomelement($res);
else return $res;
}

echo getrandomelement($var);

Ampellilja = Chlorophytum:

Elefantöra = Pilea peperomioides:

-   gillar ljust
-   vattna underifrån

Fredskalla = Spathiphyllum

Garderobsblomma = Zamioculcas zamiifolia:

-   klarar mörkt
-   Vattna sällan

Gullraka = Epipremnum aureum:

-

Kaktus = Cactaceae:

-   ljust, direkt solsken
-   vattna sällan

Porslinsblomma = Hoya carnosa

Svärmorstunga = Sansevieria trifasciata:

-   klarar mörkt

safety-array

$plantFacts = [
'ampellilja' => [
'vattna rikligt',
'trivs ljust till lätt skuggigt',
'ej giftig'
],
'fredskalla' => [
'håll jorden fuktig',
'trivs både ljust och mörkt',
'irriterande växtsaft',
],
'kaktus' => [
'vattna sällan',
'trivs ljust, klarar direkt solljus',
'ogiftig men svårtuggad',
],
'porslinsblomma' => [
'fuktig jord vid blomning, annars vattna sparsamt',
'trivs ljust, men ej i direkt solljus i söderläge',
'ogiftig',
],
'gullranka' => [
'låt jorden torka mellan vattningar',
'mörkt till ljust, men ej i direkt solljus',
'irriterande växtsaft'
],
'garderobsblomma' => [
'vattna sparsamt',
'trivs ej i direkt solljus',
'starkt irriterande växtsaft',
],
'elefantöra' => [
'låt jorden torka upp mellan vattningarna',
'trivs halvljust, undvik direkt sol',
'ogiftig',
],
'svärmorstunga' => [
'vattna sparsamt',
'trivs både skuggigt och soligt, men växer bättre om den står ljust',
'irriterande växtsaft',
],
];
