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
        
        // ひこのきろく
        for($i=1; $i<11; $i++) {
            DB::table('items')->insert([
                'text' => 'テスト投稿ですよ。'.$i,
                'record_id' => 3,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
        // ちゅなのきろく
        for($i=1; $i<11; $i++) {
            DB::table('items')->insert([
                'text' => 'テスト投稿ですよ。'.$i,
                'record_id' => 4,
                'created_at' => $now,
                'updated_at' => $now,
            ]);
        }
    }
}
