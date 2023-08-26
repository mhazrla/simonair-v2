<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->delete();

        $users = DB::table('users')->insert([
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name' => 'Administrator',
                'is_admin' => 1,
                'email' => 'admin@simonair.ipb.ac.id',
                'password' => Hash::make('Simonair321!')
            ],
            [
                'id' => \Ramsey\Uuid\Uuid::uuid4()->toString(),
                'name' => 'User',
                'is_admin' => 0,
                'email' => 'simonair@gmail.com',
                'password' => Hash::make('password'),
            ]

        ]);
    }
}
