<?php
use App\Customer;
use Illuminate\Database\Seeder;

class abcseed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customers = new Customer();
        $customers->id_khach_hang = '123';
        $customers->name = 'abc';
        $customers->addres = 'ha noi';
        $customers->number = '0962686221';
        $customers->save();
    }
}
