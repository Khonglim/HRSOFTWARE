<?php

use Illuminate\Database\Seeder;

class QuestionTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('question')->insert([

        	'q_id'=>'1',
            'ask' => '1. ความซื่อสัตย์ ( Honest )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
        DB::table('question')->insert([
        	'q_id'=>'2',
            'ask' => '2. ทัศนคติที่ดี ( Good mindset )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
        DB::table('question')->insert([
        	'q_id'=>'3',
            'ask' => '3. การรู้จักคุณค่าของสิ่งของ ( See Value of things, Worth )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
          DB::table('question')->insert([
        	'q_id'=>'4',
            'ask' => '4. การตั้งมั่นในการบรรลุเป้าหมาย ( Achievement )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
            DB::table('question')->insert([
        	'q_id'=>'5',
            'ask' => '5. ใฝ่เรียนรู้ ด้วยตนเอง ( Self learning )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
              DB::table('question')->insert([
        	'q_id'=>'6',
            'ask' => '6. เปิดใจรับฟังสิ่งต่างๆ ( Open mind)',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                DB::table('question')->insert([
        	'q_id'=>'7',
            'ask' => '7. มีใจบริการ ( Services mind)',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                  DB::table('question')->insert([
        	'q_id'=>'8',
            'ask' => '8. มีความพอเพียง ( Economy sufficient )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                    DB::table('question')->insert([
        	'q_id'=>'9',
            'ask' => '9. การตั้งเป้าหมายและทำให้สำเร็จ ( Results oriented , Goals )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'10',
            'ask' => '10. การมีความคิดสร้างสรรค์ ( Creativity )',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]); 
                      DB::table('question')->insert([
        	'q_id'=>'11',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '1',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',
           
            
        ]);
//////////////////////////////////////////////////////////////////////////////////////////
                      DB::table('question')->insert([
        	'q_id'=>'1',
            'ask' => '1. ความสามารถสร้างแรงจูงใจและพัฒนาผู้ใต้บังคับบัญชาให้ปฏิบัติงานได้อย่างมีประสิทธิภาพ (Ability to motivate and develop subordinates.)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'2',
            'ask' => '2. ความสามารถในการทำงาน บังคับบัญชา และควบคุมระเบียบวินัย (Ability to work, manage and control rule and regulation)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'3',
            'ask' => '3. ความสามารถในการกำหนดแผนงานร่วมกับทีมงานในเชิงกลยุทธ (Abilty to do startegic plan with team)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'4',
            'ask' => '4. ความสามารถในการแก้ไขปัญหากับทีมงานได้อย่างรวดเร็วและแม่นยำ	(Ability to solve problem with team with fast and accurate decision)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'5',
            'ask' => '5. ความคิดสร้างสรรที่เป็นประโยชน์ในงานเพื่อต่อยอดพัฒนางาน 	(Ability to initiative in order to develop and add value)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'6',
            'ask' => '6. ความสามารถในการทำงานภายใต้แรงกดดัน (Ability to work under pressure)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'7',
            'ask' => '7. ความสามารถในการสรุปงานและการนำเสนองานได้อย่างมืออาชีพ (Ability to summarize and do report as professional)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'8',
            'ask' => '8. อัตราการลาออกของพนักงาน	(Turn over rate)',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
        	'q_id'=>'9',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '2',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',
           
            
        ]);
//////////////////////////////////////////////////////////////////////////////////////////
                       DB::table('question')->insert([
        	'q_id'=>'1',
            'ask' => '1. ความรู้ในระบบการทำงาน รวมถึงการบริหารจัดการ การมอบหมายงาน การควบคุมและติดตามงาน	(Knowledge of management assign job and follow up)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
        	'q_id'=>'2',
            'ask' => '2.ความรู้ในผลิตภัณฑ์และสินค้า รวมถึงกระบวนการผลิต (Knowledge of products and services, include production process)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
        	'q_id'=>'3',
            'ask' => '3. ความรู้ในเรื่องของช่องทางการจำหน่ายและลูกค้า (Knowledge of channel of distribution)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
        	'q_id'=>'4',
            'ask' => '4. ความสามารถในการปรับตัวเพื่อรับงานได้หลายด้าน (Ability to do multi task, Multi skill)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
        	'q_id'=>'5',
            'ask' => '5. ความถี่ในการจัดประชุมเพื่อแจ้งนโยบายและแก้ไขปัญหาได้อย่างมีประสิทธิภาพ	(Frequency of meeting to solve problem and make understanding with team)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
        	'q_id'=>'6',
            'ask' => '6. ความสามารถบริหารเวลากับปริมาณของงานเพื่อให้จัดส่งงานได้ตรงตามกำหนด	(Ability to manage time with quantity of work and on time delivery of works.)',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
        	'q_id'=>'7',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '3',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',


		]);
//////////////////////////////////////////////////////////////////////////////////////////	
                        DB::table('question')->insert([
        	'q_id'=>'1',
            'ask' => '1. ผลกำไร ของบริษัท เพิ่มขึ้น(Profit of company increase)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'A',
            'point' => '0',


		]);	
                         DB::table('question')->insert([
        	'q_id'=>'2',
            'ask' => '2. การลดค่าใช้จ่ายในการดำเนินงานโดยรวมได้อย่างยั่งยืน	(Reduce expenses in sustainable way)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'A',
            'point' => '0',


		]);	
                          DB::table('question')->insert([
        	'q_id'=>'3',
            'ask' => '3. ยอดจำหน่ายที่เพิ่มขึ้นอย่างต่อเนื่อง (Increase in sales volume)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'A',
            'point' => '0',


		]);	
                           DB::table('question')->insert([
        	'q_id'=>'4',
            'ask' => '4. การขยายช่องทางการจำหน่ายที่เพิ่มขึ้นอย่างต่อเนื่อง (Expand channel of sales)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'A',
            'point' => '0',


		]);	
                            
                             DB::table('question')->insert([
        	'q_id'=>'5',
            'ask' => '5. การควบคุมคุณภาพและรักษามาตรฐานของสินค้า (Quality control and maintain standard of products)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'A',
            'point' => '0',


		]);	
                             DB::table('question')->insert([
        	'q_id'=>'6',
            'ask' => '6. การวางนโยบายบริหารโดยภาพรวม นำพาไปสู่ผลกำไร และการเติบโตแบบยั่งยืนของบริษัท (Initiate policy in order to align with goals of company.)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'A',
            'point' => '0',


		]);
                              DB::table('question')->insert([
        	'q_id'=>'7',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'A',
            'point' => '-',


		]);
//////////////////////////////////////////////////////////////////////////////////////////
                               DB::table('question')->insert([
        	'q_id'=>'1',
            'ask' => '1. ภาพรวมของการบริหารงานที่มีความคืบหน้าและดีขึ้นอย่างต่อเนื่อง(Progress of management and overall pictures of company.)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'B',
            'point' => '0',


		]);
                              DB::table('question')->insert([
        	'q_id'=>'2',
            'ask' => '2. ภาพรวมของระบบการจัดการบริหาร ดูแลพัฒนา ผู้ใต้บังคับบัญชาได้อย่างมีประสิทธิภาพ (Overall management of subordinates and development skill for subordiates)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'B',
            'point' => '0',


		]);	
                               DB::table('question')->insert([
        	'q_id'=>'3',
            'ask' => '3. การสื่อสารอย่างมีประสิทธิภาพเพื่อให้เกิดความเข้าใจในงานที่ได้รับมอบหมาย (Communication skill in order to make clear of work)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'B',
            'point' => '0',


		]);
                                DB::table('question')->insert([
        	'q_id'=>'4',
            'ask' => '4. ภาพรวมของการลดปัญหาความขัดแย้งในองค์กร (Problem solving skill and lead to efficientcy solution)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'B',
            'point' => '0',


		]);
                                 DB::table('question')->insert([
        	'q_id'=>'5',
            'ask' => '5. การลงมือปฏิบัติร่วมเพื่อให้งานสามารถบรรลุผลได้อย่างมีประสิทธิภาพ(Cooperation and action in order to get the work done.)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'B',
            'point' => '0',


		]);
                                  DB::table('question')->insert([
        	'q_id'=>'6',
            'ask' => '6. การวางนโยบายบริหารโดยภาพรวม นำพาไปสู่ผลกำไร และการเติบโตแบบยั่งยืน (Initiate policy in order to align with goals of company.)',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'B',
            'point' => '0',


		]);
                                   DB::table('question')->insert([
        	'q_id'=>'7',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '4',
            'id_form' => '1',
            'q_subpart' =>'B',
            'point' => '-',


		]);
        //////////////////////////////////////////////////////////////////////////////////////////
                        DB::table('question')->insert([
        	'q_id'=>'1',
            'ask' => '1. แสดงออกถึงความรับผิดชอบ และความกระตือรือร้น ความตั้งใจในการปฏิบัติงาน เมื่อได้รับมอบหมายงานไม่ว่าจะเป็นงานปัจจุบันหรืองานเพิ่มเติม / งานพิเศษจากผู้บริหารสูงสุด	(Show of for responsibility, enthusiasm on routine work or when being assigned by CEO )',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',


		]);
                        DB::table('question')->insert([
        	'q_id'=>'2',
            'ask' => '2. มีส่วนร่วมในการดำเนินงานของหน่วยงานที่สังกัดอยู่เสมอ ทั้งในด้านการเสนอแนวคิด การแจ้งปัญหาและแก้ไขปัญหา หรือการลงมือปฏิบัติ โดยมีวิธีการต่างๆ ในการปฏิบัติงานที่เป็นประโยชน์ (Participation on work whether by ideas, inform about problems, advise solution and doing in order to create good performance and good results	)',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',


		]);
                        DB::table('question')->insert([
        	'q_id'=>'3',
            'ask' => '3. มีพฤติกรรมการให้ความช่วยเหลือ / อำนวยความสะดวกในการปฏิบัติงานให้กับหน่วยงานที่เกี่ยวข้อง และ เพื่อนร่วมงาน (ผู้ใต้บังคับบัญชา) 	(Services mind and cooperate with other functions of work and acts according to rule and regulation with colleague and subordinates.)',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',


		]);DB::table('question')->insert([
        	'q_id'=>'4',
            'ask' => '4.มีการกระตุ้นความสร้างสรรค์และการจัดการบริหารงานเป็นแบบทีมเวิร์ค (Stimulate for creativity and manage team work.)',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',


		]);
		DB::table('question')->insert([
        	'q_id'=>'5',
            'ask' => '5. การเข้าร่วมกิจกรรมและร่วมทำโครงการต่างๆ ที่บริษัทจัดขึ้น (Participate in activities of company and act according to rule and regulation of company.)',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '0',


		]);
		DB::table('question')->insert([
        	'q_id'=>'6',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '5',
            'id_form' => '1',
            'q_subpart' =>'0',
            'point' => '-',


		]);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
         DB::table('question')->insert([

            'q_id'=>'1',
            'ask' => '1. ความซื่อสัตย์ ( Honest )',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
        DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. ทัศนคติที่ดี ( Good mindset )',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
        DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. การรู้จักคุณค่าของสิ่งของ ( See Value of things, Worth )',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
          DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. การตั้งมั่นในการบรรลุเป้าหมาย ( Achievement )',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
            DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. ใฝ่เรียนรู้ ด้วยตนเอง ( Self learning )',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
              DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => '6. เปิดใจรับฟังสิ่งต่างๆ ( Open mind)',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                DB::table('question')->insert([
            'q_id'=>'7',
            'ask' => '7. มีใจบริการ ( Services mind)',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                  DB::table('question')->insert([
            'q_id'=>'8',
            'ask' => '8. มีความพอเพียง ( Economy sufficient )',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                    DB::table('question')->insert([
            'q_id'=>'9',
            'ask' => '9. การตั้งเป้าหมายและทำให้สำเร็จ ( Results oriented , Goals )',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
            'q_id'=>'10',
            'ask' => '10. การมีความคิดสร้างสรรค์ ( Creativity )',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]); 
                      DB::table('question')->insert([
            'q_id'=>'11',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '1',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '-',
           
            
        ]);
//////////////////////////////////////////////////////////////////////////////////////////
                      DB::table('question')->insert([
            'q_id'=>'1',
            'ask' => '1. ความรู้ในระบบการทำงาน รวมถึงการบริหารจัดการ การมอบหมายงาน การควบคุมและติดตามงาน    (1. Knowledge of management assign job and follow up)',
            'id_part' => '2',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2.ความรู้ในผลิตภัณฑ์และสินค้า รวมถึงกระบวนการผลิต (Knowledge of products and services, include production process)',
            'id_part' => '2',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. ความรู้ในเรื่องของช่องทางการจำหน่ายและลูกค้า (Knowledge of channel of distribution)',
            'id_part' => '2',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. ความสามารถในการปรับตัวเพื่อรับงานได้หลายด้าน (Ability to do multi task, Multi skill)',
            'id_part' => '2',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. ความสามารถในการทำงานภายใต้แรงกดดัน (Ability to work under pressure)',
            'id_part' => '2',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => '6. ความสามารถในการสรุปงานและการนำเสนองานได้อย่างมืออาชีพ (Ability to present as professional)',
            'id_part' => '2',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
            'q_id'=>'7',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '2',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '-',


        ]);
        //////////////////////////////////////////////////////////////////////////////////////////
                        DB::table('question')->insert([
            'q_id'=>'1',
            'ask' => '1. แผนงานในเชิงกลยุทธตอบโจทย์ กลุ่มลูกค้า และนำพาไปสู่ความสำเร็จ ( Strategic plan that align with goals and target of company)',
            'id_part' => '3',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',


        ]);
                        DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. ความสามารถบริหารเวลากับปริมาณของงานเพื่อให้จัดส่งงานได้ตรงตามกำหนด ( Ability to manage time and quantity of work and delivery work ontime)',
            'id_part' => '3',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',


        ]);
                      DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. ยอดจำหน่ายที่เพิ่มขึ้นอย่างต่อเนื่อง (Increase of sales in long term)',
            'id_part' => '3',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                      DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. การขยายช่องทางการจำหน่ายที่เพิ่มขึ้นอย่างต่อเนื่อง (Expand of channel of distribution)',
            'id_part' => '3',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                      DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. ความคิดสร้างสรรที่เป็นประโยชน์ในงานเพื่อต่อยอดพัฒนางาน (Creativity and initiatives to deliver new ideas for work)',
            'id_part' => '3',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                      DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '3',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '-',
        ]);
                      //////////////////////////////////////////////////////////////////////////////////////////
                      DB::table('question')->insert([
            'q_id'=>'1',
            'ask' => '1. แสดงออกถึงความรับผิดชอบ และความกระตือรือร้น ความตั้งใจในการปฏิบัติงานเมื่อได้รับมอบหมายงานไม่ว่าจะเป็นงานปัจจุบันหรืองานเพิ่มเติม / งานพิเศษจากผู้บังคับบัญชา (Show of for responsibility, enthusiasm on routine work or when being assigned by Upper level manager)',
            'id_part' => '4',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                      DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. มีส่วนร่วมในการดำเนินงานของหน่วยงานที่สังกัดอยู่เสมอ ทั้งในด้านการเสนอแนวคิด การแจ้งปัญหาและแก้ไขปัญหา หรือการลงมือปฏิบัติ โดยมีวิธีการต่างๆ ในการปฏิบัติงานที่เป็นประโยชน์ (Participation on work whether by ideas, inform about problems, advise solution and doing in order to create good performance and good results)',
            'id_part' => '4',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                    DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. มีพฤติกรรมการให้ความช่วยเหลือ / อำนวยความสะดวกในการปฏิบัติงานให้กับหัวหน้างาน หน่วยงานที่เกี่ยวข้อง และ เพื่อนร่วมงาน (Services mind and cooperate with other functions of work and acts according to rule and regulation with colleague and subordinates.)',
            'id_part' => '4',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);  
                    DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. ความสามารถในการกำหนดแผนงานร่วมกับทีมงานในเชิงกลยุทธ (Ability to manage and work with team for strategic plan)',
            'id_part' => '4',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                    DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. มีความสร้างสรรค์และทำงานสามารถทำงานร่วมกับผู้อื่นได้แบบทีมเวิร์ค ( Stimulate for creativity and manage team work.)',
            'id_part' => '4',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                    DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => '6. การเข้าร่วมกิจกรรมและร่วมทำโครงการต่างๆ ที่บริษัทจัดขึ้น (Participate in activities of company and act according to rule and regulation of company.)',
            'id_part' => '4',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                    DB::table('question')->insert([
            'q_id'=>'7',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '4',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '-',
        ]);
                    //////////////////////////////////////////////////////////////////////////////////////////
                     DB::table('question')->insert([
            'q_id'=>'1',
            'ask' => '1. ลาป่วย(Sick leave) ( 30 วัน)',
            'id_part' => '5',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                     DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. ลากิจ(Business leave) (6 วัน)',
            'id_part' => '5',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                     DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. มาสาย(Late)  (0 ครั้ง)',
            'id_part' => '5',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                     DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. ขาดงาน(Absent) (0 ครั้ง)',
            'id_part' => '5',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                     DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. ลาพักร้อน(Vacation leave) (6 วัน)',
            'id_part' => '5',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                      DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '5',
            'id_form' => '3',
            'q_subpart' =>'0',
            'point' => '-',
        ]);

////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
                      DB::table('question')->insert([

            'q_id'=>'1',
            'ask' => '1. ความซื่อสัตย์ ( Honest )',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
        DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. ทัศนคติที่ดี ( Good mindset )',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
        DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. การรู้จักคุณค่าของสิ่งของ ( See Value of things, Worth )',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
          DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. การตั้งมั่นในการบรรลุเป้าหมาย ( Achievement )',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
            DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. ใฝ่เรียนรู้ ด้วยตนเอง ( Self learning )',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
              DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => '6. เปิดใจรับฟังสิ่งต่างๆ ( Open mind)',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                DB::table('question')->insert([
            'q_id'=>'7',
            'ask' => '7. มีใจบริการ ( Services mind)',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                  DB::table('question')->insert([
            'q_id'=>'8',
            'ask' => '8. มีความพอเพียง ( Economy sufficient )',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                    DB::table('question')->insert([
            'q_id'=>'9',
            'ask' => '9. การตั้งเป้าหมายและทำให้สำเร็จ ( Results oriented , Goals )',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                      DB::table('question')->insert([
            'q_id'=>'10',
            'ask' => '10. การมีความคิดสร้างสรรค์ ( Creativity )',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]); 
                      DB::table('question')->insert([
            'q_id'=>'11',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '1',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '-',
           
            
        ]);
                      //////////////////////////////////////////////////////////////////////////////////////////
                       DB::table('question')->insert([
            'q_id'=>'1',
            'ask' => '1. ความรู้ในระบบการทำงาน รวมถึงการจัดการงานที่ได้รับมอบหมาย',
            'id_part' => '2',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. ความรู้ในเรื่องของสายงานที่พนักงานได้รับมอบหมายให้ดำเนินงาน',
            'id_part' => '2',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                       DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. ความสามารถในการปรับตัวเพื่อรับงานได้หลายด้าน ( Multi skill )',
            'id_part' => '2',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                        DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. ความสามารถในการทำงานภายใต้แรงกดดัน',
            'id_part' => '2',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                         DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. ความสามารถในการสรุปงานและการนำเสนองานได้',
            'id_part' => '2',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                          DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '2',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '-',
           
            
        ]);
                          //////////////////////////////////////////////////////////////////////////////////////////
                          DB::table('question')->insert([
            'q_id'=>'1',
            'ask' => '1. ผลงานที่ตอบโจทย์และตรงต่อเป้าหมาย ของบริษัท',
            'id_part' => '3',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                          DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. การรายงาน และ แจ้งความคืบหน้าของงานต่อหัวหน้างานอย่างสม่ำเสมอ',
            'id_part' => '3',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                          DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. การบริหารเวลากับงานที่ได้รับมอบหมายงาน และส่งมอบได้ตรงเวลา',
            'id_part' => '3',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                          DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. สามารถประสานงานกับทีมงานได้อย่างคล่องตัวและมีประสิทธิภาพ',
            'id_part' => '3',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                          DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. ความคิดสร้างสรรที่เป็นประโยชน์ในงานเพื่อต่อยอดพัฒนางาน',
            'id_part' => '3',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
           
            
        ]);
                          DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '3',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '-',
           
            
        ]);
                          //////////////////////////////////////////////////////////////////////////////////////////
                        DB::table('question')->insert([
            'q_id'=>'1',
            'ask' => '1. แสดงออกถึงความรับผิดชอบ และความกระตือรือร้น ความตั้งใจในการปฏิบัติงาน เมื่อได้รับมอบหมายงานไม่ว่าจะเป็นงานปัจจุบันหรืองานเพิ่มเติม / งานพิเศษจากผู้บังคับบัญชา',
            'id_part' => '4',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                        DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. มีส่วนร่วมในการดำเนินงานของหน่วยงานที่สังกัดอยู่เสมอ ทั้งในด้านการเสนอแนวคิด การแจ้งปัญหาและแก้ไขปัญหา  โดยมีวิธีการต่างๆ ในการปฏิบัติงานที่เป็นประโยชน์',
            'id_part' => '4',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                        DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. มีพฤติกรรมการให้ความช่วยเหลือ / อำนวยความสะดวกในการปฏิบัติงานให้กับหัวหน้างาน หน่วยงานที่เกี่ยวข้อง และ เพื่อนร่วมงาน',
            'id_part' => '4',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                        DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. ความสามารถในการกำหนดแผนงานร่วมกับทีมงาน',
            'id_part' => '4',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                        DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. มีความสร้างสรรค์และทำงานสามารถทำงานร่วมกับผู้อื่นได้แบบทีมเวิร์ค',
            'id_part' => '4',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                        DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => '6. การเข้าร่วมกิจกรรมและร่วมทำโครงการต่างๆ ที่บริษัทจัดขึ้น',
            'id_part' => '4',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                        DB::table('question')->insert([
            'q_id'=>'7',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '4',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '-',
        ]);
                        //////////////////////////////////////////////////////////////////////////////////////////
           DB::table('question')->insert([
            'q_id'=>'1',
            'ask' => '1. ลาป่วย(Sick leave) ( 30 วัน)',
            'id_part' => '5',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                     DB::table('question')->insert([
            'q_id'=>'2',
            'ask' => '2. ลากิจ(Business leave) (6 วัน)',
            'id_part' => '5',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                     DB::table('question')->insert([
            'q_id'=>'3',
            'ask' => '3. มาสาย(Late)  (0 ครั้ง)',
            'id_part' => '5',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                     DB::table('question')->insert([
            'q_id'=>'4',
            'ask' => '4. ขาดงาน(Absent) (0 ครั้ง)',
            'id_part' => '5',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                     DB::table('question')->insert([
            'q_id'=>'5',
            'ask' => '5. ลาพักร้อน(Vacation leave) (6 วัน)',
            'id_part' => '5',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '0',
        ]);
                      DB::table('question')->insert([
            'q_id'=>'6',
            'ask' => 'รายละเอียดเพิ่มเติม/ข้อมูลสนับสนุน',
            'id_part' => '5',
            'id_form' => '2',
            'q_subpart' =>'0',
            'point' => '-',
        ]); 
                      //////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////////
       }
}
