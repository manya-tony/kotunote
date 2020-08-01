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
            'user_id' => 3,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

        DB::table('records')->insert([
            'record_name' => '映画',
            'user_id' => 3,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

        DB::table('records')->insert([
            'record_name' => 'ささみどれくらい食べたか',
            'user_id' => 4,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

        DB::table('records')->insert([
            'record_name' => '本日の大特価',
            'user_id' => 5,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

        DB::table('records')->insert([
            'record_name' => '筋トレ',
            'user_id' => 6,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

        DB::table('records')->insert([
            'record_name' => 'お菓子',
            'user_id' => 7,
            'release' => true,
            'created_at' => '2017-01-01 01:00:00',
            'updated_at' => '2017-01-01 01:00:00'
        ]);

    }
}
