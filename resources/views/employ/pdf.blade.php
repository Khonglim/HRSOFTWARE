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
            <td>ชื่อ: {{$personal->name}} {{$personal->lastname}} </td>
            <td>ชื่อเล่น: {{$personal->nikname}}</td>
            <td>เพศ: {{$personal->gender}}</td>
            <td colspan="2">วันเกิด: {{$personal->birthday}} </td>
            <td>สัญชาติ: {{$personal->nationality}}</td>
            
          </tr>
          <tr>
            <td>เชื้อชาติ: {{$personal->race}} </td>
            <td>ศาสนา: {{$personal->religion}}</td>
            <td>อายุ: {{$personal->age}}     </td>
            <td>เพศ: {{$personal->gender}}</td>
            <td>ส่วนสูง: {{$personal->height}}</td>
            <td>น้ำหนัก: {{$personal->height}} </td>
            
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
            <td>Dooley</td>
            <td colspan="2">โทรศัพท์บ้าน: {{$personal->home}}   </td>
            <td>โทรศัพท์มือถือ: {{$personal->moblie}}  </td>
          </tr>

          <tr>
                <td>
                    โทรศัพท์สำนักงาน:           
                        @if($personal->office == '')
                        ::ว่าง::
                        @else
                        {{$personal->office}}
                        @endif 
                    </td>


                <td>อีเมล: {{$personal->email}}</td>
                <td colspan="4">
                    ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก: {{$personal->address1}}
                </td>
               
          </tr>
          <tr>
                <td colspan="2">
                        ที่อยู่ตามบัตรประชาชน: {{$personal->address2}}  
                </td>
                <td colspan="3">
                        เลขบัตรประชาชน: {{$personal->idcard}}    
                </td>
            
                    <td>
                            ออกให้ ณ อำเภอ/เขต: {{$personal->issued}}   
                    </td>
            </tr>
            <tr>
                <td>
                        วันออกบัตร: {{$personal->issueddate}}  
                </td>
                      
                <td>
                        บัตรหมดอายุ: {{$personal->expid}}     
                </td>

                <td colspan="4">
                        บัตรประจำตัวผู้เสียภาษี: 
                            @if($personal->texid =='')
                                ว่าง
                            @else
                                {{$personal->texid}}
                            @endif 
                </td>
                </tr>
                <tr>
                    <td colspan="2">
                            สถานะความเป็นอยู่: {{$personal->living_status}}  
                    </td>
                    <td colspan="2">
                            สถานะครอบครัว: {{$personal->marital_status}} 
                    </td>
                    <td colspan="2">
                        กรณีแต่งงาน:
                            @if($personal->if_marricd =='')
                                ว่าง
                            @else
                                {{$personal->if_marricd}}
                            @endif                                                                      
                    </td>
                </tr>
                <tr>
                        <td>
                                คู่มสมรส: 
                                    @if($personal->spouse =='')
                                        ว่าง
                                    @else
                                        {{$personal->spouse}}
                                    @endif
                            </td>
                        <td>
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
                    <td>
                        สถานที่ทำงาน:
                            @if($personal->firm_address =='')
                            ว่าง
                            @else
                            {{$personal->firm_address}}
                            @endif
                    </td>
                    <td>
                        โทรศัพท์:
                            @if($personal->spouse_tel =='')
                            ว่าง
                            @else
                            {{$personal->spouse_tel}}
                            @endif
                    </td>
                </tr>
                <tr>
                    <td>
                        จำนวนบุตรทั้งหมด:
                            @if($personal->children =='')
                                ว่าง
                            @else
                                {{$personal->children}}
                            @endif
                            คน
                    </td>
                    <td>
                        หญิง:
                            @if($personal->girls =='')
                            ว่าง
                            @else
                            {{$personal->girls}}
                            @endif
                            คน
                    </td>
                    <td>
                        ชาย:
                            @if($personal->boy =='')
                            ว่าง
                            @else
                            {{$personal->boy}}
                            @endif
                            คน
                    </td>
                    <td colspan="2">
                        จำนวนบุตรกำลังศึกษา:
                            @if($personal->school =='')
                            ว่าง
                            @else
                            {{$personal->school}}
                            @endif
                            คน
                    </td>
                    <td>
                        จำนวนบุตรที่อายุเกิน21ปี:
                            @if($personal->over21 =='')
                            ว่าง
                            @else
                            {{$personal->over21}}
                            @endif
                            คน
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        สถานะทางทหาร:
                            @if($personal->military_service =='')
                                ว่าง
                            @else
                                {{$personal->military_service}}
                            @endif
                    </td>
                    <td colspan="3">
                            
                        </td>
                </tr>
                <tr>
                        <td colspan="2">ชื่อบิดา: {{$personal->namefather}} {{$personal->lastfather}}</td>
                        <td colspan="2">อาชีพ: {{$personal->occupation_father}}</td>
                        <td colspan="2">สถานะ: {{$personal->alivef}}</td>
                </tr>
                <tr>
                    <td colspan="2">ชื่อมารดา: {{$personal->namemother}} {{$personal->lasrmother}}</td>
                    <td colspan="2">อาชีพ: {{$personal->occupationm}}</td>
                    <td colspan="2">สถานะ:{{$personal->alivem}} </td>
                </tr>
        </tbody>
      </table>
    
</body>
</html>