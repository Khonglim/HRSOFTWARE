<?php

use Illuminate\Database\Seeder;

class ScoreOperateTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_score_operate_')->insert([
            
            'score_operate' => '1',
            'meaning_operate'=> 'ต้องปรับปรุง',
            
        ]);
        
        DB::table('_score_operate_')->insert([
           
            'score_operate' => '2',
            'meaning_operate'=> 'พอใช้',
        ]);

        DB::table('_score_operate_')->insert([
            'score_operate' => '3',
            'meaning_operate'=> 'ดี',
        ]);

        DB::table('_score_operate_')->insert([
            
            'score_operate' => '4',
            'meaning_operate'=> 'ดีมาก
            ',
        ]);
    }
}
