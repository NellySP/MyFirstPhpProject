<?php __DIR__ . '/header.php'; ?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $title; ?></title> <!-- kan man eka sin titel? egen sida för variabler? -->
    <link rel="stylesheet" href="styles.css">

</head>

<body>
    <header>
        <h1><?php echo $title; ?></h1>
    </header>

    <nav>
        <ul>
            <li><a href="index.php">Start</a></li>
        </ul>
    </nav>