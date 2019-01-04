<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCalculate1 extends Controller
{
    public function getCalculate1($FistNumber, $SecondNumber)
    {

        $minus = $FistNumber - $SecondNumber;
        return $minus;


    }
}
