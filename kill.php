<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php'; ?>

<h2>Och hur dödar jag dem?</h2>

<?php foreach ($plants as $plant) {
    $image = $plant['image'];
    $name = $plant['name'];



?>
    <img src="<?php echo $image ?>"></img>
    <h3><?php echo "$name?" ?></h3>
    <?php foreach ($killIt as $key => $value) { ?>
        <p><?php echo $value ?></p><?php  }
                            } ?>




<?php require __DIR__ . '/footer.php'; ?>

<!-- Här behöver jag få den att enbart printa ett 
value/växt. samtidigt som det är en nested loop -->