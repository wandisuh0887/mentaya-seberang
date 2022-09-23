<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

class AdminSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'full_name' => 'Administrator',
            'email' => 'wandi.suhandi@ptrmu.com',
            'password' => Hash::make('123456'),
            'username' => 'admin',
            'photo' => null,
            'status' => 1,
        ]);
    }
}
