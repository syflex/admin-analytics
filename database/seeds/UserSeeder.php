<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'admin',
            'email' => 'admin@gmail.com',
            'password' =>  Hash::make('secret'),
        ]);

        User::create([
            'name' => 'simon',
            'email' => 'syflex360@gmail.com',
            'password' =>  Hash::make('secret'),
        ]);
    }
}
