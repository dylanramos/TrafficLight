<?php
require_once "model/model.php";

function new_traffic_light_view()
{
    $trafficLight = create_traffic_light();
    require_once "view/lights.php";
}

function next_traffic_light_view()
{
    $trafficLight = get_traffic_light();
    require_once "view/lights.php";
}