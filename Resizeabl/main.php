<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 11/11/2018
 * Time: 14:55
 */
    include 'Shape.php';
    include 'Resizeable.php';

    class Circle extends Shape implements Resizeable
    {
        public $radius;

        public function __construct($name, $radius)
        {
            parent::__construct($name);
            $this->radius = $radius;
        }

        public function calculateArea()
        {
            return pi() * pow($this->radius, 2);
        }

        public function resize($percent)
        {
            $this->radius *= $percent / 100;
        }
    }

    class Rectangle extends shape implements Resizeable
    {
        public $width;
        public $height;

        public function __construct($name, $width, $height)
        {
            parent::__construct($name);
            $this->width = $width;
            $this->height = $height;
        }

        public function calculateAre()
        {
            return $this->height * $this->width;
        }

        public function calculatePerimeter()
        {
            return ($this->height + $this->width) * 2;
        }

        public function resize($percent)
        {
            $this->width *= $percent / 100;
        }

    }


    class Square extends Rectangle implements Resizeable
    {
        public function __construct($name, $width)
        {
            parent::__construct($name, $width, $width);
        }

    }