<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class TestTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tb_choice')->insert([
            'question' => '1.ข้าพเจ้าชอบที่จะ',
            'choice1' => 'ก.แก้ปัญหาใหม่ๆที่มีความสลับซับซ้อน',
            'choice2' => 'ข.เลือทำงานที่เคยทำสำเร็จมาแล้ว',
            'answer1' => '1',
            'answer2' => '2'
        ]);
        DB::table('tb_choice')->insert([
            'question' => '2.ข้าพเจ้าชอบที่จะ',
            'choice1' => 'ก.ทำงานตามลำพังในที่สงบเงียบ',
            'choice2' => 'ข.อยู่ตรงที่งานกำลังดำเนินอยู่',
            'answer1' => '1',
            'answer2' => '2'
        ]);
    }
}
