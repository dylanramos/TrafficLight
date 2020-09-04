<?php
require_once "src/home.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>TrafficLight</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
    <div class="rectangle">
        <div class="circle <?= $trafficLight->red ? 'red' : 'off' ?>"></div>
        <div class="circle <?= $trafficLight->yellow ? 'yellow' : 'off' ?>"></div>
        <div class="circle <?= $trafficLight->green ? 'green' : 'off' ?>"></div>
    </div>
    <div class="button">
        <a href="index.php?state=<?= $nextState ?>">Next</a>
    </div>
</html>
