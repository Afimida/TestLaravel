<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\Hash;

class UsersTablesSeeder extends Seeder
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
            'email' => 'john_smith@gmail.com',
            'password' => Hash::make('admin'),
            'remember_token' => str_random(10),
        ]);
    }
}
