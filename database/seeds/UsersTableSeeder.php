<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'=>'Fernando',
            'email'=>'fer.proa18@gmail.com',
            'password'=> bcrypt('123123'),
            'admin'=> true
        ]);

        User::create([
            'name'=>'Marcos',
            'email'=>'marc.proa18@gmail.com',
            'password'=> bcrypt('123123'),
            'admin'=> false
        ]);
    }
}
