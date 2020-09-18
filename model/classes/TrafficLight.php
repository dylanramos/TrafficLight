<?php

require_once "LightStates.php";

class TrafficLight
{
    public $red;
    public $yellow;
    public $green;
    public $state;

    public function __construct()
    {
        $this->set_state(0);
    }

    public function set_state($state)
    {
        $this->state = $state;

        switch ($state)
        {
            default:
            case 0:
                $this->red = LightStates::ON;
                $this->yellow = LightStates::OFF;
                $this->green = LightStates::OFF;
                break;

            case 1:
                $this->red = LightStates::ON;
                $this->yellow = LightStates::ON;
                $this->green = LightStates::OFF;
                break;

            case 2:
                $this->red = LightStates::OFF;
                $this->yellow = LightStates::OFF;
                $this->green = LightStates::ON;
                break;

            case 3:
                $this->red = LightStates::OFF;
                $this->yellow = LightStates::ON;
                $this->green = LightStates::OFF;
                break;

            case 4:
                $this->red = LightStates::OFF;
                $this->yellow = LightStates::BLINK;
                $this->green = LightStates::OFF;
        }
    }

    public function next_state()
    {
        switch ($this->state)
        {
            case 0: // Stop
                $this->set_state(1);
                break;
            case 1: // Get ready
                $this->set_state(2);
                break;
            case 2: // Go
                $this->set_state(3);
                break;
            case 3: // Slow down
            case 4: // HS
                $this->set_state(0);
                break;
            default: // don't change
        }
    }

    public function can_pause()
    {
        switch ($this->state)
        {
            case 0:
            case 2:
                return true;

            default:
                return false;
        }
    }

    public function set_to_pause($state)
    {
        switch ($state)
        {
            default:
                $this->paused = false;

            case 0:
            case 2:
                $this->paused = true;
                break;
        }
    }
}