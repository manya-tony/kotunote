<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class Items3TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = Carbon::now();
        
        for($i=1; $i<11; $i++) {
            DB::table('items')->insert([
                'text' => 'ささみ '.$i.'00グラム',
                'record_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
        for($i=1; $i<11; $i++) {
            DB::table('items')->insert([
                'text' => 'サーモン '.$i.'0円',
                'record_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
        for($i=1; $i<11; $i++) {
            DB::table('items')->insert([
                'text' => 'サーモン '.$i.'0円',
                'record_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
        for($i=1; $i<11; $i++) {
            DB::table('items')->insert([
                'text' => 'デッドリフト'.$i,
                'record_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
        for($i=1; $i<11; $i++) {
            DB::table('items')->insert([
                'text' => 'ピノ'.$i.'こ',
                'record_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
