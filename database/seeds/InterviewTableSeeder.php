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
        DB::table('_interview_sup')->insert([
            'choice' => '1. บุคลิกลักษณะ พิจารณาท่วงทีกิริยามารยาท และ 
            ความเหมาะสมของการแต่งกาย (Appearance, Manner and Personality:
             Consider overall appearance, Mannerism, Poise, presentation, Speech)',
            'id_head' => '1',
           
        ]);

        DB::table('_interview_sup')->insert([
            'choice' => '2. การศึกษา/การฝึกอบรม พิจารณาประวัติการศึกษา สถาบัน และผลการรียน และการฝึกอบรม 
            (Education/Training: Consider educational background, Institute and GPA)',
            'id_head' => '2',
        ]);

        DB::table('_interview_sup')->insert([
            'choice' => '3. ทักษะทางคอมพิวเตอร์ พิจารณาความชำนาญในการใช้งานคอมพิวเตอรืโปรแกรมต่างๆ 
            ที่เกี่ยวข้องกับงาน (Computer literacy: Consider computer skills related to working 
            requirements)',
            'id_head' => '2',
        ]);

        DB::table('_interview_sup')->insert([
            'choice' => '4. ทักษะด้านภาษา พิจารณาความสามารถทางด้านภาษาที่ 2 หรือภาษาที่ 3 เช่น ภาษาอังกฤษ ภาษาจีน ภาษาญี่ปุ่น หรืออื่นๆ (Language skills: Consider 
            2nd or 3rd language proficiency i.e. English, Chinese, Japanese and etc.)',
            'id_head' => '2',
        ]);


        DB::table('_interview_sup')->insert([
            'choice' => '5. ประสบการณ์ทำงาน พิจารณาประสบการณ์ ความสามารถ ความรู้ ทางเทคนิคที่เกี่ยวข้องและเป็นประโยชน์กับตำแหน่งงานที่สมัคร
            (Relevant Experience: Consider working experience, professional skills and technical knowledge in position related areas)
            '
           ,
           'id_head' => '2',
        ]);


        DB::table('_interview_sup')->insert([
            'choice' => '6. การพัฒนาตนเอง ความสามารถในการเรียนรู้ และใส่ใจในการพัฒนาตนเอง 
            (Ability to learn and commitment for self-development)'
           ,
           'id_head' => '3',
        ]);


        DB::table('_interview_sup')->insert([
            'choice' => '7. ความสามารถในการวิเคราะห์ปัญหา ตลอดจนข้อคิดเห็นต่างๆในการแก้ไขปัญหาเหล่านั้น 
            (Problem solving skills and analytical reasoning ability: Consider articulation and organization of information, 
            thoughts and ideas during interview, mental alertness, keenness of mind, grasp of complex ideas, problem-solving ability)'
           ,
           'id_head' => '3',
        ]);


        DB::table('_interview_sup')->insert([
            'choice' => '8. การให้ความร่วมมือ การติดต่อประสานงานกับผู้อื่น 
            และความสามารถในการสื่อข้อความ 
            (Coordination / Interpersonal and Communication /skills)'
           ,
           'id_head' => '3',
        ]);

        DB::table('_interview_sup')->insert([
            'choice' => '9. ความคิดริเริ่ม / การเสนอข้อคิดเห็น / การยอมรับและปรับตัวเข้ากับการเปลี่ยนแปลง 
            (Innovation / Creativity and adaptability to new ideas and changes)'
           ,
           'id_head' => '3',
        ]);

        DB::table('_interview_sup')->insert([
            'choice' => '10. ทัศนคติ และวุฒิภาวะ พิจารณาจากความสัมพันธ์กับหัวหน้างาน เพื่อนร่วมงาน เหตุผลการลาออก 
            ความรับผิดชอบต่องาน ทัศนคติต่องานและ ครอบครัว (Attitude ad Maturity: Consider friction with former Supervisors, 
            colleague relationships, reason for leaving jobs, sense of responsibility, attitude towards work and towards family)'
           ,
           'id_head' => '3',
        ]);

        DB::table('_interview_sup')->insert([
            'choice' => '11. ความรู้เกี่ยวกับบริษัท พิจารณาจากการหาข้อมูลของบริษัท และความเข้าใจในการดำเนินธุรกิจของบริษัท รวมถึงมุมมองต่อบริษัท 
            (Company knowledge: Consider how well preparation on company’s information as well as company perception)'
           ,
           'id_head' => '4',
        ]);

        DB::table('_interview_sup')->insert([
            'choice' => '12. ความรอบรู้ในตำแหน่งงานที่สมัคร พิจารณาความเข้าใจในลักษณะงาน แนวปฏิบัติ ข้อจำกัด 
            และวิธีการบริหาร (Position knowledge: Consider overall position’s role & responsibilities understanding)'
           ,
           'id_head' => '4',
        ]);
         
        DB::table('_interview_sup')->insert([
            'choice' => '13. มีความรู้ความสามารถในงานที่รับผิดชอบ และพร้อมพัฒนาอย่างต่อเนื่อง เพื่อเกิดความเป็นมืออาชีพ(Skill)'
           ,
           'id_head' => '5',
        ]);
        DB::table('_interview_sup')->insert([
            'choice' => '14.เป้าหมายสามารถวัดผลได้อย่างชัดเจน (Measurable)'
           ,
           'id_head' => '5',
        ]);
        DB::table('_interview_sup')->insert([
            'choice' => '15. มีวิธีการต่างๆ ในการปฏิบัติให้ไปถึงเป้าหมายอย่างสมบูรณ์ (Attainable & Achieve)'
           ,
           'id_head' => '5',
        ]);
        DB::table('_interview_sup')->insert([
            'choice' => '16. รู้คุณค่า ความหมายความสำคัญ ของการทุ่มเท (Relevaat)'
           ,
           'id_head' => '5',
        ]);
        DB::table('_interview_sup')->insert([
            'choice' => '17.การกำหนดขอบเขตหรือวันเวลาที่ชัดเจน (Target & Time-based)',
            'id_head' => '5',
           
        ]);
        DB::table('_interview_sup')->insert([
            'choice' => '18.ร่วมใจเป็นหนึ่งและเคารพในสิทธิความคิดส่วนบุคคล อย่างเท่าเทียมกัน(Team Work)'
           ,
           'id_head' => '5',
        ]);
        DB::table('_interview_sup')->insert([
            'choice' => '19. มีกฏ กติกา มารยาทในการทำงานและอยู่ร่วมกัน ไม่ล่วงละเมิดสิทธิ์ ของผู้ร่วมงาน ให้เกียรติผู้อื่น และ เคารพซึ่งกันและกัน(Do the rigtht thing)'
           ,
           'id_head' => '5',
        ]);
        DB::table('_interview_sup')->insert([
            'choice' => '20.การสร้างความสุข และความสำเร็จ โดยการสร้าง ตนเอง ให้มีคุณค่าในสายตาของคนในสังคมนั้น(Happy and Success Theory)'
           ,
           'id_head' => '5',
        ]);
        
    }
}
