<?php require __DIR__ . '/header.php';
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php'; ?>

<script>
  function myFunction() {
    var myFunction = document.getElementById("myDIV");
    if (x.style.display === "none") {
      x.style.display = "block";
    } else {
      x.style.display = "none";
    }
  }
</script>

<head>
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <style>
    #myDIV {
      width: 100%;
      padding: 50px 0;
      text-align: center;
      margin-top: 20px;
    }
  </style>
</head>

<body>



  <script>
    function myFunction() {
      var x = document.getElementById('myDIV');
      if (x.style.display === 'none') {
        x.style.display = 'block';
      } else {
        x.style.display = 'none';
      }
    }
  </script>



  <div class="butt_container">

    <button onclick="myFunction()">En sån vill jag ha!</button>
    <button onClick="window.location.reload();">Den var ful, ge mig en ny!</button>
    <button>Den ska dö!</button>

  </div>

  <img src=<?php echo $plant['image']; ?> />
  <h2><?php echo $plant['name']; ?></h2>

  <div id="myDIV">
    <p><?php echo $plant['light']; ?></p>
  </div>

</body>



<?php require __DIR__ . '/footer.php'; ?>