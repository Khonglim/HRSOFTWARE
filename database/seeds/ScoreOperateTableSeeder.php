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
            
        ]);
        
        DB::table('_score_operate_')->insert([
           
            'score_operate' => '2',
          
        ]);

        DB::table('_score_operate_')->insert([
            'score_operate' => '3',
           
        ]);

        DB::table('_score_operate_')->insert([
            
            'score_operate' => '4',
        ]);
    }
}
