<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name'=> 'Nadiyah Qasamah',
            'email'=> 'nadiyahqass@gmail.com',
            'password'=> bcrypt('password'),
            'email_verified'=> 
        ]);
    }
}
