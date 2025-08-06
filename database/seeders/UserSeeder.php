<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $user = new User;
        $user->name = "fitriana";
        $user->email = "admin@gmail.com";
        $user->password = bcrypt("123456");
        $user->role = "admin";
        $user->save();
    }
}
