<?php
require_once "./classes/TrafficLight.php";

$trafficLight = new TrafficLight();

$state = isset($_GET['state']) ? $_GET['state'] : 0;

$nextState = $trafficLight->setState($state);