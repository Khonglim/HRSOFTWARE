<?php

use Illuminate\Database\Seeder;

class ManagerTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('__manager')->insert([
           
            'manager' => '1.บุคลิกภาพ และการแต่งกาย',
        ]);

        DB::table('__manager')->insert([
           
            'manager' => '2.ความสุภาพ กิริยา มารยาท',
        ]);


        DB::table('__manager')->insert([
           
            'manager' => '3.ความเคร่งครัดต่อระเบียบวินัย',
        ]);

        DB::table('__manager')->insert([
           
            'manager' => '4.ความตรงต่อเวลา',
        ]);
        DB::table('__manager')->insert([
           
            'manager' => '5.การประพฤติต่อผู้บังคับบัญชา',
        ]);
        DB::table('__manager')->insert([
           
            'manager' => '6.ทัศนคติต่องาน / บริษัท',
        ]);
        DB::table('__manager')->insert([
           
            'manager' => '7.การช่วยเหลือเพื่อนร่วมงาน',
        ]);
        DB::table('__manager')->insert([
           
            'manager' => '8.ลักษณะความเป็นผู้นำ',
        ]);
        DB::table('__manager')->insert([
           
            'manager' => '9.ความคิดริเริ่ม สร้างสรรค์',
        ]);
        DB::table('__manager')->insert([
           
            'manager' => '10.ความคิดเห็นโดยทั่วไป',
        ]);
    }
}
