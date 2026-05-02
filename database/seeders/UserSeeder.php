<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run()
    {
        User::create([
            'email' => 'admin@gmail.com',
            'name' => 'Admin',
            'username' => 'Admin',
            'role' => 1,
            'password' => bcrypt('12345678'),
        ]);
    }
}
