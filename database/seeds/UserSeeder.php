<?php

use Illuminate\Database\Seeder;
use \App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
//        User::create([
//            'name' => 'aa',
//            'email' => 'aa@abc.com',
//            'password' => bcrypt('123')
//        ]);

        User::create([
            'name' => 'bb',
            'email' => 'bb@abc.com',
            'password' => bcrypt('123')
        ]);

    }
}
