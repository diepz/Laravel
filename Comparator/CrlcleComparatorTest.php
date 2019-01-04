<?php

    include 'CircleCompartor.php';

    $circleOne = new Circle("circleOne", 6);
    $circleTwo = new Circle("circleTwo", 7);

    $circleComparator = new CircleCompartor();

    var_dump($circleComparator->compare($circleOne,$circleTwo));

?>