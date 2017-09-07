<?php

use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'Mostafa Nabil',
            'email' => 'mostafanabil94@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'admin',
            'phone1' => '01113352261',
            'company_name' => 'Diamond'
        ]);

        DB::table('users')->insert([
            'name' => 'Ahmed Hani',
            'email' => 'hani@gmail.com',
            'password' => bcrypt('secret'),
            'role' => 'user',
            'phone1' => '01113352261',
            'company_name' => 'Diamond'
        ]);
    }
}
