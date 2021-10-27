<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php'; ?>

<h2>Kan de döda mig?</h2>


<p><?php echo $safetyText; ?></p>
<div class="container">
    <?php foreach ($plants as $plant) {
        $image = $plant['image'];
        $name = $plant['name'];
        $poison = $plant['poison'];




    ?>

        <div class="item">
            <img src="<?php echo $image ?>"></img>
            <h3><?php echo $name ?></h3>
            <p><?php echo $poison ?></p>
        </div>
    <?php } ?>

</div>


<?php require __DIR__ . '/footer.php'; ?>