<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      DB::table('users')->insert([
          'name' => 'Leia',
          'email' => 'nyooom@gmail.com',
          'password' => '$2y$10$xFaMKlbn5ulVjj2df7SQKeFtZCMn1LVEQ0bkS8T7g9Qcbj0h0pscy', //12345
          'emp_pic' => '/images/emp/leeyuh.jpg',
          'emp_id' => '1',
          'role_id' => '1',
          'created_at' => '2018-01-22 00:00:00',
      ]);
        //
    }
}
