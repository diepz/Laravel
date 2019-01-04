<?php
/**
 * Created by PhpStorm.
 * User: diepzdeptraivodich
 * Date: 02/11/2018
 * Time: 08:42
 */

class Rectangle implements Resizeable
{
    private $width;
    private $height;

    public function resize($precent)
    {
        $this->width = $this->width * $precent / 100;
        $this->height = $this->height * $precent / 100;
    }

}
