<?php

use Illuminate\Database\Seeder;


class Partofv2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('partofv2')->insert([
         	'id'=>'1',
            'part' => 'ด้านที่ 1 CORE COMPETENCY / คุณสมบัติของพนักงาน ',
            'id_form' => '1',
            'id_part' => '1',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'2',
            'part' => 'ด้านที่ 2 TECHNICAL COMPETENCIES / ความรู้ ความชำนาญในการทำงาน',
            'id_form' => '1',
            'id_part' => '2',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'3',
            'part' => 'ด้านที่ 3 MANAGERIAL / SUPERVISING COMPETENCIES / ความสามารถในการบริหาร',
            'id_form' => '1',
            'id_part' => '3',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'4',
            'part' => 'ด้านที่ 4  PERSONAL COMPETENCIES / พฤติกรรมส่วนบุคคล',
            'id_form' => '1',
            'id_part' => '4',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'5',
            'part' => 'ด้านที่ 5 COOPERATION / การให้ความร่วมมือ ',
            'id_form' => '1',
            'id_part' => '5',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        //////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////
             
        DB::table('partofv2')->insert([
         	'id'=>'6',
            'part' => 'ด้านที่ 1 CORE COMPETENCY/คุณสมบัติของพนักงาน',
            'id_form' => '2',
            'id_part' => '1',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'7',
            'part' => 'ด้านที่ 2 การประเมินด้านทักษะในการทำงาน (Skills)',
            'id_form' => '2',
            'id_part' => '2',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'8',
            'part' => 'ด้านที่ 3  การประเมินผลสำเร็จของงาน (KPIs / Performance Appraisal)',
            'id_form' => '2',
            'id_part' => '3',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'9',
            'part' => 'ด้านที่ 4 การประเมินด้านการให้ความร่วมมือ (Cooperation) )',
            'id_form' => '2',
            'id_part' => '4',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'10',
            'part' => 'ด้านที่ 5 การประเมินด้านเวลาการมาปฏิบัติงาน และวันลา (Attendant & Leave ',
            'id_form' => '2',
            'id_part' => '5',
            'subpart' => '1',
            'title' => 'หัวข้อ',
            
        ]);
        //////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////
             
        DB::table('partofv2')->insert([
         	'id'=>'11',
            'part' => 'ด้านที่ 1 CORE COMPETENCY/คุณสมบัติของพนักงาน',
            'id_form' => '3',
            'id_part' => '1',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'12',
            'part' => 'ด้านที่ 2 TECHNICAL COMPETENCIES / ความรู้ ความชำนาญในการทำงาน',
            'id_form' => '3',
            'id_part' => '2',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'13',
            'part' => 'ด้านที่ 3 MANAGERIAL / SUPERVISING COMPETENCIES / ความสามารถในการบริหาร',
            'id_form' => '3',
            'id_part' => '3',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'14',
            'part' => 'ด้านที่ 4  PERSONAL COMPETENCIES / พฤติกรรมส่วนบุคคล',
            'id_form' => '3',
            'id_part' => '4',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'15',
            'part' => 'ด้านที่ 5 COOPERATION/ การให้ความร่วมมือ ',
            'id_form' => '3',
            'id_part' => '5',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
        DB::table('partofv2')->insert([
         	'id'=>'16',
            'part' => 'ด้านที่ 6 ATTENDANT & LEAVE การประเมินด้านเวลาการมาปฏิบัติงาน และวันลา',
            'id_form' => '3',
            'id_part' => '6',
            'subpart' => '1',
            'title' => 'หัวข้อ',
            
        ]);


    }
}
