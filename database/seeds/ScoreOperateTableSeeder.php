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
        DB::table('score_operate_')->insert([
            
            'score_operate_' => '1',
            
        ]);
        
        DB::table('score_operate_')->insert([
           
            'score_operate_' => '2',
          
        ]);

        DB::table('score_operate_')->insert([
            'score_operate_' => '3',
           
        ]);

        DB::table('score_operate_')->insert([
            
            'score_operate_' => '4',
        ]);
    }
}
