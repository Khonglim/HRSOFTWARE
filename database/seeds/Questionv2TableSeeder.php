<?php

use Illuminate\Database\Seeder;

class Questionv2TableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('questionv2')->insert([
        	'q_id'=>'1',
            'ask' => '1. ซื่อสัตย์ (Honest) ',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'2',
            'ask' => '2. ทัศนคติที่ดี คิดบวกอยู่เสมอต่อองค์กรและส่วนรวม( Positive mindset )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'3',
            'ask' => '3. มีความพอเพียงและรู้จักคุณค่าการใช้ทรัพยากรอย่างคุ้มค่า ( Economy sufficient )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'4',
            'ask' => '4. การตั้งเป้าหมายและทำให้สำเร็จ ( Results oriented , Goals )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'5',
            'ask' => '5. ใฝ่เรียนรู้ ด้วยตนเอง ( Self learning )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'6',
            'ask' => '6. เปิดใจรับฟังสิ่งต่างๆ ( Open mind )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'7',
            'ask' => '7. มีใจบริการ ( Services mind )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'8',
            'ask' => '8. การมีความคิดสร้างสรรค์ที่มีประโยชน์ต่อส่วนรวมและงานที่ทำเพื่อพัฒนาต่อยอดงาน( Creativity )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'9',
            'ask' => 'Remarks / หมายเหตุ',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',
        ]);

//////////////////////////////////////////////////////////////////////////////////////////
        DB::table('questionv2')->insert([
        	'q_id'=>'1',
            'ask' => '1. ความรู้และทักษะในงาน (JOB KNOWLEDGE & SKILLS)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'2',
            'ask' => '2. การทำงานให้สำเร็จ (EXECUTION OF WORK)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'3',
            'ask' => '3.  ให้ความสำคัญกับผู้รับบริการ (CUSTOMER FOCUS)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'4',
            'ask' => '4.  ความสามารถในการติดต่อสื่อสาร (COMMUNICATION SKILLS)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'5',
            'ask' => 'Remarks / หมายเหตุ',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',
        ]);
 //////////////////////////////////////////////////////////////////////////////////////////
        DB::table('questionv2')->insert([
        	'q_id'=>'1',
            'ask' => '1. การบริหารการเปลี่ยนแปลง (MANAGEMENT OF CHANGE)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'2',
            'ask' => '2. การบริหารธุรกิจ (BUSINESS MANAGEMENT)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'3',
            'ask' => '3. ความรอบรู้ในทางการเงิน (FINANCIAL KNOWLEDGE)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'4',
            'ask' => '4. ความสามารถในการวางแผนและจัดระบบงาน (PLANNING & ORGANIZING)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'5',
            'ask' => '5. ฝึกสอนและพัฒนาผู้อื่น (COACHING / DEVELOPING OTHERS)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'6',
            'ask' => '6. ความสามารถในการแก้ปัญหา/ตัดสินใจ (PROBLEM SOLVING / DECISION MAKING)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'7',
            'ask' => '7. ความสามารถในการโน้มน้าวให้เกิดการปฏิบัติและการคลี่คลายความขัดแย้ง (INFLUENCING & CONFLICT RESOLUTION)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'8',
            'ask' => 'Remarks / หมายเหตุ',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',
        ]);
////////////////////////////////////////////////////////////////////////////////////////////////
        DB::table('questionv2')->insert([
        	'q_id'=>'1',
            'ask' => '1. การทำงานร่วมกันเป็นทีม (TEAM WORK)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'2',
            'ask' => '2. การจัดการกับอารมณ์ของตน (MANAGING EMOTIONS)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'3',
            'ask' => '3. ความสามารถในการจูงใจและพัฒนาตนเอง (SELF MOTIVATION / DEVELOPMENT)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'4',
            'ask' => 'Remarks / หมายเหตุ',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',
        ]);
 /////////////////////////////////////////////////////////////////////////////////////////////////
        DB::table('questionv2')->insert([
        	'q_id'=>'1',
            'ask' => '1. ปฎิบัติตามกฏระเบียบ ข้อบังคับ คำสั่ง นโยบาย ประกาศ ของบริษัทอย่างเคร่งครัด',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'2',
            'ask' => '2. การเข้าร่วมกิจกรรมและร่วมทำโครงการต่างๆ ที่บริษัทจัดขึ้น',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
        DB::table('questionv2')->insert([
        	'q_id'=>'3',
            'ask' => 'Remarks / หมายเหตุ',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',
        ]);
/////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////// 
    }
}
