<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
// use Illuminate\Support\Facades\File;


class User_Seeder extends Seeder
{
    public function run(): void
    {
        DB::table('users')->insert(
        [
        'name' => "khalid",
        'email' => "khan@gmail.com",
        'password' => Hash::make('123'),
        ],
        [
        'name' => "ameen",
        'email' => "ameen@gmail.com",
        'password' => Hash::make('123'),
        ],
        [
        'name' => "khalid1",
        'email' => "khankhan1@gmail.com",
        'password' => Hash::make('123'),
        ],
        [
        'name' => "ameen",
        'email' => "ameenkhan1@gmail.com",
        'password' => Hash::make('123'),
        ],
        );
              
    }
}
