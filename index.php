<?php
require_once "Classes/TrafficLight.php";
$trafficLight = new TrafficLight();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PRW1</title>
    <link rel="stylesheet" href="styles/styles.css">
</head>
<body>
<div class="rectangle">
    <div class="circle <?php $trafficLight->red ?>"></div>
    <div class="circle <?php $trafficLight->yellow ?>"></div>
    <div class="circle <?php $trafficLight->green ?>"></div>
</div>
<a class="btn" href=""
</html>
