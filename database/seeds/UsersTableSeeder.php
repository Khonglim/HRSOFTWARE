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
            'name' => 'adminmaster',
            'isAdmin'=>'1',
            'isAdmin_Master'=>'1',
            'password' => bcrypt('123456789'),
        ]);
        DB::table('users')->insert([
            'name' => '58030',
            'password' => bcrypt('18101996'),
        ]);
         DB::table('users')->insert([
            'name' => '91112',
            'password' => bcrypt('3101600595921'),
        ]);
        DB::table('users')->insert([
            'name' => '91238',
            'password' => bcrypt('3102201864695'),
        ]);
         DB::table('users')->insert([
            'name' => '91111',
            'password' => bcrypt('3101701236668'),
        ]);
         DB::table('users')->insert([
            'name' => '61145',
            'password' => bcrypt('3710900675690'),
        ]);
          DB::table('users')->insert([
            'name' => '91077',
            'password' => bcrypt('3100903670392'),
        ]);
           DB::table('users')->insert([
            'name' => '62052',
            'password' => bcrypt('3101202479948'),
        ]);
           DB::table('users')->insert([
            'name' => '91086',
            'password' => bcrypt('3102200617091'),
        ]);
           DB::table('users')->insert([
            'name' => '81075',
            'password' => bcrypt('3101201634630'),
        ]);
           DB::table('users')->insert([
            'name' => '51043',
            'password' => bcrypt('3100901509021'),
        ]);
           DB::table('users')->insert([
            'name' => '91264',
            'password' => bcrypt('3341500030271'),
        ]);
           DB::table('users')->insert([
            'name' => '51171',
            'password' => bcrypt('3102401326034'),
        ]);
           DB::table('users')->insert([
            'name' => '51062',
            'password' => bcrypt('3101401353383'),
        ]);
           DB::table('users')->insert([
            'name' => '51193',
            'password' => bcrypt('1101800005340'),
        ]);
           DB::table('users')->insert([
            'name' => '41012',
            'password' => bcrypt('3100202263022'),
        ]);
           DB::table('users')->insert([
            'name' => '81057',
            'password' => bcrypt('1600100309804'),
        ]);
           DB::table('users')->insert([
            'name' => '91066',
            'password' => bcrypt('1311400004271'),
        ]);
           DB::table('users')->insert([
            'name' => '94005',
            'password' => bcrypt('1100800558488'),
        ]);
           DB::table('users')->insert([
            'name' => '94003',
            'password' => bcrypt('1100600194423'),
        ]);
           DB::table('users')->insert([
            'name' => '61007',
            'password' => bcrypt('3101800725004'),
        ]);
           DB::table('users')->insert([
            'name' => '61161',
            'password' => bcrypt('1101401193673'),
        ]);
           DB::table('users')->insert([
            'name' => '61163',
            'password' => bcrypt('3100202557476'),
        ]);
           DB::table('users')->insert([
            'name' => '21008',
            'password' => bcrypt('3600500793505'),
        ]);
           DB::table('users')->insert([
            'name' => '21007',
            'password' => bcrypt('3349900834447'),
        ]);
           DB::table('users')->insert([
            'name' => '21004',
            'password' => bcrypt('3321200201053'),
        ]);
           DB::table('users')->insert([
            'name' => '61024',
            'password' => bcrypt('3200400076589'),
        ]);
           DB::table('users')->insert([
            'name' => '61003',
            'password' => bcrypt('3400900572231'),
        ]);
           DB::table('users')->insert([
            'name' => '61197',
            'password' => bcrypt('1100900424416'),
        ]);
           DB::table('users')->insert([
            'name' => '91248',
            'password' => bcrypt('5929900001161'),
        ]);
           DB::table('users')->insert([
            'name' => '61079',
            'password' => bcrypt('3230400128414'),
        ]);
           DB::table('users')->insert([
            'name' => '61046',
            'password' => bcrypt('5301490008819'),
        ]);
           DB::table('users')->insert([
            'name' => '51067',
            'password' => bcrypt('1510690000549'),
        ]);
           DB::table('users')->insert([
            'name' => '51037',
            'password' => bcrypt('3450700364405'),
        ]);
           DB::table('users')->insert([
            'name' => '51019',
            'password' => bcrypt('3550600190625'),
        ]);
           DB::table('users')->insert([
            'name' => '51009',
            'password' => bcrypt('1710900024111'),
        ]);
           DB::table('users')->insert([
            'name' => '51018',
            'password' => bcrypt('3860400437497'),
        ]);
           DB::table('users')->insert([
            'name' => '51006',
            'password' => bcrypt('3180500334807'),
        ]);
           DB::table('users')->insert([
            'name' => '51001',
            'password' => bcrypt('3200900774862'),
        ]);
           DB::table('users')->insert([
            'name' => '91201',
            'password' => bcrypt('1100801049480'),
        ]);
           DB::table('users')->insert([
            'name' => '91258',
            'password' => bcrypt('3100700514841'),
        ]);DB::table('users')->insert([
            'name' => '61119',
            'password' => bcrypt('3102002400478'),
        ]);
        DB::table('users')->insert([
            'name' => '91005',
            'password' => bcrypt('3102200990816'),
        ]);
        DB::table('users')->insert([
            'name' => '91006',
            'password' => bcrypt('3101200141982'),
        ]);
        DB::table('users')->insert([
            'name' => '91265',
            'password' => bcrypt('3101200805040'),
        ]);
        DB::table('users')->insert([
            'name' => '91221',
            'password' => bcrypt('3750200386661'),
        ]);
        DB::table('users')->insert([
            'name' => '91099',
            'password' => bcrypt('3110400659143'),
        ]);
        DB::table('users')->insert([
            'name' => '91247',
            'password' => bcrypt('1560300019479'),
        ]);
        DB::table('users')->insert([
            'name' => '91135',
            'password' => bcrypt('1100400426096'),
        ]);
        DB::table('users')->insert([
            'name' => '91118',
            'password' => bcrypt('3129900340616'),
        ]);
        DB::table('users')->insert([
            'name' => '91129',
            'password' => bcrypt('3730100847402'),
        ]);
        DB::table('users')->insert([
            'name' => '42143',
            'password' => bcrypt('1709900828901'),
        ]);
        DB::table('users')->insert([
            'name' => '41002',
            'password' => bcrypt('3240300716403'),
        ]);
        DB::table('users')->insert([
            'name' => '21001',
            'password' => bcrypt('3102002873333'),
        ]);
        DB::table('users')->insert([
            'name' => '81071',
            'password' => bcrypt('1100400056183'),
        ]);
        DB::table('users')->insert([
            'name' => '81067',
            'password' => bcrypt('1100200384977'),
        ]);
        DB::table('users')->insert([
            'name' => '81047',
            'password' => bcrypt('3170200335981'),
        ]);
        DB::table('users')->insert([
            'name' => '61055',
            'password' => bcrypt('3100905641225'),
        ]);
        DB::table('users')->insert([
            'name' => '94002',
            'password' => bcrypt('1100200241017'),
        ]);
        DB::table('users')->insert([
            'name' => '21003',
            'password' => bcrypt('3101202984936'),
        ]);
        DB::table('users')->insert([
            'name' => '94001',
            'password' => bcrypt('3120300039194'),
        ]);
        DB::table('users')->insert([
            'name' => '81026',
            'password' => bcrypt('1709900706384'),
        ]);
        DB::table('users')->insert([
            'name' => '81080',
            'password' => bcrypt('3190600200292'),
        ]);
        DB::table('users')->insert([
            'name' => '51174',
            'password' => bcrypt('1440900128172'),
        ]);
        

    }
}
