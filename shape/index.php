<?php
class shape
{
    public $name;

   public function __construct($name)
    {
        $this->name = $name;
    }

    public function show()
    {
    return "I am a shape. Myb name is $this->name";
    }
}

class Rectangle extends shape
{
    public $width;
    public $height;

    public function __construct($name,$width,$height)
    {
        parent::__construct($name);
        $this->width = $width;
        $this->width = $height;
    }

    public function calculateAria()
    {
    return $this->width * $this->height;
    }

    public function calculatePeimaeter()
    {
    return ($this->width + $this->height) * 2;
    }
}

//$rectangle = new Rectangle("rectangle",2,2);
//$rectangle->width = 2;
//$rectangle->height = 2;
//echo $rectangle->show();

Class circle extends shape
{
    public $radius;

    public function __construct($name,$radius)
    {
        parent::__construct($name);
        $this->radius =$radius;

    }

    public function calculateAria()
    {
        return pi() * pow($this->radius,2);
    }

    public function calculatePeimaeter()
    {
        return 2 * pi() * $this->radius;
    }
}

$circle = new circle("circle",2);
$circle->radius = 2;
echo $circle->calculatePeimaeter();
echo "<br>";

class cylinder extends circle
{
    public $height;

    public function __construct($name, $radius,$height)
    {
        parent::__construct($name, $radius);
        $this->height = $height;
    }

    public function calculateAria()
    {
        return parent::calculateArea() * 2 + parent::calculatePerimeter() * $this->height;
    }

    public function calculatePeimaeter()
    {
        return parent::calculateArea() * $this->height;
    }
}

$cylinder = new cylinder("cylinder",2,3);
$cylinder->height = 3;
echo $cylinder->calculateAria();


?>