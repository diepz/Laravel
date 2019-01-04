

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
class Point
{
    public $x;
    public $y;
    public function __construct($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function setX($x)
    {
        $this->x = $x;
    }
    public function getX()
    {
        return $this->x;
    }
    public function setY($y)
    {
        $this->y = $y;
    }
    public function getY()
    {
        return $this->y;
    }
    public function setXY($x, $y)
    {
        $this->x = $x;
        $this->y = $y;
    }
    public function getXY()
    {
        return [$this->x, $this->y];
    }
    public function toString()
    {
        return 'Point2D: x= ' . $this->x . ' y= ' . $this->y;
    }
}
class MoveablePoint extends Point
{
    public $xSpeed;
    public $ySpeed;
    public function __construct($x, $y, $xSpeed, $ySpeed)
    {
        parent::__construct($x, $y);
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function setXSpeed($xSpeed)
    {
        $this->xSpeed = $xSpeed;
    }
    public function getXSpeed()
    {
        return $this->xSpeed;
    }
    public function setYSpeed($ySpeed)
    {
        $this->ySpeed = $ySpeed;
    }
    public function getYSpeed()
    {
        return $this->ySpeed;
    }
    public function setSpeed($xSpeed, $ySpeed)
    {
        $this->xSpeed = $xSpeed;
        $this->ySpeed = $ySpeed;
    }
    public function getSpeed()
    {
        return [$this->xSpeed, $this->ySpeed];
    }
    public function toString()
    {
        return 'Moveable Point: (x,y)= (' . $this->x . ', ' . $this->y . ') ' . 'speed= (' . $this->xSpeed . ', ' . $this->ySpeed . ')';
    }
}
$point = new Point(30,40);
print_r($point->getXY());
echo $point->toString() . '<br>';
$movePoint = new MoveablePoint(20, 30,5,5);
print_r($movePoint->getSpeed());
echo $movePoint->toString();
?>
</body>
</html>
