<?php
require_once "model/classes/TrafficLight.php";

$trafficLight = isset($_SESSION['previous_traffic_light']) ? unserialize($_SESSION['previous_traffic_light']) : new TrafficLight();

if(isset($_GET['action']))
{
    switch ($_GET['action'])
    {
        case 'next':
            $trafficLight->next_state();
            break;

        case 'pause':
            if($trafficLight->can_pause()) $trafficLight->set_state(4);
    }
}

$_SESSION['previous_traffic_light'] = serialize($trafficLight);

require_once "view/lights.php";