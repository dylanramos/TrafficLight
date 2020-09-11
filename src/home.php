<?php
require_once "classes/TrafficLight.php";

session_start();

$trafficLight = new TrafficLight();

if(isset($_GET['state']))
{
    switch ($_GET['state'])
    {
        case 'next':
            if($trafficLight->paused == true)
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
            }

            break;

        case 'pause':

    }
}
