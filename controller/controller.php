<?php
require_once "model/classes/TrafficLight.php";
session_start();
$trafficLight = isset($_SESSION['previous_traffic_light']) ? unserialize($_SESSION['previous_traffic_light']) : new TrafficLight();
var_dump($trafficLight);
echo '<br>';
var_dump($_SESSION);
if(isset($_GET['action']))
{
    switch ($_GET['action'])
    {
        case 'next':
            $trafficLight->next_state();
            echo $trafficLight->state;
            break;
    }
}

$_SESSION['previous_traffic_light'] = serialize($trafficLight);
echo '<br>';
var_dump($_SESSION);
require_once "view/lights.php";