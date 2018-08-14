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
            <td>ชื่อเล่น:  {{$personal->nikname}}</td>
            <td> {{Form::label('เพศ:')}}  {{$personal->gender}}</td>
            <td>{{Form::label('วันเกิด')}} {{$personal->birthday}} </td>
            <td>{{Form::label('สัญชาติ:')}} {{$personal->nationality}}</td>
            <td> {{Form::label('เชื้อชาติ:')}} {{$personal->race}} </td>
          </tr>
          <tr>
            <td> {{Form::label('ศาสนา:')}} {{$personal->religion}}</td>
            <td> {{Form::label('อายุ:')}} {{$personal->age}}     </td>
            <td> {{Form::label('เพศ:')}}  {{$personal->gender}}</td>
            <td> {{Form::label('ส่วนสูง:')}} {{$personal->height}}</td>
            <td> {{Form::label('น้ำหนัก:')}} {{$personal->height}} </td>
            <td>  {{Form::label('พี่น้องกี่คน:')}}  
            
                @if($personal->brothers == '')
                ::ว่าง::
                @else
                {{$personal->brothers}}
                @endif
            
            </td>
          </tr>
          <tr>
            <td> {{Form::label('เป็นคนที่:')}}  
                @if($personal->number == '')
                ว่าง
                @else
                {{$personal->number}}
                @endif
            </td>
            <td>Dooley</td>
            <td colspan="2"> {{Form::label('โทรศัพท์บ้าน:')}} {{$personal->home}}   </td>
            <td colspan="2">  {{Form::label('โทรศัพท์มือถือ:')}} {{$personal->moblie}}  </td>
           
         

          </tr>

          <tr>
                <td>  {{Form::label('โทรศัพท์สำนักงาน:')}}           
                        @if($personal->office == '')
                        ::ว่าง::
                        @else
                        {{$personal->office}}
                        @endif 
                    </td>


                <td>
                        {{Form::label('อีเมล:')}}  {{$personal->email}} 
                </td>
                <td colspan="4">
                        {{Form::label("ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก:")}} {{$personal->address1}}  
                </td>
               
          </tr>
          <tr>
                <td colspan="2">
                        {{Form::label("ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก:")}} {{$personal->address1}}  
                </td>
                <td colspan="2">
                        {{Form::label("เลขบัตรประชาชน:")}} {{$personal->idcard}}    
                </td>
            
                    <td colspan="2">
                            {{Form::label("ออกให้ ณ อำเภอ/เขต:")}} {{$personal->issued}}   
                    </td>
          
               
            </tr>
            <tr>
                <td>
                        {{Form::label("วันออกบัตร:")}} {{$personal->issueddate}}  
                </td>
                      
                <td>
                       
                </td>

                <td>
                       
                </td>
                <td>
                       
                </td>
                <td>
                       
                </td>
                <td>
                       
                </td>
                </tr>
        </tbody>
      </table>
        
        
   
   
      
            
     
   
     
            
            
          
    
    
    
    
    {{Form::label("บัตรหมดอายุ:")}} {{$personal->expid}}              
      
    {{Form::label("บัตรประจำตัวผู้เสียภาษี:")}} 
    @if($personal->texid =='')
    ว่าง
    @else
   {{$personal->texid}}
    @endif 
             
    {{Form::label("สถานะความเป็นอยู่:")}} {{$personal->living_status}}           
       
    {{Form::label("สถานะครอบครัว:")}} {{$personal->marital_status}}   
       
    {{Form::label("กรณีแต่งงาน:")}} 
    @if($personal->if_marricd =='')
    ว่าง
    @else
   {{$personal->if_marricd}}
    @endif 
    <br><br> 
    {{Form::label("คู่มสมรส:")}} 
    @if($personal->spouse =='')
    ว่าง
    @else
   {{$personal->spouse}}
    @endif 
    
    {{Form::label("ชื่อสมรส:")}}
    @if($personal->name_spouse =='')
    ว่าง
    @else
    {{$personal->name_spouse}}
    @endif 

    
    {{Form::label("อาชีพคู่สมรส:")}}
    @if($personal->spouse_occupation =='')
    ว่าง
    @else
    {{$personal->spouse_occupation}}
    @endif

    

    {{Form::label("สถานที่ทำงาน:")}}
    @if($personal->firm_address =='')
    ว่าง
    @else
    {{$personal->firm_address}}
    @endif

    
    
    {{Form::label("โทรศัพท์:")}}
    @if($personal->spouse_tel =='')
    ว่าง
    @else
    {{$personal->spouse_tel}}
    @endif

    

    {{Form::label("จำนวนบุตรทั้งหมด:")}}
    @if($personal->children =='')
    ว่าง
    @else
    {{$personal->children}}
    @endif

    

    {{Form::label("หญิง:")}}
    @if($personal->girls =='')
    ว่าง
    @else
    {{$personal->girls}}
    @endif
    

    {{Form::label("ชาย:")}}
    @if($personal->boy =='')
    ว่าง
    @else
    {{$personal->boy}}
    @endif
    <br><br> 

    {{Form::label("จำนวนบุตรกำลังศึกษา:")}}
    @if($personal->school =='')
    ว่าง
    @else
    {{$personal->school}}
    @endif

    

    {{Form::label("จำนวนบุตรที่อายุเกิน21ปี:")}}
    @if($personal->over21 =='')
    ว่าง
    @else
    {{$personal->over21}}
    @endif

    

    {{Form::label("สถานะทางทหาร:")}}
    @if($personal->military_service =='')
    ว่าง
    @else
    {{$personal->military_service}}
    @endif

    

    {{Form::label("สถานะทางทหาร:")}}
    @if($personal->military_service =='')
    ว่าง
    @else
    {{$personal->military_service}}
    @endif
    <br><br> 

    {{Form::label("ชื่อบิดา:")}}
    {{$personal->namefather}}  
    
    {{Form::label("นามสกุล:")}}
    {{$personal->lastfather}}  
    
    {{Form::label("อาชีพ:")}}
    {{$personal->occupation_father}} 
    
    {{Form::label("สถานะ")}}
    {{$personal->alivef}}       

    <br><br> 

    {{Form::label("ชื่อมารดา:")}}
    {{$personal->namemother}}
    
    {{Form::label("นามสกุล:")}}
    {{$personal->lasrmother}}  
    
    {{Form::label("อาชีพ:")}}
    {{$personal->occupationm}} 
    
    {{Form::label("สถานะ:")}}
    {{$personal->alivem}}  
</body>
</html>