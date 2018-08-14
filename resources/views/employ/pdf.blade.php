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
    </style>
</head>
<body>

    
        
        <p> ชื่อ: {{$personal->name}} {{$personal->lastname}}  ชื่อเล่น:  {{$personal->nikname}} </p>   
          
                  
    {{Form::label('เพศ:')}}  {{$personal->gender}}{{Form::label('วันเกิด')}} {{$personal->birthday}}  
    {{Form::label('สัญชาติ:')}} {{$personal->nationality}} {{Form::label('เชื้อชาติ:')}} {{$personal->race}}                  
    {{Form::label('ศาสนา:')}} {{$personal->religion}}{{Form::label('อายุ:')}} {{$personal->age}}     
    {{Form::label('ส่วนสูง:')}} {{$personal->height}}
    
    <br><br>
    {{Form::label('น้ำหนัก:')}} {{$personal->height}} 
    {{Form::label('พี่น้องกี่คน:')}} 

    @if($personal->brothers == '')
    ::ว่าง::
    @else
    {{$personal->brothers}}
    @endif
     
    {{Form::label('เป็นคนที่:')}}  
    @if($personal->number == '')
    ว่าง
    @else
    {{$personal->number}}
    @endif
     
    {{Form::label('โทรศัพท์บ้าน:')}} {{$personal->home}}   {{Form::label('โทรศัพท์มือถือ:')}} {{$personal->moblie}}              
     {{Form::label('โทรศัพท์สำนักงาน:')}}           
    @if($personal->office == '')
    ::ว่าง::
    @else
    {{$personal->office}}
    @endif 
    <br><br> 
   
    {{Form::label('อีเมล:')}}  {{$personal->email}} 
      
    {{Form::label("ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก:")}} {{$personal->address1}}           
    <br><br>  
    {{Form::label("ที่อยู่ตามบัตรประชาชน:")}} {{$personal->address2}}      
     
    {{Form::label("เลขบัตรประชาชน:")}} {{$personal->idcard}}           
            
    {{Form::label("ออกให้ ณ อำเภอ/เขต:")}} {{$personal->issued}}         
    
    {{Form::label("จังหวัด:")}} {{$personal->province_crad}}  
    <br><br> 
    {{Form::label("วันออกบัตร:")}} {{$personal->issueddate}}         
    
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