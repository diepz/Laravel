<?php

    include "ComparableCircle.php";

    $circle1 = new ComparableCircle('circleOne',9);
    $circle2 = new ComparableCircle('circleTwo',2);
    $circle3 = new ComparableCircle('circleThree',3);


   echo $circle1->getName().'<br>' .$circle1->getRadius() .'<br>';
   echo $circle2->getName().'<br>' .$circle2->getRadius() .'<br>';
   echo $circle3->getName().'<br>' .$circle3->getRadius() .'<br>';


