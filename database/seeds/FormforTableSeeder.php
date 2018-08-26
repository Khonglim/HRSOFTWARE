<?php
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class FormforTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('formfor')->insert([
            'form' => 'leader',
        ]);

         DB::table('formfor')->insert([
            'form' => 'officer',
        ]);

         DB::table('formfor')->insert([
            'form' => 'manager',
        ]);
    }
}
