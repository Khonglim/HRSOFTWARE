<?php

use Illuminate\Database\Seeder;

class Ngg_levelTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ngg_level')->insert([
            
            'nlv_name' => 'Division Manager',
            'nlv_remark' => '',
            'nlv_enable' => '1',
        ]);
        DB::table('ngg_level')->insert([
       
            'nlv_name' => 'Department Manager',
            'nlv_remark' => '',
            'nlv_enable' => '1',
        ]);
        DB::table('ngg_level')->insert([
           
            'nlv_name' => 'Unit Manager',
            'nlv_remark' => '',
            'nlv_enable' => '1',
        ]);
        DB::table('ngg_level')->insert([
          
            'nlv_name' => 'Supervisor',
            'nlv_remark' => '',
            'nlv_enable' => '1',
        ]);
        DB::table('ngg_level')->insert([
       
            'nlv_name' => 'Officer',
            'nlv_remark' => '',
            'nlv_enable' => '1',
        ]);
        DB::table('ngg_level')->insert([
         
            'nlv_name' => 'Staff',
            'nlv_remark' => '',
            'nlv_enable' => '1',
        ]);
        DB::table('ngg_level')->insert([
         
            'nlv_name' => 'Executive',
            'nlv_remark' => '',
            'nlv_enable' => '1',
        ]);
    }
}
