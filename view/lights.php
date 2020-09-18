<?php
ob_start();
?>

<div class="circle <?= $trafficLight->red ? 'red' : 'off' ?>"></div>
<div class="circle <?= $trafficLight->yellow ? 'yellow' : $trafficLight->yellow == LightStates::BLINK ? 'blinking' : 'off' ?>"></div>
<div class="circle <?= $trafficLight->green ? 'green' : 'off' ?>"></div>

<?php
$content = ob_get_clean();
require_once "layout.php";
?>
