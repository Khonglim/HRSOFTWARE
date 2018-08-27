<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'admin',
            'isAdmin'=>'1',
            'password' => bcrypt('123456'),
        ]);
        DB::table('users')->insert([
            'name' => '58030',
            'password' => bcrypt('18101996'),
        ]);
        DB::table('users')->insert([
            'name' => '94003',
            'password' => bcrypt('12345'),
        ]);
         DB::table('users')->insert([
            'name' => '61055',
            'password' => bcrypt('3100905641225'),
        ]);
    }
}
