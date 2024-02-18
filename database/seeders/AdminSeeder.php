<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Hash;
use App\Models\User;
use App\Models\Admin;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::create([
        //     'name' => 'Admin',
        //     'email' => 'admin@mail.com',
        //     'password' => Hash::make('password')
        // ]);

        Admin::create([
            'name' => 'Admin',
            'username' => 'superadmin',
            'password' => Hash::make('password')
        ]);
    }
}
