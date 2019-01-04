<?php

namespace App\Http\Controllers;

class MyFistController extends Controller
{
    public function getController($FistNumber, $SecondNumber)
    {
          $total = $FistNumber + $SecondNumber;
          return $total;
    }

    public function getView()
    {
        $data['user'] = 'DiepZ';
        return view('MyFistView', $data);
    }
}
