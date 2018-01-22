<?php

use Illuminate\Database\Seeder;

class EmployeeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('employees')->insert([
          'emp_pic' => '/images/emp/leeyuh.jpg',
          'firstName' => 'Leia',
          'middleName' => 'Rose',
          'lastName' => 'Maza',
          'dob' => '1955-01-01',
          'address' => 'sample address',
          'zipCode' => '1141',
          'SSSNo' => '180001',
          'contactNumber' => '1111-11-11',
          'created_at' => '2018-01-22 00:00:00',
      ]);
        //
    }
}
