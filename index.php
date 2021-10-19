<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php'; ?>


<?php /*

require __DIR__ . '/data.php';

foreach ($plants as $plant) {
    echo "$plant  <br>";
}
?>

<?php

require __DIR__ . '/data.php';

$rand_val = array_rand($plants, 0);

echo $plants[$rand_val];


*/ ?>

<div class="butt_container">

    <button>En sån vill jag ha!</button>
    <button>Den var ful, ge mig en ny!</button>
    <button>Den ska dö!</button>

</div>

<img src="<?= $plants[1]['image']; ?>">





<h2><?= $plants[1]['name']; ?></h2>
<h4><?= $plants[1]['latName']; ?></h4>




<?php require __DIR__ . '/footer.php'; ?>