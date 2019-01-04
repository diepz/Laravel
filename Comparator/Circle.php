<?php

include 'shape.php';
    class Circle extends Shape
    {
        public $radius;

        public function __construct($name, $radius)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function setRadius($radius)
        {
            $this->radius = $radius;
        }

        public function getRadius()
        {
            return $this->radius;
        }

        public function  calculateArera()
        {
            return pi() * pow($this->radius,2);
        }

        public function calcuatePerimeter()
        {
            return pi() * $this->radius * 2;
        }
    }


?>