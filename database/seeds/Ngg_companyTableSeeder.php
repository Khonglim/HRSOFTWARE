<?php

use Illuminate\Database\Seeder;

class Ngg_companyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'Tai Minere',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'Unique Wear',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'NIO Achievers',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'Sestosenso',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'NGG Timepieces',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'DTZ Luxury',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'Cien',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'Cien - Korat',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'HPT',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);
      
        DB::table('ngg_company')->insert([ 
        	'ncp_name' => 'CherChim',
            'ncp_remark' => '',
            'ncp_enable' => '1',
        ]);

        


    }
}
