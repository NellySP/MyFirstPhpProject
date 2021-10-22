<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php'; ?>

<h2>Kan de döda mig?</h2>

<p>Jag vet vad du tänker. Finns det någon risk att växterna kan ta död på mitt husdjur? Hur stor skada kan de åsamka? Här finner du svaren.</p>

<?php foreach ($plants as $plant) {
    $image = $plant['image'];
    $name = $plant['name'];
    $poison = $plant['poison'];




?>
    <img src="<?php echo $image ?>"></img>
    <h3><?php echo $name ?></h3>
    <p><?php echo $poison ?></p>
<?php } ?>




<?php require __DIR__ . '/footer.php'; ?>

<!-- Här behöver jag få den att enbart printa ett 
value/växt. samtidigt som det är en nested loop -->