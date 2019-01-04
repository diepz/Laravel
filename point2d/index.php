<?php

class Pointd2d
{
    public $x;
    public $y;

    public function __construct($x,$y)
    {
        $this->x = $x;
        $this->y = $y;
    }

    public function getX()
    {
        return $this->x;
    }

    public function setX()
    {
        $this->x;
    }

    public function getY()
    {
        return $this->x;
    }

    public function setY()
    {
        $this->x;
    }

    public function setXY($x,$y)
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
        echo $this->x. " " .$this->y;
    }

}

$pointd2d = new Pointd2d(2,3);
print_r($pointd2d->getXY());
class Point3d extends Pointd2d
{
    public $z;

    public function __construct($x, $y, $z)
    {
        parent::__construct($x, $y);
        $this->z = $z;
    }

    public function getZ()
    {
        return $this->z;
    }

    public function setZ()
    {
        $this->z;
    }

    public function setXYZ($x,$y,$z)
    {
        $this->x = $x;
        $this->y = $y;
        $this->z = $z;
    }

    public function getXYZ()
    {
        return [$this->x, $this->y, $this->z];
    }

    public function toString()
    {
        echo $this->x. " " .$this->y;
    }

}
$pointd3d = new Point3d(2,2,3);
print_r($pointd3d->getXYZ());



?>