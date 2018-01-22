<?php

use Illuminate\Database\Seeder;

class EmployeeRoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

           DB::table('employee_roles')->insert([
               'employee_id' => '1',
               'employee_type_id' => '1',
               'created_at' => '2018-01-22 00:00:00',
           ]);

        //
    }
}
