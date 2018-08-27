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
    </style>
</head>
<body>
<center><h3>ข้อมูลประวัติ</h3></center>
    <table class="table table-bordered">
        <tbody>
          <tr>
            <td colspan="2">ชื่อ: {{$personal->name}} {{$personal->lastname}} </td>
            <td>ชื่อเล่น: {{$personal->nikname}}</td>
            <td>เพศ: {{$personal->gender}}</td>
            <td colspan="2">วันเกิด: {{$personal->birthday}} </td>
            <td colspan="2">อายุ: {{$personal->age}}</td>
            
          </tr>
          <tr>
            <td>เชื้อชาติ: {{$personal->race}} </td>
            <td>สัญชาติ: {{$personal->nationality}}</td>
            <td>ศาสนา: {{$personal->religion}}</td>
            <td>เพศ: {{$personal->gender}}</td>
            <td>ส่วนสูง: {{$personal->height}}</td>
            <td colspan="3">น้ำหนัก: {{$personal->height}} </td>
          </tr>
          <tr>
                <td>
                        พี่น้องกี่คน:  
                        @if($personal->brothers == '')
                        ::ว่าง::
                        @else
                        {{$personal->brothers}}
                        @endif
                    </td>
            <td>
                เป็นคนที่:  
                @if($personal->number == '')
                ว่าง
                @else
                {{$personal->number}}
                @endif
            </td>
            <td colspan="3">โทรศัพท์สำนักงาน:           
                @if($personal->office == '')
                ::ว่าง::
                @else
                {{$personal->office}}
                @endif</td>
            <td colspan="3">โทรศัพท์บ้าน: {{$personal->home}}   </td>
          </tr>

          <tr>
            <td colspan="3">โทรศัพท์มือถือ: {{$personal->moblie}}  </td>
                <td colspan="5">อีเมล: {{$personal->email}}</td>
          </tr>
          <tr>
                <td rowspan="2" colspan="4">
                ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก: {{$personal->address1}}
                </td>
                <td rowspan="2" colspan="4">
                    ที่อยู่ตามบัตรประชาชน: {{$personal->address2}}  
                </td>
          </tr>
          <tr></tr>
          <tr>
                <td colspan="3">
                    เลขบัตรประชาชน: {{$personal->idcard}}    
                </td>
                <td colspan="3">
                    ออกให้ ณ อำเภอ/เขต: {{$personal->issued}}   
                </td>
                <td colspan="2"></td>
            </tr>
            <tr>
                <td>วันออกบัตร: {{$personal->issueddate}}</td>     
                <td colspan="2">บัตรหมดอายุ: {{$personal->expid}}</td>
                <td colspan="5">
                        บัตรประจำตัวผู้เสียภาษี: 
                            @if($personal->texid =='')
                                ว่าง
                            @else
                                {{$personal->texid}}
                            @endif 
                </td>
                </tr>
                <tr>
                    <td colspan="2">สถานะความเป็นอยู่: {{$personal->living_status}}</td>                    
                    <td colspan="2">สถานะครอบครัว: {{$personal->marital_status}}</td>
                    <td colspan="2">
                        กรณีแต่งงาน:
                            @if($personal->if_marricd =='')
                                ว่าง
                            @else
                                {{$personal->if_marricd}}
                            @endif                                                                      
                    </td>
                    <td colspan="2">
                        คู่มสมรส: 
                            @if($personal->spouse =='')
                                ว่าง
                            @else
                                {{$personal->spouse}}
                            @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        ชื่อสมรส:
                            @if($personal->name_spouse =='')
                                ว่าง
                            @else
                                {{$personal->name_spouse}}
                            @endif
                    </td>
                    <td colspan="2">
                        อาชีพคู่สมรส:
                            @if($personal->spouse_occupation =='')
                                ว่าง
                            @else
                                {{$personal->spouse_occupation}}
                            @endif
                    </td>
                    <td colspan="4">
                        สถานที่ทำงาน:
                            @if($personal->firm_address =='')
                            ว่าง
                            @else
                            {{$personal->firm_address}}
                            @endif
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        โทรศัพท์:
                            @if($personal->spouse_tel =='')
                            ว่าง
                            @else
                            {{$personal->spouse_tel}}
                            @endif
                    </td>
                    <td colspan="2">
                        จำนวนบุตรทั้งหมด :
                            @if($personal->children =='')
                                ว่าง
                            @else
                                {{$personal->children}}
                            @endif
                            คน
                    </td>
                    <td colspan="2">
                        หญิง :
                            @if($personal->girls =='')
                            ว่าง
                            @else
                            {{$personal->girls}}
                            @endif
                            คน
                    </td>
                    <td colspan="2">
                        ชาย:
                            @if($personal->boy =='')
                            ว่าง
                            @else
                            {{$personal->boy}}
                            @endif
                            คน
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        จำนวนบุตรกำลังศึกษา :
                            @if($personal->school =='')
                            ว่าง
                            @else
                            {{$personal->school}}
                            @endif
                            คน
                    </td>
                    <td colspan="3">
                        จำนวนบุตรที่อายุเกิน21ปี :
                            @if($personal->over21 =='')
                            ว่าง
                            @else
                            {{$personal->over21}}
                            @endif
                            คน
                    </td>
                    <td colspan="2">
                            สถานะทางทหาร:
                                @if($personal->military_service =='')
                                    ว่าง
                                @else
                                    {{$personal->military_service}}
                                @endif
                        </td>
                </tr>
                <tr>
                    <td colspan="3">ชื่อบิดา: {{$personal->namefather}} {{$personal->lastfather}}</td>
                    <td colspan="3">อาชีพ: {{$personal->occupation_father}}</td>
                    <td colspan="2">สถานะ: {{$personal->alivef}}</td>
                </tr>
                <tr>
                    <td colspan="3">ชื่อมารดา: {{$personal->namemother}} {{$personal->lasrmother}}</td>
                    <td colspan="3">อาชีพ: {{$personal->occupationm}}</td>
                    <td colspan="2">สถานะ:{{$personal->alivem}} </td>
                </tr>
                <tr><td colspan="8"></td></tr>
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
                    <td colspan="2">{{$personal->bachelor}}</td>
                    <td>{{$personal->year9}}</td>
                    <td>{{$personal->year10}}</td>
                    <td>{{$personal->gpab}}</td>
                    <td>{{$personal->majorb}}</td>
                    <td>{{$personal->degree5}}</td>
                </tr>
                <tr>
                    <td>ปริญญษโท</td>
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
    
</body>
</html>