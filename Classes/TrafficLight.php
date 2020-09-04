<?php


class TrafficLight
{
    public $red;
    public $yellow;
    public $green;
    public $state;

    public function __construct()
    {
        $this->state = isset($_GET['state']) ? $_GET['state'] : 1;
    }

    public function SetState($state)
    {
        switch ($state)
        {
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

        $state
    }
}