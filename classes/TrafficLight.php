<?php

class TrafficLight
{
    public $red;
    public $yellow;
    public $green;
    public $paused;

    public function __construct()
    {
        $this->paused = false;
    }

    public function setState($state)
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

        return $state;
    }

    public function setToPause($state)
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