<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 11/11/2018
 * Time: 16:56
 */
include 'main.php';



    $resizes[0] = new Circle('Cirlce', 15);
//    echo $resizes1->calculateArea();
    $resizes[1] = new Rectangle('Rectangle', 10, 220);
    $resizes[2] = new Square('Square', 90, 90);
    echo 'Interface Resizeable:  <br>';

    foreach ($resizes as $resize)
    {
        echo $resize->show() . ' Area: ' . $resize->calculateArea() . '<br>' ;
    }

    echo 'After Interface Resizeable: <br>';
    $random = random_int(1,100);
    foreach ($resizes as $resize)
    {
//        $resize->$resize($random);
        echo $resize->show() . ' Area: ' . $resize->calculateArea() . '<br>' ;

    }