<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class RecordsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        DB::table('records')->insert([
            'record_name' => '読書',
            'user_id' => 1,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

        DB::table('records')->insert([
            'record_name' => '映画',
            'user_id' => 1,
            'release' => false,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

        DB::table('records')->insert([
            'record_name' => 'ゲーム',
            'user_id' => 2,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

        DB::table('records')->insert([
            'record_name' => 'ちゅな語録',
            'user_id' => 3,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

    }
}
