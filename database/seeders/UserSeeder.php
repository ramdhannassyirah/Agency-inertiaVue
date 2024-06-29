<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User();
        $user->name = 'Admin';
        $user->email = 'admin@gmail.com';
        $user->password = Hash::make('Rahasia123');
        $user->role = 'admin';
        $user->save();

        $user = new User();
        $user->name = 'Writer';
        $user->email = 'writer@gmail.com';
        $user->password = Hash::make('Rahasia123');
        $user->role = 'writer';
        $user->save();
    }
}
