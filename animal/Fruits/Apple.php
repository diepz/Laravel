<?php
include_once(dirname(__FILE__) . '/../AbstractClass/Fruit.php');

class Apple extends Fruit
{
    public function howtoEat()
    {
        echo "Apple could be slided";
    }
}

?>