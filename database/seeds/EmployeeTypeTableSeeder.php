<?php

use Illuminate\Database\Seeder;

class EmployeeTypeTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('employee_types')->insert([
          'name' => 'Admin',
          'description' => 'Administrator Privileges',
          'created_at' => '2018-01-22 00:00:00',
      ]);
        //
    }
}
