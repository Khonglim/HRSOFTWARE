<?php

use Illuminate\Database\Seeder;

class InterviewTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('_interview')->insert([
            'choice' => '1. บุคลิกลักษณะ พิจารณาท่วงทีกิริยามารยาท และ 
            ความเหมาะสมของการแต่งกาย (Appearance, Manner and Personality:
             Consider overall appearance, Mannerism, Poise, presentation, Speech)',
           
        ]);

        DB::table('_interview')->insert([
            'choice' => '2. การศึกษา/การฝึกอบรม พิจารณาประวัติการศึกษา สถาบัน และผลการรียน และการฝึกอบรม 
            (Education/Training: Consider educational background, Institute and GPA)',
           
        ]);

        DB::table('_interview')->insert([
            'choice' => '3. ทักษะทางคอมพิวเตอร์ พิจารณาความชำนาญในการใช้งานคอมพิวเตอรืโปรแกรมต่างๆ 
            ที่เกี่ยวข้องกับงาน (Computer literacy: Consider computer skills related to working 
            requirements)',
           
        ]);

        DB::table('_interview')->insert([
            'choice' => '4. ทักษะด้านภาษา พิจารณาความสามารถทางด้านภาษาที่ 2 หรือภาษาที่ 3 เช่น ภาษาอังกฤษ ภาษาจีน ภาษาญี่ปุ่น หรืออื่นๆ (Language skills: Consider 
            2nd or 3rd language proficiency i.e. English, Chinese, Japanese and etc.)',
        ]);


        DB::table('_interview')->insert([
            'choice' => '5. ประสบการณ์ทำงาน พิจารณาประสบการณ์ ความสามารถ ความรู้ ทางเทคนิคที่เกี่ยวข้องและเป็นประโยชน์กับตำแหน่งงานที่สมัคร
            (Relevant Experience: Consider working experience, professional skills and technical knowledge in position related areas)
            '
           ,
        ]);


        DB::table('_interview')->insert([
            'choice' => '6. การพัฒนาตนเอง ความสามารถในการเรียนรู้ และใส่ใจในการพัฒนาตนเอง 
            (Ability to learn and commitment for self-development)'
           ,
        ]);


        DB::table('_interview')->insert([
            'choice' => '7. ความสามารถในการวิเคราะห์ปัญหา ตลอดจนข้อคิดเห็นต่างๆในการแก้ไขปัญหาเหล่านั้น 
            (Problem solving skills and analytical reasoning ability: Consider articulation and organization of information, 
            thoughts and ideas during interview, mental alertness, keenness of mind, grasp of complex ideas, problem-solving ability)'
           ,
        ]);


        DB::table('_interview')->insert([
            'choice' => '8. การให้ความร่วมมือ การติดต่อประสานงานกับผู้อื่น 
            และความสามารถในการสื่อข้อความ 
            (Coordination / Interpersonal and Communication /skills)'
           ,
        ]);

        DB::table('_interview')->insert([
            'choice' => '9. ความคิดริเริ่ม / การเสนอข้อคิดเห็น / การยอมรับและปรับตัวเข้ากับการเปลี่ยนแปลง 
            (Innovation / Creativity and adaptability to new ideas and changes)'
           ,
        ]);

        DB::table('_interview')->insert([
            'choice' => '10. ทัศนคติ และวุฒิภาวะ พิจารณาจากความสัมพันธ์กับหัวหน้างาน เพื่อนร่วมงาน เหตุผลการลาออก 
            ความรับผิดชอบต่องาน ทัศนคติต่องานและ ครอบครัว (Attitude ad Maturity: Consider friction with former Supervisors, 
            colleague relationships, reason for leaving jobs, sense of responsibility, attitude towards work and towards family)'
           ,
        ]);

        DB::table('_interview')->insert([
            'choice' => '11. ความรู้เกี่ยวกับบริษัท พิจารณาจากการหาข้อมูลของบริษัท และความเข้าใจในการดำเนินธุรกิจของบริษัท รวมถึงมุมมองต่อบริษัท 
            (Company knowledge: Consider how well preparation on company’s information as well as company perception)'
           ,
        ]);

        DB::table('_interview')->insert([
            'choice' => '12. ความรอบรู้ในตำแหน่งงานที่สมัคร พิจารณาความเข้าใจในลักษณะงาน แนวปฏิบัติ ข้อจำกัด 
            และวิธีการบริหาร (Position knowledge: Consider overall position’s role & responsibilities understanding)'
           ,
        ]);
         
        DB::table('_interview')->insert([
            'choice' => '13. ซื่อสัตย์ (Honest)'
           ,
        ]);
        DB::table('_interview')->insert([
            'choice' => '14. รู้จักคุณค่าของสิ่งต่าง อาทิ ทรัทพ์สิน ความรู้ (Worth)'
           ,
        ]);
        DB::table('_interview')->insert([
            'choice' => '15. มุ่งมั่น ขยัน อดทน (Wealth Human Resources)'
           ,
        ]);
        DB::table('_interview')->insert([
            'choice' => '16. ตั้งมั่นในการบรรลุเป้าหมาย ตามเวลากำหนด (Target &Achievement) '
           ,
        ]);
        DB::table('_interview')->insert([
            'choice' => '17. พร้อมรับฟัง และ เปิดใจในสิ่งต่างๆ (Open Mind)'
           
        ]);
        DB::table('_interview')->insert([
            'choice' => '18. ใจบริการ (Service Mind)'
           ,
        ]);
        DB::table('_interview')->insert([
            'choice' => '19. คิดสร้างสรรค์ (Creativity)'
           ,
        ]);
        DB::table('_interview')->insert([
            'choice' => '20. เพียงพอ พอเพียง (Sufficiency Economy)'
           ,
        ]);
        
    }
}
