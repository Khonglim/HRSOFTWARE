<?php

use Illuminate\Database\Seeder;

class DiscTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('disc')->insert([
            'choice1' => 'น่าเกรงขาม',
            'choice2' => 'มีชีวิตชีวา',
            'choice3' => 'ถ่อมตน',
            'choice4' => 'มีไหวพริบดี',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
        DB::table('disc')->insert([
            'choice1' => 'ทำงานเชิงรุก',
            'choice2' => 'อ่อนไหว',
            'choice3' => 'โอนอ่อนผ่อนตาม',
            'choice4' => 'คงเส้นคงวา',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
        DB::table('disc')->insert([
            'choice1' => 'พูดตรงไปตรงมา',
            'choice2' => 'ร่าเริง',
            'choice3' => 'ให้ความร่วมมือ',
            'choice4' => 'ถูกต้องแม่นยำ',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);

        DB::table('disc')->insert([
            'choice1' => 'ไม่ยอมแพ้',
            'choice2' => 'ชอบเข้าสังคม',
            'choice3' => 'อ่อนโยน',
            'choice4' => 'ชอบความสมบูรณ์แบบ',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);

        DB::table('disc')->insert([
            'choice1' => 'โลดโผน',
            'choice2' => 'ตัดสินใจด้วยอารมณ์',
            'choice3' => 'ใจดี',
            'choice4' => 'รอบคอบ',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
        DB::table('disc')->insert([
            'choice1' => 'ชอบแข่งขัน',
            'choice2' => 'ชอบแสดงออก',
            'choice3' => 'ชอบช่วยเหลือ',
            'choice4' => 'ชอบดูรายละเอียด',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
        DB::table('disc')->insert([
            'choice1' => 'กล้าเสี่ยง',
            'choice2' => 'ชอบพูดคุย',
            'choice3' => 'คิดถึงจิตใจคนอื่น',
            'choice4' => 'มองข้อเท็จจริง',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
        DB::table('disc')->insert([
            'choice1' => 'ชอบโต้แย้ง',
            'choice2' => 'สนุกสนาน',
            'choice3' => 'อดทน',
            'choice4' => 'มีเหตุมีผล',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
        DB::table('disc')->insert([
            'choice1' => 'กล้าหาญ',
            'choice2' => 'ใช้สัญชาตญาณ',
            'choice3' => 'ไม่ชอบความเปลี่ยนแปลง',
            'choice4' => 'มีระเบียบ',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
        DB::table('disc')->insert([
            'choice1' => 'ชอบควบคุม',
            'choice2' => 'มองโลกในเเง่ดี',
            'choice3' => 'รักสงบ',
            'choice4' => 'มีสติ',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
        DB::table('disc')->insert([
            'choice1' => 'เปิดเผิย',
            'choice2' => 'สดใส',
            'choice3' => 'จงรักภัคดี',
            'choice4' => 'จริงจัง',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);

        DB::table('disc')->insert([
            'choice1' => 'พึ่งตนเองได้',
            'choice2' => 'กระตือรือร้น',
            'choice3' => 'เป็นผู้ฟังที่ดี',
            'choice4' => 'มาตรฐานสูง',
            'answer1' => '1',
            'answer2' => '2',
            'answer3' => '3',
            'answer4' => '4',
        ]);
    }
}
