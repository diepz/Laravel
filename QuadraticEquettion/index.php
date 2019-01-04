<?php

class QuadraticEuqettion
{
    public $a;
    public $b;
    public $c;

    function __construct($a,$b,$c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
    }

    function getA()
    {
        return $this->a;
    }

    function getB()
    {
        return $this->b;
    }

    function getC()
    {
        return $this->c;
    }

    function getDiscrtiminant()
    {
        return $this->b ** 2 - 4 * $this->a * $this->c;
    }

    function getRoot1()
    {
        return ((-$this->b) + sqrt($this->b ** 2 - 4 * $this->a * $this->c)) / (2 * $this->a);

    }

    function getRoot2()
    {
        return ((-$this->b) - sqrt($this->b ** 2 - 4 * $this->a * $this->c)) / (2 * $this->a);

    }

}
$QuadraticEuqettion = new QuadraticEuqettion(5,10,2);
echo $QuadraticEuqettion->getDiscrtiminant();
echo "<hr>";
echo $QuadraticEuqettion->getRoot1();
echo "<hr>";
echo $QuadraticEuqettion->getRoot2();



?>

