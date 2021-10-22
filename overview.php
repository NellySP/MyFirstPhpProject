<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php'; ?>

<h2>Vilka växter var det nu igen?</h2>

<?php foreach ($plants as $plant) {
    $image = $plant['image'];
    $name = $plant['name'];
    $latName = $plant['latName'];
?>
    <img src="<?php echo $image ?>"></img>
    <h3><?php echo $name ?></h3>
    <h4><?php echo "$latName" ?></h4><br>
<?php } ?>



<?php require __DIR__ . '/footer.php'; ?>