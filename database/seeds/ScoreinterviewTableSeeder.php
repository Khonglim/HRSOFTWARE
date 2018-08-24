<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ScoreinterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_scoreinterview')->insert([
            
            'score_interview' => '1',
            
        ]);
        
        DB::table('_scoreinterview')->insert([
           
            'score_interview' => '2',
          
        ]);

        DB::table('_scoreinterview')->insert([
            'score_interview' => '3',
           
        ]);

        DB::table('_scoreinterview')->insert([
            
            'score_interview' => '4',
        ]);
        DB::table('_scoreinterview')->insert([
            
            'score_interview' => '5',
        ]);
        
    }
}
