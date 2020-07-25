<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('users')->insert([
            'name' => 'とにぃ',
            'email' => 'tony@test.com',
            'email_verified_at' => '2017-01-01 00:00:00',
            'password' => Hash::make('test1234'),
            'remember_token' => '',
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);

        DB::table('users')->insert([
            'name' => 'ひこ',
            'email' => 'hiko@test.com',
            'email_verified_at' => '2017-01-01 00:00:00',
            'password' => Hash::make('test1234'),
            'remember_token' => '',
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);

        DB::table('users')->insert([
            'name' => 'ちゅな',
            'email' => 'chuna@test.com',
            'email_verified_at' => '2017-01-01 00:00:00',
            'password' => Hash::make('test1234'),
            'remember_token' => '',
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);

    }
}
