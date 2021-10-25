<?php
require __DIR__ . '/data.php';
require __DIR__ . '/functions.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Växtväljare</title>
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <div class='menu'>
        <header>
            <div class='menu_item'>
                <h1><?php echo getTitle(); ?></h1>
                <nav>

                    <button><a href="index.php">Start</a></button>
                    <button><a href="overview.php">Alla växter</a></button>
                    <button><a href="safety.php">Säkerhet</a></button>
                    <button><a href="test.php">test</a></button>

                </nav>
            </div>
        </header>

    </div>