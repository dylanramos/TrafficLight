<?php

class TrafficLight
{
    public $red;
    public $yellow;
    public $green;
    public $state;

    public function __construct()
    {
        $this->state = 0;
        $this->set_state($this->state);
    }

    public function set_state($state)
    {
        switch ($state)
        {
            default:
            case 0:
                $this->red = true;
                $this->yellow = false;
                $this->green = false;
                break;

            case 1:
                $this->red = true;
                $this->yellow = true;
                $this->green = false;
                break;

            case 2:
                $this->red = false;
                $this->yellow = false;
                $this->green = true;
                break;

            case 3:
                $this->red = false;
                $this->yellow = true;
                $this->green = false;
                break;
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

    public function unPauseFeasible($state)
    {
        switch ($state)
        {
            default:
                $unPauseFeasible = false;

            case 0:
                $unPauseFeasible = true;
                break;
        }

        return $unPauseFeasible;
    }
}