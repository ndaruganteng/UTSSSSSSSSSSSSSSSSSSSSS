<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
        'nama' => 'Super Admin',
        'email' => 'superadmin@gmail.com',
        'password' => bcrypt("superadmin123"),
        'role' => 'admin',
        ]);
        
        DB::table('users')->insert([
        'nama' => 'viktor',
        'email' => 'viktor@gmail.com',
        'password' => bcrypt("viktor123"),
        'role' => 'user',
        ]);
    }
}