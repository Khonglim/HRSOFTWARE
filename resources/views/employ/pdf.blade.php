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
            font-size: 16px;
        }
        table{
            border-collapse: collapse;
            width: 100%;
        }
        td,th{
            border:1px solid;


        }

        .page-break {
    page-break-after: always;
}
    </style>
</head>
<body>
     <div class="page-break">   
<center><h3>ข้อมูลประวัติ</h3>
<img src="{{$personal->photo}}" alt="" width="50" height="50" ></center>
<br>
    <table>
        <tbody>
            
          <tr>
          
            <td colspan="2"><b>ชื่อ: </b>  {{$personal->fronname}} {{$personal->name}} {{$personal->lastname}} </td>
            <td><b>ชื่อเล่น:</b> {{$personal->nikname}}</td>
            <td><b>เพศ: </b>{{$personal->gender}}</td>
            <td colspan="2"> <b>วันเกิด:</b> {{$personal->birthday}} </td>
            <td colspan="2"><b>อายุ:</b> {{$personal->age}}</td>
            
          </tr>
          <tr>
            <td><b>เชื้อชาติ:</b> {{$personal->race}} </td>
            <td><b>สัญชาติ:</b> {{$personal->nationality}}</td>
            <td><b>ศาสนา:</b> {{$personal->religion}}</td>
            <td><b>เพศ:</b> {{$personal->gender}}</td>
            <td><b>ส่วนสูง:</b> {{$personal->height}}</td>
            <td colspan="3"><b>น้ำหนัก: </b>{{$personal->height}} </td>
          </tr>
          <tr>
                <td>
                        <b>  พี่น้องกี่คน:</b> 
                        @if($personal->brothers == '')
                        ::ว่าง::
                        @else
                        {{$personal->brothers}}
                        @endif
                    </td>
            <td>
                    <b> เป็นคนที่:  </b> 
                @if($personal->number == '')
                ว่าง
                @else
                {{$personal->number}}
                @endif
            </td>
            <td colspan="3"><b>โทรศัพท์สำนักงาน: </b>          
                @if($personal->office == '')
                ::ว่าง::
                @else
                {{$personal->office}}
                @endif</td>
            <td colspan="3"><b>โทรศัพท์บ้าน:</b> {{$personal->home}}   </td>
          </tr>

          <tr>
            <td colspan="3"><b>โทรศัพท์มือถือ:</b> {{$personal->moblie}}  </td>
                <td colspan="5">อีเมล: {{$personal->email}}</td>
          </tr>
          <tr>
                <td rowspan="2" colspan="4">
                        <b> ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก: </b>{{$personal->address1}}
                </td>
                <td rowspan="2" colspan="4">
                        <b>  ที่อยู่ตามบัตรประชาชน:</b> {{$personal->address2}}  
                </td>
          </tr>
          <tr></tr>
          <tr>
                <td colspan="3">
                        <b>  เลขบัตรประชาชน:</b>  {{$personal->idcard}}    
                </td>
                <td colspan="3">
                        <b>  ออกให้ ณ อำเภอ/เขต: </b> {{$personal->issued}}   
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td colspan="2" > <b>วันออกบัตร: </b> {{$personal->issueddate}}</td>     
                <td colspan="2"> <b>บัตรหมดอายุ:</b> {{$personal->expid}}</td>
                <td colspan="4">
                        <b>บัตรประจำตัวผู้เสียภาษี: </b>
                            @if($personal->texid =='')
                                ว่าง
                            @else
                                {{$personal->texid}}
                            @endif 
                </td>
                </tr>
                <tr>
                    <td colspan="2"> <b>สถานะความเป็นอยู่:</b> {{$personal->living_status}}</td>                    
                    <td colspan="2"> <b>สถานะครอบครัว:</b> {{$personal->marital_status}}</td>
                    <td colspan="2">
                            <b> กรณีแต่งงาน:</b>
                            @if($personal->if_marricd =='')
                                ว่าง
                            @else
                                {{$personal->if_marricd}}
                            @endif                                                                      
                    </td>
                    <td colspan="2">
                            <b> คู่มสมรส:  </b>
                            @if($personal->spouse =='')
                                ว่าง
                            @else
                                {{$personal->spouse}}
                            @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                            <b> ชื่อสมรส:</b>
                            @if($personal->name_spouse =='')
                                ว่าง
                            @else
                                {{$personal->name_spouse}}
                            @endif
                    </td>
                    <td colspan="2">
                            <b>  อาชีพคู่สมรส:</b>
                            @if($personal->spouse_occupation =='')
                                ว่าง
                            @else
                                {{$personal->spouse_occupation}}
                            @endif
                    </td>
                    <td colspan="4">
                            <b>  สถานที่ทำงาน: </b>
                            @if($personal->firm_address =='')
                            ว่าง
                            @else
                            {{$personal->firm_address}}
                            @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                            <b>  โทรศัพท์: </b>
                            @if($personal->spouse_tel =='')
                            ว่าง
                            @else
                            {{$personal->spouse_tel}}
                            @endif
                    </td>
                    <td colspan="2">
                            <b>   จำนวนบุตรทั้งหมด :</b>
                            @if($personal->children =='')
                                ว่าง
                            @else
                                {{$personal->children}}
                            @endif
                            <b>  คน</b>
                    </td>
                    <td colspan="2">
                            <b>  หญิง : </b>
                            @if($personal->girls =='')
                            ว่าง
                            @else
                            {{$personal->girls}}
                            @endif
                            <b>  คน </b>
                    </td>
                    <td colspan="2">
                            <b>   ชาย:  </b>
                            @if($personal->boy =='')
                            ว่าง
                            @else
                            {{$personal->boy}}
                            @endif
                            <b>  คน </b>
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                            <b> จำนวนบุตรกำลังศึกษา : </b>
                            @if($personal->school =='')
                            ว่าง
                            @else
                            {{$personal->school}}
                            @endif
                            <b>  คน </b>
                    </td>
                    <td colspan="2">
                            <b>  จำนวนบุตรที่อายุเกิน21ปี : </b>
                            @if($personal->over21 =='')
                            ว่าง
                            @else
                            {{$personal->over21}}
                            @endif
                            <b>  คน</b>
                    </td>
                    <td colspan="3">
                            <b>   สถานะทางทหาร:  </b>
                                @if($personal->military_service =='')
                                    ว่าง
                                @else
                                    {{$personal->military_service}}
                                @endif
                        </td>
                </tr>
                <tr>
                    <td colspan="3"><b> ชื่อบิดา:</b> {{$personal->namefather}} {{$personal->lastfather}}</td>
                    <td colspan="3"><b> อาชีพ:</b> {{$personal->occupation_father}}</td>
                    <td colspan="2"><b> สถานะ:</b> {{$personal->alivef}}</td>
                </tr>
                <tr>
                    <td colspan="3"><b> ชื่อมารดา:</b> {{$personal->namemother}} {{$personal->lasrmother}}</td>
                    <td colspan="3"><b> อาชีพ:</b> {{$personal->occupationm}}</td>
                    <td colspan="2"><b> สถานะ:</b>{{$personal->alivem}} </td>
                </tr>
                <tr>
                    <th colspan="8" align=center>ประวัติการศึกษา</th>
                </tr>
                <thead>
                    <tr>
                        <th>ระดับการศึกษา</th>
                        <th colspan="2">ชื่อสถาบัน</th>
                        <th>เริ่มปีการศึกษา</th>
                        <th>จบปีการศึกษา</th>
                        <th>เกรดเฉลี่ย</th>
                        <th>สาขา</th>
                        <th>วุฒที่ได้รับ</th>
                    </tr>
                </thead>
                <tr>
                    <td>ประถมศึกษา</td>
                    <td colspan="2">{{$personal->primary}}</td>
                    <td>{{$personal->year1}}</td>
                    <td>{{$personal->year2}}</td>
                    <td>{{$personal->gpa}}</td>
                    <td>{{$personal->major}}</td>
                    <td>{{$personal->degree1}}</td>
                </tr>
                <tr>
                    <td>มัธยมศึกษา</td>
                    <td colspan="2">{{$personal->secondary}}</td>
                    <td>{{$personal->year3}}</td>
                    <td>{{$personal->year4}}</td>
                    <td>{{$personal->gpas}}</td>
                    <td>{{$personal->majors}}</td>
                    <td>{{$personal->degree2}}</td>
                </tr>
                <tr>
                    <td>อาชีวะศึกษา</td>
                    <td colspan="2">{{$personal->vocation}}</td>
                    <td>{{$personal->year5}}</td>
                    <td>{{$personal->year6}}</td>
                    <td>{{$personal->gpav}}</td>
                    <td>{{$personal->majorv}}</td>
                    <td>{{$personal->degree3}}</td>
                </tr>
                <tr>
                    <td>อนุปริญญา</td>
                    <td colspan="2">{{$personal->diploma}}</td>
                    <td>{{$personal->year7}}</td>
                    <td>{{$personal->year8}}</td>
                    <td>{{$personal->gpad}}</td>
                    <td>{{$personal->majord}}</td>
                    <td>{{$personal->degree4}}</td>
                </tr>
                <tr>
                        <td>ปริญญาตรี</td>
                        <td colspan="2">{{$personal->bachelor }}</td>
                        <td>{{ $personal->year9 }}</td>
                        <td>{{ $personal->year10 }}</td>
                        <td>{{$personal->gpab }}</td>
                        <td>{{$personal->majorb }}</td>
                        <td>{{$personal->degree5 }}</td>
                    
    
                    </tr>
                <tr>
                    <td>ปริญญาโท</td>
                    <td colspan="2">{{$personal->master}}</td>
                    <td>{{$personal->year11}}</td>
                    <td>{{$personal->year12}}</td>
                    <td>{{$personal->gpam}}</td>
                    <td>{{$personal->majorm}}</td>
                    <td>{{$personal->degree6}}</td>
                </tr>
                <tr>
                    <td>อื่นๆ</td>
                    <td colspan="2">{{$personal->otherE}}</td>
                    <td>{{$personal->year13}}</td>
                    <td>{{$personal->year14}}</td>
                    <td>{{$personal->gpao}}</td>
                    <td>{{$personal->majoro}}</td>
                    <td>{{$personal->degree7}}</td>
                </tr>

                
               
            </tbody>
          </table>
   
     
    <table>
          <tr>
                <th colspan="8" align=center>ภาษา</th>
            </tr>
            <tbody>
                <tr>
                    <td colspan="2">ประเภทภาษา</td>
                    <td colspan="2">การพูด</td>
                    <td colspan="2">การเข้าใจ</td>
                    <td colspan="2">การเขียน</td>
                </tr>
            
            <tr>
                <td colspan="2">ไทย</td>
                <td colspan="2">{{$personal->thais}}</td>
                <td colspan="2">{{$personal->thail}}</td>
                <td colspan="2">{{$personal->thair}}</td>
            </tr>
            <tr>
                <td colspan="2">อังกฤษ</td>
                <td colspan="2">{{$personal->engliss}}</td>
                <td colspan="2">{{$personal->englisl}}</td>
                <td colspan="2">{{$personal->englisr}}</td>
            </tr>
            <tr>
                <td colspan="2">อื่นๆ : {{$personal->otherr}}</td>
                <td colspan="2">{{$personal->othes}}</td>
                <td colspan="2">{{$personal->othel}}</td>
                <td colspan="2">{{$personal->other}}</td>
            </tr>




        </tbody>
    </table>

</div>
    
      <table>
          <tbody>
                <tr>
                    <th colspan="8" align=center>ประวัติการทำงาน</th>
                </tr>
              
                    <tr>
                        <th>ชื่อสถานประกอบการ</th>
                        <th>ลักษณธงานที่รับผิดชอบ</th>
                        <th>โทร</th>
                        <th>ระยะงานเริ่ม</th>
                        <th>ระยะงานสิ้นสุด</th>
                        <th>ตำแหน่ง</th>
                        <th>สาเหตุที่ออก</th>
                        <th>เงินเดือนครั้งสุดท้าย</th>
                    </tr>
              
                <tr>
                    <td>
                        
                            @if($personal->list_of_employed1 =='')
                            ว่าง
                        @else
                            {{$personal->list_of_employed1}}
                        @endif
                        
                    </td>
                    <td>
                    @if($personal->job_description1 =='')
                           -
                        @else
                        {{$personal->job_description1}}

                        @endif
                    </td>
                    <td>
                    
                            @if($personal->call1 =='')
                            -
                         @else
                         {{$personal->call1}}
 
                         @endif
                    </td>
                    <td>
                        @if($personal->start_job_duration1 =='')
                            -
                         @else

                         {{$personal->start_job_duration1}}
 
                         @endif
                    </td>
                    <td>
                    
                        @if($personal->end_job_duration2 =='')
                            -
                         @else
                         
                         {{$personal->end_job_duration2}}
 
                         @endif

                    </td>
                    <td>
                            @if($personal->position1 =='')
                            -
                         @else
                         
                         {{$personal->position1}}
 
                         @endif
                    </td>
                    <td>
                            @if($personal->reasonLeaving1 =='')
                            -
                         @else
                         
                         {{$personal->reasonLeaving1}}
 
                         @endif
                    </td>
                    <td>
                            @if($personal->lastsalary1 =='')
                            -
                         @else
                         
                         {{$personal->lastsalary1}}
 
                         @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($personal->list_of_employed2 =='')
                            -
                         @else
                         
                         {{$personal->list_of_employed2}}
 
                         @endif
                    </td>
                    <td>
                            @if($personal->job_description2 =='')
                            -
                         @else
                         
                         {{$personal->job_description2}}
 
                         @endif
                    </td>
                    <td>
                            @if($personal->call2 =='')
                            -
                         @else
                         
                         {{$personal->call2}}
 
                         @endif
                    
                    </td>
                    <td>
                      @if($personal->start_job_duration3 =='')
                            -
                      @else
                         
                         {{$personal->start_job_duration3}}
 
                         @endif
                    </td>
                    <td>
                    @if($personal->end_job_duration4 =='')
                            -
                      @else
                         
                         {{$personal->end_job_duration4}}
 
                         @endif
                    </td>
                    <td>
                         @if($personal->position2 =='')
                            -
                         @else
                         
                         {{$personal->position2}}
 
                         @endif
                    </td>
                    <td>
                    
                         @if($personal->reasonLeaving2 =='')
                            -
                         @else
                         
                         {{$personal->reasonLeaving2}}
 
                         @endif
                    </td>
                    <td>
                       @if($personal->lastsalary2 =='')
                            -
                         @else
                         
                         {{$personal->lastsalary2}}
 
                         @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        @if($personal->list_of_employed3 =='')
                            -
                         @else
                         
                         {{$personal->list_of_employed3}}
 
                         @endif
                    </td>
                    <td>
                    
                         @if($personal->job_description3 =='')
                            -
                         @else
                         
                         {{$personal->job_description3}}
 
                         @endif
                    </td>
                    <td>
                    
                            @if($personal->call3 =='')
                            -
                         @else
                         
                         {{$personal->call3}}
 
                         @endif
                    </td>
                    <td>
                        @if($personal->start_job_duration5 =='')
                            -
                         @else
                         
                         {{$personal->start_job_duration5}}
 
                         @endif
                    </td>
                    <td>
                            @if($personal->end_job_duration6 =='')
                            -
                         @else
                         
                         {{$personal->end_job_duration6}}
 
                         @endif
                    </td>
                    <td>
                    
                      @if($personal->position3 =='')
                            -
                         @else
                         
                         {{$personal->position3}}
 
                         @endif
                    </td>
                    <td>
                            @if($personal->reasonLeaving3 =='')
                            -
                         @else
                         
                         {{$personal->reasonLeaving3}}
 
                         @endif
                    </td>
                    <td>
                            @if($personal->lastsalary3 =='')
                            -
                         @else
                         
                         {{$personal->lastsalary3}}
 
                         @endif  
                    </td>
                </tr>
              
                <tr>
                    <th colspan="8" align=center>อื่นๆ</th>
                </tr>
                <tr>
                    <td colspan="4"><b>บุคคลที่ไม่ใช่ญาติที่ติดต่อได้ :</b> {{$personal->namecm}}</td>
                    <td colspan="2"><b>เกี่ยวข้องเป็น :</b> {{$personal->lastnamecm}}</td>
                    <td colspan="2"><b>โทร :</b> {{$personal->telecm}}</td>
                </tr>
                <tr>
                    <td colspan="3"><b>ตำแหน่ง :</b> {{$personal->positioncm}}</td>
                    <td colspan="5"><b>สถานที่ทำงาน/ที่อยู่ :</b> {{$personal->firm}}</td>
                </tr>
                <tr>
                    <td colspan="4"><b>ความรู้พิเศษ</b>คอมพิวเตอร์ ระบุ : {{$personal->computer}}</td>
                    <td colspan="4"><b>อื่นๆ :</b> {{$personal->fax}} {{$personal->typewriter}} {{$personal->dot}} คำ/นาที</td>
                </tr>
                <tr>
                    <td colspan="8"><b>ในตำแหน่งที่ต้องการต้องมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ) : </b>{{$personal->crash1}} ชื่อ : {{$personal->compd}}</td>
                </tr>
                <tr>
                    <td colspan="4"><b>สถานที่ทำงาน :</b> {{$personal->compa}}</td>
                    <td colspan="4"><b>ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป :</b> {{$personal->crash2}}</td>
                    
                </tr>
                <tr>
                    <td colspan="8"><b>ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม :</b> {{$personal->crash3}}</td>
                </tr>
                <tr>
                    <td colspan="4"><b>ท่านสามารถขับรถยนต์ได้หรือไม่ :</b> {{$personal->yes}} </td>
                    <td colspan="4"><b>ท่านมีรถยนต์ส่วนตัวหรือไม่ :</b> {{$personal->owncar}}</td>
                </tr>
                <tr>
                    <td colspan="5"><b>บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ:</b> {{$personal->workk}}</td>
                    <td colspan="3"><b>ท่านพร้อมงานวันที่ :</b> {{$personal->dateworkk}}</td>
                </tr>
                <tr>
                    <td colspan="5"><b>ท่านเป็นเจ้าของรถประเภทใด :</b> {{$personal->cardec}}</td>
                    <td colspan="3"><b>ทะเบียน :</b> {{$personal->license}} </td>
                </tr>
                <tr>
                    <td colspan="8"><b>ท่านเคยให้ถูกออกจากงานหรือไม่ : </b>
                        
                     @if($personal->exitwork =='ไม่เคย')
                            {{$personal->exitwork}}  
                         @else
                         {{$personal->exitwork}} <b>  เพราะ </b>
                         {{$personal->lastsalary3}}
 
                         @endif  
                        </td>
                </tr>
                <tr>
                    <td colspan="4"><b>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่? : </b>{{$personal->serious_ill}}</td>
                    <td colspan="4"><b>ท่านเคยไดรั้บโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่? :</b> {{$personal->offense}}</td>
                </tr>
                <tr>
                    <td colspan="8"><b>ขณะนี้คุณตั้งครรภ์หรือไม่? :</b>{{$personal->pregnant}}</td>
                </tr>
          </tbody>
      </table>

    

      <table>
         <tr>
            <td> Link ผลงาน {{$personal->portfolio3}}</td>            
          </tr>
        </tbody>
      </table>

  




    
</body>
</html>