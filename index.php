<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php'; ?>

<script>
    function myFunction() {
        var x = document.getElementById('myDIV');
        if (x.style.display === 'block') {
            x.style.display = 'none';
        } else {
            x.style.display = 'block';
        }
    }

    function dieFunction() {
        var x = document.getElementById('kill');
        if (x.style.display === 'block') {
            x.style.display = 'none';
        } else {
            x.style.display = 'block';
        }
    }
</script>

<div class="butt_container">

    <button onclick="myFunction('myDIV')">En sån vill jag ha!</button>
    <button onClick="window.location.reload();">Den var ful, ge mig en ny!</button>
    <button onclick="dieFunction('kill')">Den ska dö!</button>

</div>

<img src=<?php echo $plant['image']; ?> />
<h2><?php echo $plant['name']; ?></h2>

<div hidden id="myDIV">
    <p><?php echo $plant['light']; ?></p>
    <p><?php echo $plant['water']; ?></p>
</div>

<div hidden id="kill">
    <p><?php echo $plant['kill']; ?></p>
</div>

<?php require __DIR__ . '/footer.php'; ?>