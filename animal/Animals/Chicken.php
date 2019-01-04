<?php

include_once(dirname( __FILE__ ) . '/../AbstractClass/Animal.php');
include_once(dirname( __FILE__ ) . '/../InterfaceClass/Edible.php');

class Chicken extends Animal implements Edible
{
    public function makeSound()
    {
        echo "cục ta, cục tac";
    }

    public function howtoEat()
    {
        echo "could be fried";
    }
}

?>