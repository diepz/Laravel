<?php

class circle
{
    public $radius;
    public $color;

    public function __construct($radius,$color)
    {
        $this->radius = $radius;
        $this->color = $color;
    }

    public function getRadius()
    {
        return $this->radius;
    }


    public function getColor()
    {
        return $this->color;
    }

    public function area()
    {
        return pow($this->radius,2) * pi();
    }

    public function peimate()
    {
        return 2 * pi() * $this->radius;
    }

    public function toString()
    {
        echo $this->radius ."<br>".$this->color;

    }

}
$circle = new circle(2,"blue");
$circle->toString();


class cylinder extends circle
{
    public $height;

    public function __construct($radius, $color, $height)
    {
         parent::__construct($radius, $color);
        $this->height = $height;
    }

    public function getHeight()
    {
        return $this->height;
    }

//    public function setColor()
//    {
//        echo $this->color = "red";
//    }

    public function getColor()
    {
        return $this->color;
    }

    public function area()
    {
        return parent::area() * 2 + parent::peimate() * $this->height;
    }

    public function peimate()
    {
        return parent::area() * $this->height;
    }

    public function toString()
    {   echo "<br>";
        echo $this->radius;
        echo "<br>";
        echo $this->color;
        echo "<br>";
        echo $this->height;
    }
}

$cylinder = new cylinder(2,"red",3);
$cylinder->toString();

?>