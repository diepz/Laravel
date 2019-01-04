<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCalculate2 extends Controller
{
    public function getCalculate2($FistNumber, $SecondNumber)
    {

        $multiplication = $FistNumber + $SecondNumber;
        return $multiplication;


    }
}
