<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insertOrIgnore(
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'example@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('1234'),
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 1,
                'name' => 'Admin',
                'email' => 'example@gmail.com',
                'email_verified_at' => now(),
                'password' => Hash::make('Juliet@1234'),
                'created_at' => now(),
                'updated_at' => now()
            ]
        );
    }
}
