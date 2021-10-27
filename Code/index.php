<?php require __DIR__ . '/header.php';
?>

<h2>Välkommen!</h2>

<div class="index_text_container">
    <p class="index_item"><?php echo $startText; ?></p>
</div>

<div class="butt_container">

    <button onclick="myFunction('myDIV')">En sån vill jag ha!</button>
    <button onClick="window.location.reload();">Den var ful, ge mig en ny!</button>
    <button onclick="dieFunction('kill')">Den ska dö!</button>

</div>

<img src=<?php echo $plant['image']; ?> />
<h2><?php echo $plant['name']; ?></h2>

<div hidden id="myDIV">
    <h4><?php echo $lightFacts; ?></h4>
    <p><?php echo $plant['light']; ?></p>
    <h4><?php echo $waterFacts; ?></h4>
    <p><?php echo $plant['water']; ?></p>
</div>

<div hidden id="kill">
    <h4>Hur dödar jag den?</h4>
    <p><?php echo $plant['kill']; ?></p>
</div>

<button onclick="bloomFunction('bloom')">Blommar den? </button>

<div hidden id="bloom">
    <p><?php echo ifTrue($plant); ?></p>
</div>

<?php require __DIR__ . '/footer.php'; ?>