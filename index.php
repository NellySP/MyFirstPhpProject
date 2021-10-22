<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php'; ?>


<?php


// foreach ($plants as $plant) {
//     echo "$plant  <br>";
// }
?>


<div class="butt_container">

    <button>En sån vill jag ha!</button>
    <button onClick="window.location.reload();">Den var ful, ge mig en ny!</button>
    <button>Den ska dö!</button>

</div>

<img src=<?php echo $plant['image']; ?> />
<h2><?php echo $plant['name']; ?></h2>



<?php require __DIR__ . '/footer.php'; ?>