@extends('layouts.main')
@section('content')
<style>
        #customers {
            font-family: "Trebuchet MS", Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;

        }
        
        #customers td, #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }
        
        #customers tr:nth-child(even){background-color: #f2f2f2;}
        
        #customers tr:hover {background-color: #FFCCCC;}
        
        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #FF3333;
            color:  black;
        }
        </style>
<div class="content-wrapper">
    <div class="content container-fluid">
            <div class="box">
                    <!-- /.box-header -->
                    <div class="box-body">
            <table  id="customers">
                    <thead>
                      <tr>
                        <th style="text-align:center" colspan="2">แบบประเมินผลการสัมภาษณ์ (Interview Appraisal Form)
                               <br> ระดับปฎิบัติการ (Operational Level)
                                </th>
                        <th  style="text-align:center" colspan="2" >ฝ่ายทัรพยากรบุคคล (Human Resources Dept.)
                               <br> วันที่ (Date) <input type="date" name="dateinterviwe" />
                                </th>
                        
                      </tr>
                   
                    <tbody>
                      <tr>
                        <td style="text-align:center" colspan="3" >ชื่อผู้สมัคร (Applicant’s Name) <input type="text" name="aname"  /> ตำแหน่งผู้สมัคร (Position)  <input type="text" name="alastname"  /></td>
                        
                      </tr>
                      <tr>
                        <td rowspan="2" style="text-align:center">ข้อพิจารณา (OBSERVATIONS)</td>
                        <td style="text-align:center">RATING (Please circle)</td>
                        <td rowspan="2" style="text-align:center">ความคิดเห็น (COMMENT)</td>
                      </tr>
                      <tr>
                            <td style="text-align:center">LOW<---------->HIGH</td>
                      </tr>
                      <tr>
                            <th colspan="3">บุคลิคลักษณะ (Appearance) </th>
                     </tr>

                     <tr>
                            <td rowspan="3" >1. บุคลิกลักษณะ พิจารณาท่วงทีกิริยามารยาท และ ความเหมาะสมของ<br>การแต่งกาย 
                                (Appearance, Manner and Personality: Consider overall<br> appearance, Mannerism, Poise, presentation, Speech)</td>
                            <td rowspan="3" colspan="1" style="text-align:center" >

                             
                                       
                                    <input type="radio" id="score_1" name="score_1" value="1"/> 1&emsp;
                                    <input type="radio" id="score_1" name="score_1" value="2"/> 2&emsp;
                                    <input type="radio" id="score_1" name="score_1" value="3"/> 3&emsp;
                                    <input type="radio" id="score_1" name="score_1" value="4"/> 4&emsp;
                                    <input type="radio" id="score_1" name="score_1" value="5"/> 5


                            </td>
                            <td rowspan="3" colspan="1" >


                                    <textarea class="form-control" rows="3" name="comment1"></textarea>




                                </td>
                    
                      </tr>
                      <tr></tr> <tr></tr>
                      <tr>
                            <th colspan="3" >คุณสมบัติ (Qualification) </th>
                     </tr>
                     <tr>
                            <td rowspan="3" >2. การศึกษา/การฝึกอบรม พิจารณาประวัติการศึกษา สถาบัน และผลการ<br>
                                เรียน และการฝึกอบรม (Education/Training: Consider educational<br>
                                 background, Institute and GPA)</td>
                            <td rowspan="3" colspan="1" style="text-align:center" >

                             
                                       
                                    <input type="radio" id="score_2" name="score_2" value="1"/> 1&emsp;
                                    <input type="radio" id="score_2" name="score_2" value="2"/> 2&emsp;
                                    <input type="radio" id="score_2" name="score_2" value="3"/> 3&emsp;
                                    <input type="radio" id="score_2" name="score_2" value="4"/> 4&emsp;
                                    <input type="radio" id="score_2" name="score_2" value="5"/> 5


                            </td>
                            <td rowspan="3" colspan="1" >
                                    <textarea class="form-control" rows="3" name="comment1"></textarea>
                                </td>
                    
                      </tr>
                      <tr></tr> <tr></tr>
                     <tr>
                            <td rowspan="3" >3. ทักษะทางคอมพิวเตอร์ พิจารณาความชำนาญในการใช้งานคอมพิวเตอรืโปรแกรมต่างๆ ที่เกี่ยวข้องกับงาน <br>
                                (Computer literacy:<br> Consider computer skills related to working requirements)</td>
                            <td rowspan="3" colspan="1" style="text-align:center" >

                             
                                       
                                    <input type="radio" id="score_3" name="score_3" value="1"/> 1&emsp;
                                    <input type="radio" id="score_3" name="score_3" value="2"/> 2&emsp;
                                    <input type="radio" id="score_3" name="score_3" value="3"/> 3&emsp;
                                    <input type="radio" id="score_3" name="score_3" value="4"/> 4&emsp;
                                    <input type="radio" id="score_3" name="score_3" value="5"/> 5


                            </td>
                            <td rowspan="3" colspan="1" >
                                    <textarea class="form-control" rows="3" name="comment1"></textarea>
                                </td>
                    
                      </tr>

                      <tr></tr> <tr></tr>
                      <tr>
                             <td rowspan="3" >4. ทักษะด้านภาษา พิจารณาความสามารถทางด้านภาษาที่ 2 หรือภาษาที่ 3 <br>
                                 เช่น ภาษาอังกฤษ ภาษาจีน ภาษาญี่ปุ่น หรืออื่นๆ (Language skills: <br>
                                  Consider 2nd or 3rd language proficiency i.e. English, Chinese, Japanese and etc.)
                                    </td>
                             <td rowspan="3" colspan="1" style="text-align:center" >
 
                              
                                        
                                    <input type="radio" id="score_4" name="score_4" value="1"/> 1&emsp;
                                    <input type="radio" id="score_4" name="score_4" value="2"/> 2&emsp;
                                    <input type="radio" id="score_4" name="score_4" value="3"/> 3&emsp;
                                    <input type="radio" id="score_4" name="score_4" value="4"/> 4&emsp;
                                    <input type="radio" id="score_4" name="score_4" value="5"/> 5
 
 
                             </td>
                             <td rowspan="3" colspan="1" >
                                     <textarea class="form-control" rows="3" name="comment1"></textarea>
                                 </td>
                     
                       </tr>
 
                       <tr></tr> <tr></tr>
                       <tr>
                              <td rowspan="3" >5. ประสบการณ์ทำงาน พิจารณาประสบการณ์ ความสามารถ ความรู้ ทางเทคนิคที่เกี่ยวข้องและเป็น<br>
                                  ประโยชน์กับตำแหน่งงานที่สมัคร<br>
                                    (Relevant Experience: Consider working experience,<br> 
                                    professional skills and technical knowledge in position related areas)
                                    
                                     </td>
                              <td rowspan="3" colspan="1" style="text-align:center" >
  
                               
                                         
                                    <input type="radio" id="score_5" name="score_5" value="1"/> 1&emsp;
                                    <input type="radio" id="score_5" name="score_5" value="2"/> 2&emsp;
                                    <input type="radio" id="score_5" name="score_5" value="3"/> 3&emsp;
                                    <input type="radio" id="score_5" name="score_5" value="4"/> 4&emsp;
                                    <input type="radio" id="score_5" name="score_5" value="5"/> 5
  
  
                              </td>
                              <td rowspan="3" colspan="1" >
                                      <textarea class="form-control" rows="4" name="comment1"></textarea>
                                  </td>
                      
                        </tr>
  
                        <tr></tr> <tr></tr>
                        <tr>
                                <th  colspan="3">สมรรถนะความสามารถ (Competencies)</th>
                         </tr>
                        <tr>
                               <td rowspan="3" >6. การพัฒนาตนเอง ความสามารถในการเรียนรู้ และใส่ใจในการพัฒนา<br>
                                   ตนเอง (Ability to learn and commitment for self-development)
                                     
                                      </td>
                               <td rowspan="3" colspan="1" style="text-align:center" >
   
                                
                                          
                                    <input type="radio" id="score_6" name="score_6" value="1"/> 1&emsp;
                                    <input type="radio" id="score_6" name="score_6" value="2"/> 2&emsp;
                                    <input type="radio" id="score_6" name="score_6" value="3"/> 3&emsp;
                                    <input type="radio" id="score_6" name="score_6" value="4"/> 4&emsp;
                                    <input type="radio" id="score_6" name="score_6" value="5"/> 5
   
   
                               </td>
                               <td rowspan="3" colspan="1" >
                                       <textarea class="form-control" rows="3" name="comment1"></textarea>
                                   </td>
                       
                         </tr>

                         <tr></tr> <tr></tr>
                         
                         <tr>
                                <td rowspan="3" >7. ความสามารถในการวิเคราะห์ปัญหา ตลอดจนข้อคิดเห็นต่างๆในการ<br>
                                    แก้ไขปัญหาเหล่านั้น (Problem solving skills and analytical reasoning<br>
                                     ability: Consider articulation and organization of information, thoughts<br>
                                      and ideas during interview, mental alertness, keenness of mind, grasp of<br>
                                       complex ideas, problem-solving ability)
                                      
                                       </td>
                                <td rowspan="3" colspan="1" style="text-align:center" >
    
                                 
                                           
                                        <input type="radio" id="score_7" name="score_7" value="1"/> 1 &emsp;
                                        <input type="radio" id="score_7" name="score_7" value="2"/>2 &emsp;
                                        <input type="radio" id="score_7" name="score_7" value="3"/> 3 &emsp;
                                        <input type="radio" id="score_7" name="score_7" value="4"/> 4 &emsp;
                                        <input type="radio" id="score_7" name="score_7" value="5"/> 5
    
    
                                </td>
                                <td rowspan="3" colspan="1" >
                                        <textarea class="form-control" rows="5" name="comment1"></textarea>
                                    </td>
                        
                          </tr>

                          <tr></tr> <tr></tr>
                         
                          <tr>
                                 <td rowspan="3" >8. การให้ความร่วมมือ การติดต่อประสานงานกับผู้อื่น และความสามารถ <br>
                                     ในการสื่อข้อความ (Coordination / Interpersonal and Communication <br>
                                      /skills)
                                       
                                        </td>
                                 <td rowspan="3" colspan="1" style="text-align:center" >
     
                                  
                                            
                                        <input type="radio" id="score_8" name="score_8" value="1"/> 1&emsp;
                                        <input type="radio" id="score_8" name="score_8" value="2"/> 2&emsp;
                                        <input type="radio" id="score_8" name="score_8" value="3"/> 3&emsp;
                                        <input type="radio" id="score_8" name="score_8" value="4"/> 4&emsp;
                                        <input type="radio" id="score_8" name="score_8" value="5"/> 5
     
     
                                 </td>
                                 <td rowspan="3" colspan="1" >
                                         <textarea class="form-control" rows="3" name="comment1"></textarea>
                                     </td>
                         
                           </tr>


                           <tr></tr> <tr></tr>
                         
                           <tr>
                                  <td rowspan="3" >9. ความคิดริเริ่ม / การเสนอข้อคิดเห็น / การยอมรับและปรับตัวเข้ากับการ<br>
                                      เปลี่ยนแปลง (Innovation / Creativity and adaptability to new ideas and changes)
                                        
                                         </td>
                                  <td rowspan="3" colspan="1" style="text-align:center" >
         
                                        <input type="radio" id="score_9" name="score_9" value="1"/> 1&emsp;
                                        <input type="radio" id="score_9" name="score_9" value="2"/> 2&emsp;
                                        <input type="radio" id="score_9" name="score_9" value="3"/> 3&emsp;
                                        <input type="radio" id="score_9" name="score_9" value="4"/> 4&emsp;
                                        <input type="radio" id="score_9" name="score_9" value="5"/> 5
      
      
                                  </td>
                                  <td rowspan="3" colspan="1" >
                                          <textarea class="form-control" rows="2" name="comment1"></textarea>
                                      </td>
                          
                            </tr>
                            <tr></tr> <tr></tr>
                         
                            <tr>
                                   <td rowspan="3" >10. ทัศนคติ และวุฒิภาวะ พิจารณาจากความสัมพันธ์กับหัวหน้างาน เพื่อน<br>
                                       ร่วมงาน เหตุผลการลาออก ความรับผิดชอบต่องาน ทัศนคติต่องานและ<br>
                                        ครอบครัว (Attitude ad Maturity: Consider friction with former <br>
                                        Supervisors, colleague relationships, reason for leaving jobs, sense of <br>
                                        responsibility, attitude towards work and towards family)
                                         
                                          </td>
                                   <td rowspan="3" colspan="1" style="text-align:center" >
       
                                    
                                              
                                        <input type="radio" id="score_10" name="score_10" value="1"/> 1&emsp;
                                        <input type="radio" id="score_10" name="score_10" value="2"/> 2&emsp;
                                        <input type="radio" id="score_10" name="score_10" value="3"/> 3&emsp;
                                        <input type="radio" id="score_10" name="score_10" value="4"/> 4&emsp;
                                        <input type="radio" id="score_10" name="score_10" value="5"/> 5
       
       
                                   </td>
                                   <td rowspan="3" colspan="1" >
                                           <textarea class="form-control" rows="5" name="comment1"></textarea>
                                       </td>
                           
                             </tr>
                             <tr></tr> <tr></tr>
                             <tr>
                                    <th  colspan="3">ความรู้เกี่ยวบริษัท และตำแหน่งงาน (Company & Position Knowledge)</th>
                             </tr>
                             <tr>
                                    <td rowspan="3" >11. ความรู้เกี่ยวกับบริษัท พิจารณาจากการหาข้อมูลของบริษัท และ <br>
                                        ความเข้าใจในการดำเนินธุรกิจของบริษัท รวมถึงมุมมองต่อบริษัท (Company <br> 
                                        knowledge: Consider how well preparation on company’s information <br> 
                                        as well as company perception)
                                          
                                           </td>
                                    <td rowspan="3" colspan="1" style="text-align:center" >
        
                                     
                                               
                                            <input type="radio" id="score_11" name="score_11" value="1"/> 1&emsp;
                                            <input type="radio" id="score_11" name="score_11" value="2"/> 2&emsp;
                                            <input type="radio" id="score_11" name="score_11" value="3"/> 3&emsp;
                                            <input type="radio" id="score_11" name="score_11" value="4"/> 4&emsp;
                                            <input type="radio" id="score_11" name="score_11" value="5"/> 5
        
        
                                    </td>
                                    <td rowspan="3" colspan="1" >
                                            <textarea class="form-control" rows="4" name="comment1"></textarea>
                                        </td>
                            
                              </tr>


                              <tr></tr> <tr></tr>
                              <tr>
                                     <td rowspan="3" >12. ความรอบรู้ในตำแหน่งงานที่สมัคร พิจารณาความ<br>
                                         เข้าใจในลักษณะงาน แนวปฏิบัติ ข้อจำกัด และวิธีการ<br>
                                         บริหาร (Position knowledge: Consider overall<br>
                                          position’s role & responsibilities understanding)
                                           
                                            </td>
                                     <td rowspan="3" colspan="1" style="text-align:center" >
         
                                      
                                                
                                            <input type="radio" id="score_12" name="score_12" value="1"/> 1&emsp;
                                            <input type="radio" id="score_12" name="score_12" value="2"/> 2&emsp;
                                            <input type="radio" id="score_12" name="score_12" value="3"/> 3&emsp;
                                            <input type="radio" id="score_12" name="score_12" value="4"/> 4&emsp;
                                            <input type="radio" id="score_12" name="score_12" value="5"/> 5
         
         
                                     </td>
                                     <td rowspan="3" colspan="1" >
                                             <textarea class="form-control" rows="4" name="comment1"></textarea>
                                         </td>
                             
                               </tr>


                               <tr></tr> <tr></tr>
                               <tr>
                                      <th  colspan="3">ความเหมาะสมกับวัฒนธรรมองค์กร (Cultural Fit-Core Values)</th>
                               </tr>
                               <tr>
                                      <td rowspan="3" >13. ซื่อสัตย์ (Honest)
                                            
                                             </td>
                                      <td rowspan="3" colspan="1" style="text-align:center" >
          
                                       
                                                 
                                            <input type="radio" id="score_13" name="score_13" value="1"/> 1&emsp;
                                            <input type="radio" id="score_13" name="score_13" value="2"/> 2&emsp;
                                            <input type="radio" id="score_13" name="score_13" value="3"/> 3&emsp;
                                            <input type="radio" id="score_13" name="score_13" value="4"/> 4&emsp;
                                            <input type="radio" id="score_13" name="score_13" value="5"/> 5
          
          
                                      </td>
                                      <td rowspan="3" colspan="1" >
                                              <textarea class="form-control" rows="1" name="comment1"></textarea>
                                          </td>
                              
                                </tr>
                                <tr></tr> <tr></tr>
                                <tr>
                                        <td rowspan="3" >14. รู้จักคุณค่าของสิ่งต่าง อาทิ ทรัทพ์สิน ความรู้ (Worth)
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                   
                                                <input type="radio" id="score_14" name="score_14" value="1"/> 1&emsp;
                                                <input type="radio" id="score_14" name="score_14" value="2"/> 2&emsp;
                                                <input type="radio" id="score_14" name="score_14" value="3"/> 3&emsp;
                                                <input type="radio" id="score_14" name="score_14" value="4"/> 4&emsp;
                                                <input type="radio" id="score_14" name="score_14" value="5"/>5
            
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                <textarea class="form-control" rows="1" name="comment1"></textarea>
                                            </td>
                                
                                  </tr>
                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td rowspan="3" >15. มุ่งมั่น ขยัน อดทน (Wealth Human Resources)
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                   
                                                <input type="radio" id="score_15" name="score_15" value="1"/> 1&emsp;
                                                <input type="radio" id="score_15" name="score_15" value="2"/> 2&emsp;
                                                <input type="radio" id="score_15" name="score_15" value="3"/> 3&emsp;
                                                <input type="radio" id="score_15" name="score_15" value="4"/> 4&emsp;
                                                <input type="radio" id="score_15" name="score_15" value="5"/> 5
            
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                <textarea class="form-control" rows="1" name="comment1"></textarea>
                                            </td>
                                
                                  </tr>
                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td rowspan="3" >16. ตั้งมั่นในการบรรลุเป้าหมาย ตามเวลากำหนด (Target &Achievement) 
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                
                                                <input type="radio" id="score_16" name="score_16" value="1"/> 1&emsp;
                                                <input type="radio" id="score_16" name="score_16" value="2"/> 2&emsp;
                                                <input type="radio" id="score_16" name="score_16" value="3"/> 3&emsp;
                                                <input type="radio" id="score_16" name="score_16" value="4"/> 4&emsp;
                                                <input type="radio" id="score_16" name="score_16" value="5"/>5
            
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                <textarea class="form-control" rows="1" name="comment1"></textarea>
                                            </td>
                                
                                  </tr>
                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td rowspan="3" >17. พร้อมรับฟัง และ เปิดใจในสิ่งต่างๆ (Open Mind)
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                   
                                                <input type="radio" id="score_17" name="score_17" value="1"/> 1&emsp;
                                                <input type="radio" id="score_17" name="score_17" value="2"/> 2&emsp;
                                                <input type="radio" id="score_17" name="score_17" value="3"/> 3&emsp;
                                                <input type="radio" id="score_17" name="score_17" value="4"/> 4&emsp;
                                                <input type="radio" id="score_17" name="score_17" value="5"/> 5
            
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                <textarea class="form-control" rows="1" name="comment1"></textarea>
                                            </td>
                                
                                  </tr>
                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td rowspan="3" >18. ใจบริการ (Service Mind)
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                   
                                                <input type="radio" id="score_18" name="score_18" value="1"/> 1&emsp;
                                                <input type="radio" id="score_18" name="score_18" value="2"/> 2&emsp;
                                                <input type="radio" id="score_18" name="score_18" value="3"/> 3&emsp;
                                                <input type="radio" id="score_18" name="score_18" value="4"/>4&emsp;
                                                <input type="radio" id="score_18" name="score_18" value="5"/> 5
            
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                <textarea class="form-control" rows="1" name="comment1"></textarea>
                                            </td>
                                
                                  </tr>

                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td rowspan="3" >19. คิดสร้างสรรค์ (Creativity)
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                   
                                                <input type="radio" id="score_19" name="score_19" value="1"/> 1&emsp;
                                                <input type="radio" id="score_19" name="score_19" value="2"/> 2&emsp;
                                                <input type="radio" id="score_19" name="score_19" value="3"/> 3&emsp;
                                                <input type="radio" id="score_19" name="score_19" value="4"/> 4&emsp;
                                                <input type="radio" id="score_19" name="score_19" value="5"/> 5
            
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                <textarea class="form-control" rows="1" name="comment1"></textarea>
                                            </td>
                                
                                  </tr>
                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td rowspan="3" >20. เพียงพอ พอเพียง (Sufficiency Economy)
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                   
                                                <input type="radio" id="score_20" name="score_20" value="1"/> 1&emsp;
                                                <input type="radio" id="score_20" name="score_20" value="2"/> 2&emsp;
                                                <input type="radio" id="score_20" name="score_20" value="3"/> 3&emsp;
                                                <input type="radio" id="score_20" name="score_20" value="4"/> 4&emsp;
                                                <input type="radio" id="score_20" name="score_20" value="5"/> 5
            
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                <textarea class="form-control" rows="1" name="comment1"></textarea>
                                            </td>
                                
                                  </tr>
                        
                                  <tr></tr> <tr></tr>
                                  <tr>
                                        <td rowspan="3" >รวมคะแนนสัมภาษณ์ (Grand Total)
                                              
                                               </td>
                                        <td rowspan="3" colspan="1" style="text-align:center" >
            
                                         
                                                <input type="text" id="total" readonly style="text-align:center"/>
                                              
            
                                        </td>
                                        <td rowspan="3" colspan="1" >
                                                {{ Form::select('conclusion', [
                                                    '' => 'สรุปผล',
                                                    'ว่าจ้าง (Hire) (70 คะแนน ขึ้นไป)' => 'ว่าจ้าง (Hire) (70 คะแนน ขึ้นไป)', 
                                                    'รอเปรียบเทียบ (Potential candidate)  (51-69 คะแนน)' => 'รอเปรียบเทียบ (Potential candidate)  (51-69 คะแนน)',
                                                    'ไม่ว่าจ้าง (Reject)  (ต่ำกว่า 50 คะแนน)' => 'ไม่ว่าจ้าง (Reject)  (ต่ำกว่า 50 คะแนน)',
                                                    'เหมาะสมกับตำแหน่งอื่น (For other position)	'=> 'เหมาะสมกับตำแหน่งอื่น (For other position)	'
                                        ],null, ['class' => 'form-control']) }}
                                               
                                            </td>
                                
                                  </tr>
                    </tbody>
                  </table>

<br><br>
<center>
        <table border="2" bordercolor="black"  >
            <tr>
                <th style="text-align:center" >ตัวเลือก</th>
                <th style="text-align:center" >จำนวน</th>
                <th style="text-align:center" >คะแนน</th>
            </tr>
            <tr>
                <td style="text-align:center" >5</td>
                <td style="text-align:center"  > <input type="text" id="ch5" readonly style="text-align:center" /></td>
                <td style="text-align:center"><input type="text" id="rs5"  readonly style="text-align:center" /></td>
            </tr>
            <tr>
                <td style="text-align:center">4</td>
                <td style="text-align:center"><input type="text" id="ch4"  readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs4"  readonly style="text-align:center"/></td>
            <tr>
            <tr>
                <td style="text-align:center">3</td>
                <td style="text-align:center"><input type="text" id="ch3"  readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs3" readonly style="text-align:center"/></td>
            </tr>
            <tr>
                <td style="text-align:center">2</td>
                <td style="text-align:center"><input type="text" id="ch2" readonly style="text-align:center" />
                </td >
                <td style="text-align:center"><input type="text" id="rs2" readonly style="text-align:center"/></td>
            </tr>
            <tr>
                <td style="text-align:center">1</td>
                <td style="text-align:center"><input type="text" id="ch1" readonly style="text-align:center"/></td>
                <td style="text-align:center"><input type="text" id="rs1" readonly style="text-align:center"/></td>
            </tr>
           
        </table>
      
    </center>
    <br>
    <div class="form-group" style="text-align:center">
            {{ Form::submit('บันทึก',['class'=> 'btn btn-success'])}}
        </div>
    </div>
</div>
    </div>
</div>



        <script type='text/javascript'>
   
        var add_value = [];
        var xCnt5 = 0 ;
        var xCnt4 = 0 ;
        var xCnt3 = 0 ;
        var xCnt2 = 0 ;
        var xCnt1 = 0 ;
        $('input[type=radio]').change(function(){
        // add value
        add_value[this.name] = this.value;
        
        // reset sum
       
        xCnt5 = 0 ;
        xCnt4 = 0 ;
        xCnt3 = 0 ;
        xCnt2 = 0 ;
        xCnt1 = 0 ;
        for(var key in add_value){
            if(add_value[key] == 5){
                xCnt5++;
                
            }
            if(add_value[key] == 4){
                xCnt4++;
                
            }
            if(add_value[key] == 3){
                xCnt3++;
                
            }
            if(add_value[key] == 2){
                xCnt2++;
                
            }
            if(add_value[key] == 1){
                xCnt1++;
                
            }
        } 
        var xScore5 = 5 * xCnt5;
        var xScore4 = 4 * xCnt4;
        var xScore3 = 3 * xCnt3;
        var xScore2 = 2 * xCnt2;
        var xScore1 = 1 * xCnt1;
        var xconclude = 1 * xCnt1;
       $('#ch5').val(xCnt5);
       $('#rs5').val(xScore5 );

       $('#ch4').val(xCnt4);
       $('#rs4').val(xScore4 );

       $('#ch3').val(xCnt3);
       $('#rs3').val(xScore3 );

       $('#ch2').val(xCnt2);
       $('#rs2').val(xScore2 );


       $('#ch1').val(xCnt1);
       $('#rs1').val(xScore1 );
       xconclude = xScore5 + xScore4 + xScore3 + xScore2 + xScore1;
       $('#total').val(xconclude);
    if( xconclude >= 70){
        $('#conclude').val("ว่าจ้าง (Hire) (70 คะแนน ขึ้นไป)");

    }

        });
       
        
        
        </script>
       
        
        
        
@endsection
