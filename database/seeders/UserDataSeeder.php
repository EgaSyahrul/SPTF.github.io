<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\DB;

class UserDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $userData =[
            [
                'name'=>'Admin',
                'email'=>'admin@gmail.com',
                'role'=>'admin',
                'password'=>Hash::make('12345678')
            ],
            [
                'name'=>'Pembeli 1',
                'email'=>'user1@gmail.com',
                'role'=>'user',
                'password'=>Hash::make('12345678')
            ],
            [
                'name'=>'Ega Syahrul Ramadhanto',
                'email'=>'egasyahrul2@gmail.com',
                'role'=>'superadmin',
                'password'=>Hash::make('12345678')
            ],
        ];
        DB::table('users')->insert($userData);
    }
}
