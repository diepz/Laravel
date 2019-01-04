<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 12/11/2018
 * Time: 08:42
 */

    class Person
    {
        public $name;
        public $birtday;
        public $description;

        public function __construct($name, $birtday, $description)
        {
            $this->name = $name;
            $this->birtday = $birtday;
            $this->description = $description;
        }



    }