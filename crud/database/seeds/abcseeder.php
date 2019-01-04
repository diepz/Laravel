<?php

use Illuminate\Database\Seeder;
use App\Customer;
class abcseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = new Customer();
        $customers->name = 'abc';
        $customers->email = 'shock88h@gmail.com';
        $customers->addres = 'Ha NOi';
        $customers->phone = '0962686228';
        $customers->save();
    }
}
