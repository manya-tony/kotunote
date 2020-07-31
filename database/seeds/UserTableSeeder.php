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
            'name' => 'ささみ',
            'email' => 'sasami@test.com',
            'email_verified_at' => '2017-01-01 00:00:00',
            'password' => Hash::make('test1234'),
            'remember_token' => '',
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);

        DB::table('users')->insert([
            'name' => 'おさしみ',
            'email' => 'osashimi@test.com',
            'email_verified_at' => '2017-01-01 00:00:00',
            'password' => Hash::make('test1234'),
            'remember_token' => '',
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);

        DB::table('users')->insert([
            'name' => 'うまみ',
            'email' => 'umami@test.com',
            'email_verified_at' => '2017-01-01 00:00:00',
            'password' => Hash::make('test1234'),
            'remember_token' => '',
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);

        DB::table('users')->insert([
            'name' => 'あまみ',
            'email' => 'amami@test.com',
            'email_verified_at' => '2017-01-01 00:00:00',
            'password' => Hash::make('test1234'),
            'remember_token' => '',
            'created_at' => '2017-01-01 00:00:00',
            'updated_at' => '2017-01-01 00:00:00',
        ]);

    }
}
