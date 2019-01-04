<?php
//include_once(dirname(__FILE__) . '/../abstractClass/Fruit.php');
include_once(dirname( __FILE__ ) . '/../AbstractClass/Animal.php');
//include_once(dirname( __FILE__ ) . '/../interfaceclass/Edible.php');

class Orange extends Fruit
{
    public function howtoEat()
    {
        echo "Orange could be juiced";
    }
}

?>