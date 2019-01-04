<?php


include "Circle.php";
include "Comparable.php";

    class ComparableCircle extends Circle implements Comparable
    {
        public function __construct($name, $radius)
        {
            parent:: __construct($radius, $name);

        }

        public function Compareto($circleOne, $circleTwo)
        {
            $circleOneRadius = $circleOne->getRadius();
            $circleTwoRadius = $circleTwo->getRadius();

            if ($circleOneRadius > $circleTwoRadius) {
                return "true";
            } elseif ($circleOneRadius < $circleTwoRadius) {
                return "flase";
            } else {
                return 0;
            }


        }

    }

