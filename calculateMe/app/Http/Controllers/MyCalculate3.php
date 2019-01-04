<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCalculate3 extends Controller
{
    public function getCalculate3($FistNumber, $SecondNumber)
    {

        $division = $FistNumber / $SecondNumber;
        return $division;


    }
}
