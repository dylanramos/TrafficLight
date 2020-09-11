<?php
require_once "classes/TrafficLight.php";

function create_traffic_light()
{
    $trafficLight = new TrafficLight();
    $_SESSION['previous_traffic_light'] = serialize($trafficLight);

    return $trafficLight;
}

function get_traffic_light()
{
    $trafficLight = unserialize($_SESSION['previous_traffic_light']);

    $nextState = ($trafficLight->state + 1) % 4;

    $trafficLight->set_state($nextState);

    $_SESSION['previous_traffic_light'] = serialize($trafficLight);

    /**if($trafficLight->paused == true)
    {
        if($trafficLight->unPauseFeasible($_SESSION['previousState']))
        {
            $state = ($_SESSION['previousState'] + 1) % 4;
            $_SESSION['previousState'] = $trafficLight->setState($state);
        }
    }
    else
    {
        $state = ($_SESSION['previousState'] + 1) % 4;
        $_SESSION['previousState'] = $trafficLight->setState($state);
    }*/

    return $_SESSION['previous_traffic_light'];
}