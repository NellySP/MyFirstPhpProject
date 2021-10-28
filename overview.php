<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php'; ?>

<h2>Vilka växter var det nu igen?</h2>
<p><?php echo $overviewText; ?></p>

<div class="container">
    <?php foreach ($plants as $plant) {
        $image = $plant['image'];
        $name = $plant['name'];
        $latName = $plant['latName'];
    ?>
        <div class="item">
            <img src="<?php echo $image ?>"></img>
            <h3><?php echo $name ?></h3>
            <h4><?php echo "$latName" ?></h4><br>
        </div>
    <?php } ?>

</div>



<?php require __DIR__ . '/footer.php'; ?>