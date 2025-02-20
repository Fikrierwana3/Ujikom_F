<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
            'name' => 'Admin AN',
            'email' => 'adminan@gmail.com',
            'is_admin' => 1,
            'password' => bcrypt('admin2456')
         ]);
    }
}
