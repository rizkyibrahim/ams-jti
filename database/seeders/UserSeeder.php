<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory()->create([
            'name' => 'Super Admin',
            'username' => 'superadmin',
            'role' => 'superadmin',
            'email' => 'superadmin@opencloud.id',
            'password' => bcrypt('password'),
        ]);
        User::factory()->create([
            'name' => 'Admin',
            'username' => 'admin',
            'role' => 'admin',
            'email' => 'admin@opencloud.id',
            'password' => bcrypt('password'),
        ]);
        User::factory()->create([
            'name' => 'User',
            'username' => 'user',
            'role' => 'user',
            'email' => 'user@opencloud.id',
            'password' => bcrypt('password'),
        ]);
    }
}