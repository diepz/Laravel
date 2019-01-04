<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 11/11/2018
 * Time: 14:53
 */

    class Shape
    {
        public $name;

        public function  __construct($name)
        {
            $this->name = $name;
        }

        public function show()
        {
            return 'I am a shape. My name is $this->name';
        }


    }