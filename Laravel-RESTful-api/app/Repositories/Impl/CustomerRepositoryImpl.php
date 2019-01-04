<?php

namespace App\Http\Repositories\Impl;

use App\Customer;
use App\Http\Repositories\CustomerRepository;
use App\Http\Repositories\Eloquent\EloquentRepository;

class CustomerRepositoryImpl extends EloquentRepository
{
    public function getModel()
    {
        $model = Customer::class;
        return $model;
    }
}