<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <style>
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: normal;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew Bold.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: normal;
            src: url("{{ public_path('fonts/THSarabunNew Italic.ttf') }}") format('truetype');
        }
        @font-face {
            font-family: 'THSarabunNew';
            font-style: italic;
            font-weight: bold;
            src: url("{{ public_path('fonts/THSarabunNew BoldItalic.ttf') }}") format('truetype');
        }

        body {
            font-family: "THSarabunNew";
            font-size: 20px;
        }
        table{
          border-collapse: collapse;
            width: 100%;
        }
        td,th{
          border:1px solid; 
        }

         body { width: 100%; height: 100%; }  

.page-break {
    page-break-after: always;
}
</style>    
</head>
<body>
<div class="page-break">
        <p style="text-align:center;"><img src="{{ public_path('img/NGG-10.png') }}" width="100px" height="100px"></p>
    <center><h3>คำแนะนำวิธีการกรอกแบบประเมินผลการทดลองงาน</h3></center>
    <b>1. ระดับในการประเมินผล</b><br>
    ดีมาก           =   ผลการปฎิบัติงานดีเยี่ยม สูงกว่าเกณฑ์มาตรฐานมาก<br>
    ดีมาก           =   ผลการปฎิบัติงานดี ได้ตามมาตรฐานที่กำหนดไว้<br>
    พอใช้           =   ผลการปฎิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้ แต่ยังสามารถจะพัฒนาศักยภาพได้<br>
    ต้องปรับปรุง      =   ผลการปฎิบัติงานต่ำกว่าเกณฑ์มาตรฐานที่กำหนดไว้มาก ยังต้องมีการปรับปรุงอีกมาก<br>
    <b>2.การประเมินผลให้แยกประเมินผลตามหัวข้อประเมิน และคิดคะแนนรวมดังนี้</b><br>
    2.1. ระดับพนักงานทั่วไป         ให้ประเมินผลและคิดคะแนนรวมในข้อ 1-15. ได้ผลรวมคะแนนเท่าไหร่ ให้คูณด้วย 100หาร60 <br>
    2.2. ระดับหัวหน้างานขึ้นไป       ให้ประเมินผลและคิดคะแนนรวมในข้อ 1-25 <br>
    <b>3. ผู้ถูกประเมินจะต้องได้ 60คะแนน ขึ้นไป จึงจะผ่านเกณฑ์การประเมินผลการทดลองงาน</b><br>
    <b>4. เขียนเครื่องหมาย ลงในช่องประเมินผล ตามผลการปฏิบัติงานที่ประเมินได้</b><br>
    <b>5. ผู้ประเมินแจ้งให้ผู้ถูกประเมินทราบล่วงหน้าก่อนวันครบรอบกำหนดทดลองงาน 119วัน โดยให้แจ้งผู้ถูกประเมินไม่น้อยกว่า30วัน ก่อนการจ่ายค่าจ้างในรอบถัดไป</b><br>
</div>
<div class="page-break"> 
<center><h3>แบบประเมินผลการปฏิบัติงานระดับบังคับบัญชา</h3></center>       
    <b>ชื่อ-นามสกุล :</b> 
        @foreach ( $personal as $item)
            @if(  $item->id == $operate_sup->id_posinal )
                {{$item->name}} {{$item->lastname}}
            @endif
        @endforeach
    <b>รหัสพนักงาน :</b> {{$operate_sup->id_employ}} <br>
    <b>ตำแหน่ง :</b> {{$operate_sup->position}} <b>แผนก/ฝ่าย :</b> {{$operate_sup->department}} <br>
    <b>วันที่เริ่มงาน :</b> {{$operate_sup->starttime}} <b>ครบทดลองงาน 119 วัน วันที่ :</b> {{$operate_sup->endtime}} <b>ระดับ :</b> {{$operate_sup->degree}} <br>
    <b>ประเมินครั้งที่1 :</b> {{$operate_sup->date_60}} <b>ประเมินครั้งที่2 :90 วัน วันที่ :</b> {{$operate_sup->date_90}}
    <table>
        <tbody>
            <tr>
                <td align="center" rowspan="2">หัวข้อการประเมิน (100 คะแนน)</td>
                <td align="center" colspan="2">ระดับคะแนนการประเมินผล</td>
            </tr>
            <tr>
                <td align="center">ประเมินรอบ 60 วัน</td><td align="center">ประเมินรอบ 90 วัน</td>
            </tr>
            <tr><td colspan="3"><b>ระดับผู้บังคับบัญชา (Supervisory Level)</b></td></tr>
            <tr>
                <td>1. คุณภาพของงานที่ปฏิบัติ</td>
                <td align="center">{{$operate_sup->chioce1_60}}</td>
                <td align="center">{{$operate_sup->chioce1_90}}</td>
            </tr>
            <tr>
                <td>2. ปริมาณของงาน และเวลาที่ใช้ปฏิบัติงาน</td>
                <td align="center">{{$operate_sup->chioce2_60}}</td>
                <td align="center">{{$operate_sup->chioce2_90}}</td>
            </tr>
            <tr>
                <td>3. ความรับผิดชอบและไว้วางใจในการทำงาน</td>
                <td align="center">{{$operate_sup->chioce3_60}}</td>
                <td align="center">{{$operate_sup->chioce3_90}}</td>
            </tr>    
            <tr>
                <td>4. การปฏิบัติตามคำสั่ง และ คำแนะนำ</td>
                <td align="center">{{$operate_sup->chioce4_60}}</td>
                <td align="center">{{$operate_sup->chioce4_90}}</td>
            </tr>
            <tr>
                <td>5. การประพฤติตามระเบียบข้อบังคับของบริษัท</td>
                <td align="center">{{$operate_sup->chioce5_60}}</td>
                <td align="center">{{$operate_sup->chioce5_90}}</td>
            </tr>
            <tr>
                <td>6. ความซื่อสัตย์ และ น่าเชื่อถือไว้ใจ</td>
                <td align="center">{{$operate_sup->chioce6_60}}</td>
                <td align="center">{{$operate_sup->chioce6_90}}</td>
            </tr>
            <tr>
                <td>7. ความตั้งใจและความกระตือรือร้นในการทำงานให้สำเร็จ</td>
                <td align="center">{{$operate_sup->chioce7_60}}</td>
                <td align="center">{{$operate_sup->chioce7_90}}</td>
            </tr>
            <tr>
                <td>8. ความสามารถในการเรียนรู้งาน</td>
                <td align="center">{{$operate_sup->chioce8_60}}</td>
                <td align="center">{{$operate_sup->chioce8_90}}</td>
            </tr>
            <tr>
                <td>9. ความสามารถด้านการคิดริเริ่มสร้างสรรค์</td>
                <td align="center">{{$operate_sup->chioce9_60}}</td>
                <td align="center">{{$operate_sup->chioce9_90}}</td>
            </tr>
            <tr>
                <td>10. ความสามารถในการแก้ไขข้อบกพร่องของตนเอง</td>
                <td align="center">{{$operate_sup->chioce10_60}}</td>
                <td align="center">{{$operate_sup->chioce10_90}}</td>
            </tr>
            <tr>
                <td>11. การให้ความร่วมมือประสานงานและการทำงานเป็นทีมกับผู้อื่น</td>
                <td align="center">{{$operate_sup->chioce11_60}}</td>
                <td align="center">{{$operate_sup->chioce11_90}}</td>
            </tr>
            <tr>
                <td>12. ความสามารถในการแก้ไขปัญหาเฉพาะหน้าและตัดสินใจด้วยตนเอง</td>
                <td align="center">{{$operate_sup->chioce12_60}}</td>
                <td align="center">{{$operate_sup->chioce12_90}}</td>
            </tr>
            <tr>
                <td>13. ทัศนคติที่มีต่อบริษัท</td>
                <td align="center">{{$operate_sup->chioce13_60}}</td>
                <td align="center">{{$operate_sup->chioce13_90}}</td>
            </tr>
            <tr>
                <td>14. การใช้ทรัพย์สินและค่าใช้จ่ายของบริษัทอย่างประหยัดและปลอดภัย</td>
                <td align="center">{{$operate_sup->chioce14_60}}</td>
                <td align="center">{{$operate_sup->chioce14_90}}</td>
            </tr>
            <tr>
                <td>15. มีสุขภาพร่างกายพร้อมที่จะปฏิบัติงาน</td>
                <td align="center">{{$operate_sup->chioce15_60}}</td>
                <td align="center">{{$operate_sup->chioce15_90}}</td>
            </tr>
            <tr>
                <td>16. ความสามารถในการทำงานบังคับบัญชา การควบคุมระเบียบวินัย</td>
                <td align="center">{{$operate_sup->chioce16_60}}</td>
                <td align="center">{{$operate_sup->chioce16_90}}</td>
            </tr>
            <tr>
                <td>17. การมอบหมายงาน/ควบคุมงาน/ติดตามงาน</td>
                <td align="center">{{$operate_sup->chioce17_60}}</td>
                <td align="center">{{$operate_sup->chioce17_90}}</td>
            </tr>
            <tr>
                <td>18. การสอนงาน และการพัฒนาผู้ใต้บังคับบัญชา</td>
                <td align="center">{{$operate_sup->chioce18_60}}</td>
                <td align="center">{{$operate_sup->chioce18_90}}</td>
            </tr>
            <tr>
                <td>19. การกระตุ้นและการสร้างสรรค์การทำงานเป็นทีม</td>
                <td align="center">{{$operate_sup->chioce19_60}}</td>
                <td align="center">{{$operate_sup->chioce19_90}}</td>
            </tr>
            <tr>
                <td>20. ความสามารถด้านวางแผน/จัดระบบงาน/ขั้นตอนการทำงาน การบริหารเวลา</td>
                <td align="center">{{$operate_sup->chioce20_60}}</td>
                <td align="center">{{$operate_sup->chioce20_90}}</td>
            </tr>
            <tr>
                <td>21. ความสามารถในการแก้ไขปัญหาและการตัดสินใจในการบริหารงาน</td>
                <td align="center">{{$operate_sup->chioce21_60}}</td>
                <td align="center">{{$operate_sup->chioce21_90}}</td>
            </tr>
            <tr>
                <td>22. การมีมุมมอง/การปฏิบัติตามนโยบาย/เป้าหมาย โดยภาพรวมบริษัท</td>
                <td align="center">{{$operate_sup->chioce22_60}}</td>
                <td align="center">{{$operate_sup->chioce22_90}}</td>
            </tr>
            <tr>
                <td>23. ความสามารถในการรับแรงกดดัน สภาพบีบบังคับ</td>
                <td align="center">{{$operate_sup->chioce23_60}}</td>
                <td align="center">{{$operate_sup->chioce23_90}}</td>
            </tr>
            <tr>
                <td>24. ความสามารถในการเจรจาต่อรองและการโน้มน้าวจูงใจผู้ใต้บังคับบัญชา</td>
                <td align="center">{{$operate_sup->chioce24_60}}</td>
                <td align="center">{{$operate_sup->chioce24_90}}</td>
            </tr>
            <tr>
                <td>25. ความสามารถในการสรุปงานและการนำเสนองาน</td>
                <td align="center">{{$operate_sup->chioce25_60}}</td>
                <td align="center">{{$operate_sup->chioce25_90}}</td>
            </tr>
            <tr>
                <td colspan="3"><b>รวมคะแนนทั้งสิ้น</b> ประเมินครั้งที่ 1 : 60 วัน <font color="red">{{$operate_sup->subtotal_60}}</font> คะแนน ประเมินครั้งที่ 2 : 90 วัน <font color="red">{{$operate_sup->subtotal_90}} </font>คะแนน <b>(รวมกันหาร2) = <font color="red">{{$operate_sup->subtotal_final}}</font> </b></td>
            </tr>
        </tbody>
    </table> <br><br>
    <b>ความคิดเห็นเพิ่มเติม</b><br>
        (สำหรับผู้ประเมิน)
        <table>
            <tbody>
                <tr>
                    <td align="center">ความคิดเห็นจาก 60 วัน</td>
                    <td align="center">ความคิดเห็นจาก 90 วัน</td>
                </tr>
                <tr>
                    <td>{{$operate_sup->comments_60}}</td>
                    <td>{{$operate_sup->comments_90}}</td>
                </tr>
                <tr>
                    <td colspan="2">
                            <b>จุดเด่นของพนักงาน :</b> {{$operate_sup->comments_featured}}<br>
                            <b>จุดด้อยของพนักงาน :</b> {{$operate_sup->comments_weakness}} <br>
                            @if($operate_sup->experimental == 'ไม่ผ่านทดลองงาน')
                                <input type="checkbox" checked>{{$operate_sup->experimental}} ให้มีผลบังคับตั้งแต่วันที่ : {{$operate_sup->experimental_date}} <br>
                            @endif 
                            @if($operate_sup->full_time_worker == 'อนุมัติให้บรรจุเป็นพนักงานประจำ')
                                <input type="checkbox" checked>{{$operate_sup->full_time_worker}} ตั้งแต่วันที่ : {{$operate_sup->full_time_worker_date}} ตำแหน่ง : {{$operate_sup->full_time_worker_position}} <br>
                            @endif 
                            @if($operate_sup->modify == 'อนุมัติให้บรรจุเป็นพนักงานประจำ')
                                <input type="checkbox" checked>{{$operate_sup->modify}} และปรับตำแหน่ง จากตำแหน่ง : {{$operate_sup->modify_position1}} เป็นตำแหน่ง : {{$operate_sup->modify_position2}} ตั้งแต่วันที่ : {{$operate_sup->modify_date}} <br>
                            @endif 
                            @if($operate_sup->other_90 == 'อื่นๆ')
                                <input type="checkbox" checked>{{$operate_sup->other_90}} : {{$operate_sup->other_com_90}}
                            @endif
                    </td>
                </tr>
            </tbody>
        </table><br>
    <table>
        <tbody>
            <tr>
                <td align="center">ผู้ประเมิน : ........................................... <br> ( คุณ{{$operate_sup->name_rate_60}} ) <br>ผู้บังคับบัญชาต้นสังกัด</td>
                <td align="center">ผู้ถูกประเมิน : ........................................... <br> 
                    ( คุณ@foreach ( $personal as $item)
                    @if(  $item->id == $operate_sup->id_posinal )
                        {{$item->name}} {{$item->lastname}}
                    @endif
                @endforeach) <br>พนักงานผู้ถูกประเมิน</td>
            </tr>  
        </tbody>
    </table>
    </div>
    <div class="page-break">
    <table>
        <tbody>
            <tr><td align="center" colspan="4"><b>เฉพาะผู้จัดการฝ่าย เป็นผู้ประเมิน (100 คะแนน)</b></td></tr>
            <tr>
                <td></td>    
                <td align="center" colspan="3"><b>ระบุคะแนน</b></td>
            </tr>    
            <tr>
                <td align="center"><b>หัวข้อการประเมิน</b></td>
                <td align="center">10-8 ดี</td>
                <td align="center">7-5 พอใช้</td>
                <td align="center">4-1 ปรับปรุง</td>
            </tr>
            <tr>
                <td>1.บุคลิกภาพ และการแต่งกาย</td>
                <td align="center">@if($operate_sup->chioce_suitability1 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability1}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability11 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability11}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability21 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability21}}        
                @endif</td>
            </tr>
            <tr>
                <td>2.ความสุภาพ กิริยา มารยาท</td>
                <td align="center">@if($operate_sup->chioce_suitability2 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability2}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability12 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability12}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability22 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability22}}        
                @endif</td>
            </tr>
            <tr>
                <td>3.ความเคร่งครัดต่อระเบียบวินัย</td>
                <td align="center">@if($operate_sup->chioce_suitability3 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability3}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability13 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability13}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability23 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability23}}        
                @endif</td>
            </tr>
            <tr>
                <td>4.ความตรงต่อเวลา</td>
                <td align="center">@if($operate_sup->chioce_suitability4 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability4}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability14 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability14}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability24 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability24}}        
                @endif</td>
            </tr>
            <tr>
                <td>5.การประพฤติต่อผู้บังคับบัญชา</td>
                <td align="center">@if($operate_sup->chioce_suitability5 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability5}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability15 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability15}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability25 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability25}}        
                @endif</td>
            </tr>
            <tr>
                <td>6.ทัศนคติต่องาน / บริษัท</td>
                <td align="center">@if($operate_sup->chioce_suitability6 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability6}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability16 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability16}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability26 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability26}}        
                @endif</td>
            </tr>
            <tr>
                <td>7.การช่วยเหลือเพื่อนร่วมงาน</td>
                <td align="center">@if($operate_sup->chioce_suitability7 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability7}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability17 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability17}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability27 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability27}}        
                @endif</td>
            </tr>
            <tr>
                <td>8.ลักษณะความเป็นผู้นำ</td>
                <td align="center">@if($operate_sup->chioce_suitability8 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability8}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability18 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability18}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability28 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability28}}        
                @endif</td>
            </tr>
            <tr>
                <td>9.ความคิดริเริ่ม สร้างสรรค์</td>
                <td align="center">@if($operate_sup->chioce_suitability9 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability9}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability19 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability19}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability29 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability29}}        
                @endif</td>
            </tr>
            <tr>
                <td>10.ความคิดเห็นโดยทั่วไป</td>
                <td align="center">@if($operate_sup->chioce_suitability10 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability10}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability20 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability20}}        
                @endif</td>
                <td align="center">@if($operate_sup->chioce_suitability30 == 0)
                    - 
                @else
                    {{$operate_sup->chioce_suitability30}}        
                @endif</td>
            </tr>
            <tr><td colspan="4"><b>รวมคะแนน :</b><font color="red"> {{$operate_sup->sum_chioce_suitability10}}</font> คะแนน</td></tr>
        </tbody>    
    </table> <br>
    <table><tr><td><b>ความคิดเห็นเพิ่มเติม : </b>{{$operate_sup->comment_suitability10}} <br>
    @if($operate_sup->ok_suitability == 'อนุมัติตามผู้บังคับบัญชาเสนอ')
        <input type="checkbox" checked> {{$operate_sup->ok_suitability}} <br>
    @endif 
    @if($operate_sup->other_suitability == 'อื่นๆ')
        <input type="checkbox" checked>{{$operate_sup->other_suitability}} : {{$operate_sup->other_com_suitability}} <br>
    @endif 
    @if($operate_sup->namerate_suitability != '')
    <p align = "right">ลงนาม ........................................... ผู้จัดการฝ่าย <br>( คุณ{{$operate_sup->namerate_suitability}} ) </p>
    @endif
</td></tr></table>
</div><div class="page-break">
    <table>
        <tr><th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย (จาก 60 วัน)</th></tr>
        <tr>
            <td style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
            <td style="text-align:center">ลาป่วย(วัน )</td>
            <td style="text-align:center">ลากิจ (วัน )</td>
            <td style="text-align:center">ขาดงาน (วัน )</td>
            <td style="text-align:center">พักร้อน (วัน )</td>
            <td style="text-align:center">สาย (ครั้ง)</td>
            <td style="text-align:center">สาย (นาที)</td>
        </tr>
        <tr>
            <td>ตั้งแต่วันที่ :{{$operate_sup->startwork_60}} <br>ถึงวันที่ :{{$operate_sup->endwork_60}}</td>
            <td style="text-align:center">{{$operate_sup->sick_leave_60}}</td>
            <td style="text-align:center">{{$operate_sup->errand_leave_60}}</td>
            <td style="text-align:center">{{$operate_sup->absence_60}}</td>
            <td style="text-align:center">{{$operate_sup->vacation_60}}</td>
            <td style="text-align:center">{{$operate_sup->line_terms_60}}</td>
            <td style="text-align:center">{{$operate_sup->line_min_60}}</td>
        </tr>
    </table> <br><br>
    <table>
        <tr><th COLSPAN="7" style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</th></tr>
        <tr>
            <td style="text-align:center">สรุปผลสภาพการมาทำงาน และ การมาสาย</td>
            <td style="text-align:center">ลาป่วย(วัน )</td>
            <td style="text-align:center">ลากิจ (วัน )</td>
            <td style="text-align:center">ขาดงาน (วัน )</td>
            <td style="text-align:center">พักร้อน (วัน )</td>
            <td style="text-align:center">สาย (ครั้ง)</td>
            <td style="text-align:center">สาย (นาที)</td>
        </tr>
        <tr>
            <td>ตั้งแต่วันที่ :{{$operate_sup->startwork_60}} <br>ถึงวันที่ :{{$operate_sup->endwork_60}}</td>
            <td style="text-align:center">{{$operate_sup->sick_leave_90}}</td>
            <td style="text-align:center">{{$operate_sup->errand_leave_90}}</td>
            <td style="text-align:center">{{$operate_sup->absence_90}}</td>
            <td style="text-align:center">{{$operate_sup->vacation_90}}</td>
            <td style="text-align:center">{{$operate_sup->line_terms_90}}</td>
            <td style="text-align:center">{{$operate_sup->line_min_90}}</td>
        </tr>
    </table><br><br>
    <table>
        <tbody>
            <tr><td colspan="3" align="center"><b>สรุปผลการประเมิน</b></td></tr>
            <tr>
                <td align="center">ประเภทการประเมิน</td>
                <td align="center">คะแนนเต็ม</td>
                <td align="center">คะแนนที่ได้</td>
            </tr>
            <tr>
                <td>1. การประเมินผลการปฏิบัติงานโดย <b>ผู้บังคับบัญชา</b></td>
                <td align="center">100</td>
                <td align="center">{{$operate_sup->conclusions}}</td>
            </tr>
            <tr>
                <td>1. การประเมินผลการปฏิบัติงานโดย <b>ผู้จัดการฝ่าย</b></td>
                <td align="center">100</td>
                <td align="center">{{$operate_sup->results_manager}}</td>
            </tr>
            <tr>
                <td align="center">รวมคะแนนทั้งสิ้น</td>
                <td align="center">200</td>
                <td align="center"></td>
            </tr>
        </tbody>
    </table>
</div>
    <table>
        <tbody>
            <tr><td align="center"><b>เฉพาะฝ่ายทรัพยากรบุคคล</b></td></tr>
            <tr>
                <td>
                    @if($operate_sup->human_resource_ok == 'บรรจุเป็นพนักงานประจำ')
                        <input type="checkbox" checked>ให้บรรจุเป็นพนักงานประจำ
                    @endif
                    @if($operate_sup->human_resource_modi == 'ปรับอัตราเงินเดือน')
                        <input type="checkbox" checked>ปรับอัตราเงินเดือน {{$operate_sup->human_resource_commo}}
                    <br>@endif
                    @if($operate_sup->human_resource_nodi == 'ยังไม่ปรับเงินเดือน')
                        <input type="checkbox" checked>ยังไม่ปรับอัตราเงินเดือน {{$operate_sup->human_resource_comno}}
                    <br>@endif
                    @if($operate_sup->human_resource_adjust == 'ให้ปรับตำแหน่งเป็น')
                    <input type="checkbox" checked>ให้ปรับตำแหน่งเป็น {{$operate_sup->human_resource_posi}} และปรับเงินเดือน
                    <br>@endif
                    @if($operate_sup->human_resource_fail == 'ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่:')
                        <input type="checkbox" checked>ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่: {{$operate_sup->human_resource_date}}
                    <br>@endif 
                    @if($operate_sup->human_resource_other == 'อื่นๆ')
                        <input type="checkbox" checked>อื่นๆ {{$operate_sup->human_resource_othercom}}
                    <br>@endif 
                    @if($operate_sup->human_resource_nre != '')
                        <p align = "right">ลงนาม ........................................... ผู้จัดการฝ่ายทรัพยากรบุคคล <br>( คุณ{{$operate_sup->human_resource_nre}} ) </p>
                    @endif
                </td>
            </tr>
        </tbody>
    </table> <br>
    <table>
        <tbody>
            <tr><td align="center"><b>เฉพาะกรรมการผู้จัดการ/ผู้จัดการทั่วไป</b></td></tr>
            <tr>
                <td>
                    @if($operate_sup->manager_resource_ok == 'อนุมัติตามผู้บังคับบัญชาเสนอ')
                        <input type="checkbox" checked>ให้บรรจุเป็นพนักงานประจำ
                    @endif
                    @if($operate_sup->manager_resource_modi == 'ปรับอัตราเงินเดือน')
                        <input type="checkbox" checked>ปรับอัตราเงินเดือน {{$operate_sup->manager_resource_comdi}}
                    <br>@endif
                    @if($operate_sup->manager_resource_nodi == 'ยังไม่ปรับเงินเดือน')
                        <input type="checkbox" checked>ยังไม่ปรับอัตราเงินเดือน {{$operate_sup->manager_resource_comno}}
                    <br>@endif
                     @if($operate_sup->manager_resource_adjust == 'ให้ปรับตำแหน่งเป็น')
                        <input type="checkbox" checked>ให้ปรับตำแหน่งเป็น {{$operate_sup->manager_resource_posi}} และปรับเงินเดือน
                    <br>@endif 
                    @if($operate_sup->manager_resource_fail == 'ไม่ผ่านทดลองงาน  ให้มีผลบังคับตั้งแต่วันที่')
                        <input type="checkbox" checked>ไม่ผ่านทดลองงาน ให้มีผลบังคับตั้งแต่วันที่: {{$operate_sup->manager_resource_date}}
                    <br>@endif 
                    @if($operate_sup->manager_resource_other == 'อื่นๆ')
                        <input type="checkbox" checked>อื่นๆ {{$operate_sup->manager_resource_othercom}}
                    <br>@endif 
                    @if($operate_sup->manager_resource_nre != '')
                        <p align = "right">ลงนาม ........................................... ผู้จัดการฝ่ายทรัพยากรบุคคล <br>( คุณ{{$operate_sup->manager_resource_nre}} ) </p>
                    @endif
                    </td>
                </tr>
        </tbody>
        </table> 
</body>
</html>