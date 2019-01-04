<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MyCalculate extends Controller
{
    public function getCalculate($FistNumber, $SecondNumber)
    {

        $total = $FistNumber + $SecondNumber;
        return $total;



    }

}
