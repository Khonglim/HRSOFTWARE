<?php

use Illuminate\Database\Seeder;

class OperateStaffTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '1. คุณภาพของงานที่ปฏิบัติ',
        ]);
                

        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '2. ปริมาณของงาน และเวลาที่ใช้ปฏิบัติงาน',
        ]);
             


        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '3. ความรับผิดชอบและไว้วางใจในการทำงาน',
        ]);
             


        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '4. การปฏิบัติตามคำสั่ง  และ คำแนะนำ',
        ]);
             
        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '5. การประพฤติตามระเบียบข้อบังคับของบริษัท',
        ]);
             


        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '6. ความซื่อสัตย์ และ น่าเชื่อถือไว้ใจ ',
        ]);
             




        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '7. ความตั้งใจและความกระตือรือร้นในการทำงานให้สำเร็จ',
        ]);
             

        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '8. ความสามารถในการเรียนรู้งาน ',
        ]);
             
        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '9. ความสามารถด้านการคิดริเริ่มสร้างสรรค์',
        ]);
             
        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '10. ความสามารถในการแก้ไขข้อบกพร่องของตนเอง ',
        ]);
             
        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '11. การให้ความร่วมมือประสานงานและการทำงานเป็นทีมกับผู้อื่น',
        ]);
        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '12. ความสามารถในการแก้ไขปัญหาเฉพาะหน้าและตัดสินใจด้วยตนเอง',
        ]);
                
        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '13. ทัศนคติที่มีต่อบริษัท',
        ]);
        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '14. การใช้ทรัพย์สินและค่าใช้จ่ายของบริษัทอย่างประหยัดและปลอดภัย',
        ]);
             

        DB::table('__operate_qstaff')->insert([
            'operate_qstaff' => '15. มีสุขภาพร่างกายพร้อมที่จะปฏิบัติงาน',
        ]);  
    }
}
