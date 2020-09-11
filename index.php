<?php
session_start();

require_once "controler/controler.php";

if(isset($_GET['action']))
{
    switch ($_GET['action'])
    {
        case 'next':
            next_traffic_light_view();
            break;

        case 'pause':
    }
}
else
{
    new_traffic_light_view();
}
