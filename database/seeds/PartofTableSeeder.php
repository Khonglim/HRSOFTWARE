<?php

use Illuminate\Database\Seeder;

class PartofTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
         DB::table('partof')->insert([
         	
            'part' => 'ด้านที่ 1 การประเมินด้านคุณสมบัติของพนักงาน (Core compentency)',
            'id_form' => '1',
            'id_part' => '1',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
          DB::table('partof')->insert([
          	
            'part' => 'ด้านที่ 2 การประเมินด้านภาวะผู้นำ (LEADERSHIP)	',
            'id_form' => '1',
            'id_part' => '2',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
           DB::table('partof')->insert([
           	
            'part' => 'ด้านที่ 3 การประเมินด้านทักษะในการทำงาน (Skills)',
            'id_form' => '1',
            'id_part' => '3',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
            DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 4  การประเมินผลสำเร็จของงาน (KPIs / Performance Appraisal)',
            'id_form' => '1',
            'id_part' => '4',
            'subpart' => 'A',
            'title' => 'A.หัวข้อ ( สำหรับพนักงานที่ทำงานอยู่ในสังกัดเดียวกันเท่านั้น )(Subject A:(For same company))',
            
            
        ]);
            DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 4  การประเมินผลสำเร็จของงาน (KPIs / Performance Appraisal)',
            'id_form' => '1',
            'id_part' => '4',
            'subpart' => 'B',
            'title' => 'B.หัวข้อ (สำหรับพนักงานที่ทำงานอยู่ต่างสังกัด)(Subject B:(For difference company))',
            
            
        ]);

             DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 5 การประเมินด้านการให้ความร่วมมือ (Cooperation)',
            'id_form' => '1',
            'id_part' => '5',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
             //////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////
              DB::table('partof')->insert([
          
            'part' => 'ด้านที่ 1 การประเมินด้านคุณสมบัติของพนักงาน (Core compentency)',
            'id_form' => '3',
            'id_part' => '1',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
          DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 2 การประเมินด้านทักษะในการทำงาน (Skills)',
            'id_form' => '3',
            'id_part' => '2',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
           DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 3  การประเมินผลสำเร็จของงาน (KPIs / Performance Appraisal)',
            'id_form' => '3',
            'id_part' => '3',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
            DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 4 การประเมินด้านการให้ความร่วมมือ (Cooperation)',
            'id_form' => '3',
            'id_part' => '4',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
            
        ]);
             DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 5 การประเมินด้านเวลาการมาปฏิบัติงาน และวันลา (Attendant & Leave )',
            'id_form' => '3',
            'id_part' => '5',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
             /////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////
              /////////////////////////////////////////////////////////////////////////////////////////////

           DB::table('partof')->insert([
          
            'part' => 'ด้านที่ 1 การประเมินด้านคุณสมบัติของพนักงาน (Core compentency)',
            'id_form' => '2',
            'id_part' => '1',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
          DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 2 การประเมินด้านทักษะในการทำงาน (Skills)',
            'id_form' => '2',
            'id_part' => '2',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
           DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 3  การประเมินผลสำเร็จของงาน (KPIs / Performance Appraisal)',
            'id_form' => '2',
            'id_part' => '3',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);
            DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 4 การประเมินด้านการให้ความร่วมมือ (Cooperation)',
            'id_form' => '2',
            'id_part' => '4',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
            
        ]);
             DB::table('partof')->insert([
            
            'part' => 'ด้านที่ 5 การประเมินด้านเวลาการมาปฏิบัติงาน และวันลา (Attendant & Leave )',
            'id_form' => '2',
            'id_part' => '5',
            'subpart' => '0',
            'title' => 'หัวข้อ',
            
        ]);


    }
}
