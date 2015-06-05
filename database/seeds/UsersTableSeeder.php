<?php

use App\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder {

    public function run()
    {
        User::create([
            'name' => 'Rob Mills',
            'email' => 'robjmills@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }

}