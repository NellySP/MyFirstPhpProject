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
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Zen+Antique+Soft&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="/styles.css">

</head>

<body>
    <div class="page_container">
        <div class="content_wrap">
            <header>
                <div class='menu'>
                    <div class='menu_item'>
                        <h1><?php echo getTitle(); ?></h1>
                        <nav>

                            <button><a href="/index.php">Start</a></button>
                            <button><a href="/overview.php">Alla växter</a></button>
                            <button><a href="/safety.php">Säkerhet</a></button>

                        </nav>
                    </div>
                </div>
            </header>