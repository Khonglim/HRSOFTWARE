<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"
"http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

<link href="{{ asset('signaturepad/assets/jquery.signaturepad.css') }}" rel="stylesheet">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script> 
<script type="text/javascript" src="{{ asset('signaturepad/jquery.signaturepad.js') }}"></script>
<script type="text/javascript" src="{{ asset('signaturepad/assets/json2.min.js') }}"></script>
<title> print report </title>
<style type="text/css">
 body {
    font-family : "THSarabunNew";
           font-size: 14px;
       }
       .page-break {
           page-break-after: always;
       }
       table {
           border-collapse: collapse;
           width: 100%;
           font-size: 14px;
       }
       td,
       th {
           border: 1px solid;
       }
       .font {
           font-size: 25px;
       }
       .pop {
           text-align: center;
       }
</style>
</head>
 
<body>
        <div class="container">
    <br>
<center><img src="{{ url('img/NGG-10.jpg') }}" width="100px" height="100px"></center>
<h2>บริษัทในเครือของ เอ็น จี จี กรุ๊ป</h2><hr>
<b>บริษัทต้นสังกัด/company :</b> {{ $manpower->company }} <br>
<table>
    <tr><td colspan="4"><p align="center">ใบขอกำลังคน / Manpower Requistion</p></td></tr>
    <tr>
        <td colspan="4">
            @if ($manpower->internal_Recruit!='')
                <input type="checkbox" checked> {{ $manpower->internal_Recruit }}
            @endif
            @if ($manpower->internal_Recruit!='')
        <br>    <input type="checkbox" checked> {{ $manpower->external_Recruit }}
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>ตำแหน่งที่ต้องการ :</b> {{ $manpower->position_required }} <br> Position Required</td>
        <td colspan="2"><b>แผนก/ส่วน :</b> {{ $manpower->section }} <br> Section/Dividion</td>
    </tr>
    <tr>
        <td><b>วันที่ต้องการ :</b> {{ $manpower->date_required }} <br> Date Required</td>
        <td colspan="2"><b>จำนวนพนักงานที่ต้องการ :</b> {{ $manpower->number }} <br> Number</td>
        <td><b>อายุ :</b> {{ $manpower->age }} <br> Age</td>
    </tr>
    <tr>
        <td rowspan="2"><b>ประเภทของพนักงาน <br> Type of Employent</b></td>
        <td>
            @if ($manpower->permanent!='')
                <input type="checkbox" checked> {{ $manpower->permanent }}
            @endif
        </td>
        <td>
                @if ($manpower->apprentie!='')
                    <input type="checkbox" checked> {{ $manpower->apprentie }}
                @endif
        </td>
        <td>
                @if ($manpower->subcontract!='')
                    <input type="checkbox" checked> {{ $manpower->subcontract }}
                @endif
        </td>
    </tr>
    <tr>
        <td colspan="2">
            @if ($manpower->daily!='')
                <input type="checkbox" checked> {{ $manpower->daily }}
            @endif
            @if ($manpower->monthly!='')
                <input type="checkbox" checked> {{ $manpower->monthly }}
            @endif
        </td>
        <td>
            @if ($manpower->checkstart!='')
                <input type="checkbox" checked> {{ $manpower->checkstart }} &emsp;&emsp;
                <b>เริ่มต้น :</b>{{ $manpower->timestart }} &emsp;
                <b>สิ้นสุด :</b>{{ $manpower->timeend }}
            @endif
        </td>
    </tr>
    <tr>
        <td><b>ประเภทของความต้องการ :</b></td>
        <td>
            @if ($manpower->hire!='')
                <input type="checkbox" checked> {{ $manpower->hire }}
            @endif
        </td>
        <td colspan="2">
                @if ($manpower->substitute!='')
                    <input type="checkbox" checked> {{ $manpower->substitute }}
                    <b>ชื่อ-นามสกุล :</b> {{ $manpower->name_substitute }}
                @endif
        </td>
    </tr>
    <tr>
        <td colspan="2"><b>อัตราจ้าง/salary :</b> {{ $manpower->ratesalary }}</td>
        <td colspan="2"><b>สวัสดิการอื่นๆ :</b> {{ $manpower->benefits }}</td>
    </tr>
    <tr>
        <td colspan="4"><b>ลักษณะงานที่ทำโดยสังเขป/Description :</b> {{ $manpower->description }}</td>
    </tr>
    <tr>
        <td colspan="4"><b>คุณสมบัติ/Qualification : เพศ/Sex </b>
            @if ($manpower->gender=='ชาย')
                <input type="checkbox" checked> {{ $manpower->gender }}
            @endif
            @if ($manpower->gender=='หญิง')
                <input type="checkbox" checked> {{ $manpower->gender }}
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="4"><b>การศึกษา/Education :</b>&emsp;
            @if ($manpower->primary!='')
                    <input type="checkbox" checked> {{ $manpower->primary }}
            @endif 
            @if ($manpower->secondary!='')
    &emsp;&emsp;    <input type="checkbox" checked> {{ $manpower->secondary }}
            @endif 
            @if ($manpower->high_school!='')
    &emsp;&emsp;    <input type="checkbox" checked> {{ $manpower->high_school }}
            @endif
            @if ($manpower->vocational!='')
    &emsp;&emsp;    <input type="checkbox" checked> {{ $manpower->primary }}
            @endif
            @if ($manpower->high_vocational!='')
    &emsp;&emsp;    <input type="checkbox" checked> {{ $manpower->high_vocational }}
            @endif
            @if ($manpower->undergraduate!='')
    &emsp;&emsp;    <input type="checkbox" checked> {{ $manpower->undergraduate }}
            @endif
            @if ($manpower->other_education!='')
    &emsp;&emsp;    <input type="checkbox" checked> {{ $manpower->other_education }} 
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="4"><b>ความสามารถพิเศษ/Special Skill :</b> 
            @if ($manpower->foreign_languages!='')
    <br>        <input type="checkbox" checked> {{ $manpower->foreign_languages }} &emsp; {{ $manpower->languages_name }}
            @endif
            @if ($manpower->typing!='')
    <br>        <input type="checkbox" checked> {{ $manpower->typing }} &emsp; {{ $manpower->typing_name }}
            @endif
            @if ($manpower->computer_knowledge!='')
    <br>        <input type="checkbox" checked> {{ $manpower->computer_knowledge }} &emsp; {{ $manpower->knowledge_name }}
            @endif
            @if ($manpower->other_skill!='')
    <br>        <input type="checkbox" checked> {{ $manpower->other_skill }} &emsp; {{ $manpower->other_skill_name }}
            @endif
        </td>
    </tr>
    <tr>
        <td colspan="4"><b>ประสบการณ์/Experience :</b>
            @if ($manpower->inexperience!='')
    <br>        <input type="checkbox" checked> {{ $manpower->inexperience }} 
            @endif
            @if ($manpower->minimum_experience!='')
    <br>        <input type="checkbox" checked> {{ $manpower->minimum_experience }} {{ $manpower->minimum_experience_com }}
            @endif
            @if ($manpower->additional_experience!='')
    <br>        <input type="checkbox" checked> {{ $manpower->additional_experience }} {{ $manpower->additional_com }}
            @endif
            @if ($manpower->other_experience='')
    <br>        <input type="checkbox" checked> {{ $manpower->other_experience }} {{ $manpower->other_experience_com }}
            @endif
        </td>
    </tr>
    <tr>
        <td align="center"><b>ผู้ขอจ้าง/Requested by</b> <br> {{ $manpower->signa1_60 }} <br> ....../....../......</td>
        <td align="center" colspan="2"><b>หัวหน้าส่วนงานสรรหาว่าจ้าง/Sup.HR Recruitmunt</b><br><br> ....../....../......</td>
        <td align="center"><b>ประธานกรรมการ/MD.</b><br><br> ....../....../......</td>
    </tr>
</table>
        </div>
</body>
</html>