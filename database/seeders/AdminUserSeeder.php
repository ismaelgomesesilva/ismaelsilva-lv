<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AdminUserSeeder extends Seeder
{
    public function run()
    {
        User::firstOrCreate(
            ['email' => 'alfa@example.com'],
            [
                'name' => 'Alfa Test',
                'password' => Hash::make('pass123'),
            ]
        );
    }
}
