<?php

class Fan
{
    public $SLOW ;
    public $MEDIUM ;
    public $FAST;
    public $SPEED;
    public $ON;
    public $RADIUS;
    public $COLOR;

    function __construct($SLOW,$MEDIUM,$FAST,$SPEED,$ON,$RADIUS,$COLOR)
    {
        $this->SLOW = $SLOW;
        $this->MEDIUM = $MEDIUM;
        $this->FAST = $FAST;
        $this->SPEED = $SPEED;
        $this->ON = $ON;
        $this->RADIUS = $RADIUS;
        $this->COLOR = $COLOR;
    }

    public function getSlow()
    {
        return $this->SLOW;
    }

    public function getMedium()
    {
        return $this->MEDIUM;
    }

    public function getFast()
    {
        return $this->FAST;
    }

    public function getSpeed()
    {
        return $this->SPEED;
    }

    public function isON()
    {
        return $this->ON;
    }

    public function getRadius()
    {
        return $this->RADIUS;
    }

    public function getColor()
    {
     return $this->COLOR;
    }

    public function toString()
    {
        echo "fan is on";
    }


}
$fan = new Fan(1,2,3,10,true,5,"blue");
echo $fan->getColor();
$fan1 = new Fan(1,2,3,10,true,5,"blue");
echo $fan->getColor();
$fan2 = new Fan(1,2,3,10,true,5,"blue");
echo $fan->getColor();





?>