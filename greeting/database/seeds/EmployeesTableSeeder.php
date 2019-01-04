<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Faker\Factory;

class EmployeesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(Employee::class, 10)->create();
//        DB::table('employees')->insert([
//
//        ]);
    }
}
