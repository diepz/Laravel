<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 05/11/2018
 * Time: 15:58
 */

    class Cylinder
    {
        public function getVol($radius, $height)
        {
            $baseAre = pi() * $radius * $height;
            $perimeter = 2 * pi() * $radius;
            $volume = $perimeter * $height + 2 * $baseAre;
            return $volume;
        }
    }