<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::query()->create([
            'username' => 'romka',
            'email' => 'nazyrov_roman@mail.ru',
            'password' => Hash::make('romka123'),
            'role' => 'admin'
        ]);

        User::query()->create([
            'username' => 'admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'role' => 'admin'
        ]);

        User::query()->create([
            'username' => 'user',
            'email' => 'user@gmail.com',
            'password' => Hash::make('user123'),
        ]);
    }
}
