<html>

<head>

    <style>
        body {
            font-family: 'examplefont', sans-serif;
            font-size: 18px;
        }

        table {
            border-collapse: collapse;
            width: 100%;
        }

        td,
        th {
            border: 1px solid;
        }
   
    </style>
</head>

<body>
        <h3 style="text-align:center;">  บริษัทในเครือ เอ็น จี จี กรุ๊ป<br>
            <div align="center"><img src=img/NGG-10.jpg style="width:100px;height:100px;"></div>
            ใบสมัครงาน/Job Application From </h3>

     <img src="{{$personal->photo}}" style="width:170px;height:170px;margin-left:15px;float:right;" >
    
     <br><br><br><br>
     <b>วันที่สมัคร : </b>{{$personal->created_at}} <br>
    <b>ตำแหน่งที่ต้องการ/Position Applied for : </b>{{$personal->positionngg}} <br>
    <b>เงินเดือนที่ต้องการ/Expected starting salary : </b>{{$personal->salaryngg}} บาท <br>
    <b>สาขาที่จะสมัคร: </b>{{$personal->talent}}
    
    <table>
        <tbody>
            <tr>
                <td colspan="9" align="center"><b>ประวัติส่วนตัว Personal Background</b></td>
            </tr>
            <tr>
                <td colspan="3"><b>ชื่อ: </b> {{$personal->fronname}} {{$personal->name}} {{$personal->lastname}} <br> <b>ชื่อเล่น:</b> {{$personal->nikname}}</td>
                <td><b>เพศ: </b>{{$personal->gender}} <br>Sex</td>
                <td colspan="2"> <b>วันเกิด:</b> {{$personal->birthday}} <br>Date of Birth</td>
                <td colspan="3"><b>อายุ:</b> {{$personal->age}} <br>Age</td>
            </tr>
            <tr>
                <td colspan="2"><b>เชื้อชาติ:</b> {{$personal->race}} <br>Race</td>
                <td colspan="2"><b>สัญชาติ:</b> {{$personal->nationality}} <br>Nationality</td>
                <td><b>ศาสนา:</b> {{$personal->religion}} <br>Religion</td>
                <td><b>ส่วนสูง:</b> {{$personal->height}} <br>Height</td>
                <td colspan="3"><b>น้ำหนัก: </b>{{$personal->weight}} <br>Weight</td>
            </tr>
            <tr>
                <td colspan="2">
                    <b>  พี่น้องกี่คน:</b> @if($personal->brothers == '') ::ว่าง:: @else {{$personal->brothers}} @endif <br>Brothers
                    & Sisters
                </td>
                <td colspan="2">
                    <b> เป็นคนที่:  </b> @if($personal->number == '') ว่าง @else {{$personal->number}} @endif <br>Number
                </td>
                <td colspan="2"><b>โทรศัพท์สำนักงาน: </b> @if($personal->office == '') ::ว่าง:: @else {{$personal->office}} @endif <br>Office
                </td>
                <td colspan="3"><b>โทรศัพท์บ้าน:</b> {{$personal->home}} <br>Home</td>
            </tr>

            <tr>
                <td colspan="3"><b>โทรศัพท์มือถือ:</b> {{$personal->moblie}} <br>Mobile</td>
                <td colspan="6"><b>อีเมล์:</b> 
                    @if($personal->email == '')
                    {{$personal->email_2}}
                    @else
                    {{$personal->email}}
                     @endif
                     <br>Email</td>
            </tr>
            <tr>
                <td colspan="9"><b>ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก: </b>{{$personal->address1}} <br>Present Address</td>
            </tr>
            <tr>
                <td colspan="9"><b>ที่อยู่ตามบัตรประชาชน:</b>{{$personal->address2}} <br>ID.Address</td>
            </tr>
            <tr>
                <td colspan="3"><b>เลขบัตรประชาชน:</b>{{$personal->idcard}} <br>I.D.Card No.</td>
                <td colspan="3"><b>ออกให้ ณ อำเภอ/เขต: </b>{{$personal->issued}} <br>Issued at</td>
                <td colspan="3"><b>จังหวัด: </b>{{$personal->province_crad}} <br>Province</td>
            </tr>
            <tr>
                <td colspan="2"> <b>วันออกบัตร: </b> {{$personal->issueddate}} <br>Issued date</td>
                <td colspan="2"> <b>บัตรหมดอายุ:</b> {{$personal->expid}} <br>Expired date</td>
                <td colspan="5">
                    <b>บัตรประจำตัวผู้เสียภาษี: </b> @if($personal->idcard =='') ว่าง @else {{$personal->idcard}} @endif
                    <br>Tax I.D. card No.
                </td>
            </tr>
            <tr>
                <td colspan="2"><b>สถานะความเป็นอยู่:</b>{{$personal->living_status}} <br>Living Status</td>
                <td colspan="2"><b>สถานะครอบครัว:</b>{{$personal->marital_status}} <br>Marital Status</td>
                <td colspan="2">
                    <b> กรณีแต่งงาน:</b> @if($personal->if_marricd =='') ว่าง @else {{$personal->if_marricd}} @endif <br>If
                    married
                </td>
                <td colspan="3">
                    <b> คู่มสมรส:  </b> @if($personal->spouse =='') ว่าง @else {{$personal->spouse}} @endif <br>Spouse has
                    any income
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <b> ชื่อสมรส:</b> @if($personal->name_spouse =='') ว่าง @else {{$personal->name_spouse}} @endif <br>Spouse's
                    name
                </td>
                <td colspan="2">
                    <b>  อาชีพคู่สมรส:</b> @if($personal->spouse_occupation =='') ว่าง @else {{$personal->spouse_occupation}}
                    @endif <br>Spouse's Occupation
                </td>
                <td colspan="5">
                    <b>  สถานที่ทำงาน: </b> @if($personal->firm_address =='') ว่าง @else {{$personal->firm_address}} @endif
                    <br>Firm Address
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <b>  โทรศัพท์: </b> @if($personal->spouse_tel =='') ว่าง @else {{$personal->spouse_tel}} @endif <br>Telephone
                </td>
                <td colspan="2">
                    <b>   จำนวนบุตรทั้งหมด :</b> @if($personal->children =='') ว่าง @else {{$personal->children}} @endif
                    <b>คน</b> <br>All No.of/Children
                </td>
                <td colspan="2">
                    <b>  หญิง : </b> @if($personal->girls =='') ว่าง @else {{$personal->girls}} @endif <b>คน</b><br>Girls
                </td>
                <td colspan="3">
                    <b>   ชาย:  </b> @if($personal->boy =='') ว่าง @else {{$personal->boy}} @endif
                    <b>คน</b> <br>Boys
                </td>
            </tr>
            <tr>
                <td colspan="3">
                    <b> จำนวนบุตรกำลังศึกษา : </b> @if($personal->school =='') ว่าง @else {{$personal->school}} @endif <b>คน</b><br>Children
                    in school
                </td>
                <td colspan="2">
                    <b>  จำนวนบุตรที่อายุเกิน21ปี : </b> @if($personal->over21 =='') ว่าง @else {{$personal->over21}} @endif
                    <b>คน</b><br>Children over 21 years
                </td>
                <td colspan="4">
                    <b>   สถานะทางทหาร:  </b> @if($personal->military_service =='') ว่าง @else {{$personal->military_service}}
                    @endif <br>Military Service
                </td>
            </tr>
            <tr>
                <td colspan="3"><b> ชื่อบิดา:</b> {{$personal->namefather}} {{$personal->lastfather}}<br>Father's name</td>
                <td colspan="3"><b> อาชีพ:</b> {{$personal->occupation_father}}<br>Occupation</td>
                <td colspan="3"><b> สถานะ:</b> {{$personal->alivef}}<br>Status</td>
            </tr>
            <tr>
                <td colspan="3"><b> ชื่อมารดา:</b> {{$personal->namemother}} {{$personal->lasrmother}} <br>Mother's name</td>
                <td colspan="3"><b> อาชีพ:</b> {{$personal->occupationm}} <br>Occupation</td>
                <td colspan="3"><b> สถานะ:</b>{{$personal->alivem}} <br>Status</td>
            </tr>
        </tbody>
    </table>
   
    <table>
        <tbody>
            <tr>
                <td colspan="9" align=center><b>ประวัติการศึกษา Educational Background</b></td>
            </tr>
            <thead>
                <tr>
                    <th align=center>ระดับการศึกษา <br>Education</th>
                    <th colspan="3" align=center>ชื่อสถาบัน <br>Name of Institute</th>
                    <th align=center>เริ่มปีการศึกษา <br>From</th>
                    <th align=center>จบปีการศึกษา <br>To</th>
                    <th align=center>เกรดเฉลี่ย <br>GPA</th>
                    <th align=center>สาขา <br>Major</th>
                    <th align=center>วุฒิที่ได้รับ <br>Degree</th>
                </tr>
            </thead>
            <tr>
                <td>ประถมศึกษา/Primary</td>
                <td colspan="3">{{$personal->primary}}</td>
                <td>{{$personal->year1}}</td>
                <td>{{$personal->year2}}</td>
                <td>{{$personal->gpa}}</td>
                <td>{{$personal->major}}</td>
                <td>{{$personal->degree1}}</td>
            </tr>
            <tr>
                <td>มัธยมศึกษา/Secondary</td>
                <td colspan="3">{{$personal->secondary}}</td>
                <td>{{$personal->year3}}</td>
                <td>{{$personal->year4}}</td>
                <td>{{$personal->gpas}}</td>
                <td>{{$personal->majors}}</td>
                <td>{{$personal->degree2}}</td>
            </tr>
            <tr>
                <td>อาชีวะศึกษา/Vocation</td>
                <td colspan="3">{{$personal->vocation}}</td>
                <td>{{$personal->year5}}</td>
                <td>{{$personal->year6}}</td>
                <td>{{$personal->gpav}}</td>
                <td>{{$personal->majorv}}</td>
                <td>{{$personal->degree3}}</td>
            </tr>
            <tr>
                <td>อนุปริญญา/Diploma</td>
                <td colspan="3">{{$personal->diploma}}</td>
                <td>{{$personal->year7}}</td>
                <td>{{$personal->year8}}</td>
                <td>{{$personal->gpad}}</td>
                <td>{{$personal->majord}}</td>
                <td>{{$personal->degree4}}</td>
            </tr>
            <tr>
                <td>ปริญญาตรี/Bachelor</td>
                <td colspan="3">{{$personal->bachelor }}</td>
                <td>{{ $personal->year9 }}</td>
                <td>{{ $personal->year10 }}</td>
                <td>{{$personal->gpab }}</td>
                <td>{{$personal->majorb }}</td>
                <td>{{$personal->degree5 }}</td>
            </tr>
            <tr>
                <td>ปริญญาโท/Master</td>
                <td colspan="3">{{$personal->master}}</td>
                <td>{{$personal->year11}}</td>
                <td>{{$personal->year12}}</td>
                <td>{{$personal->gpam}}</td>
                <td>{{$personal->majorm}}</td>
                <td>{{$personal->degree6}}</td>
            </tr>
            <tr>
                <td>อื่นๆ/Other</td>
                <td colspan="3">{{$personal->otherE}}</td>
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
            <th colspan="8" align=center>ภาษา Languages</th>
        </tr>
        <tbody>
            <tr>
                <td colspan="2" align=center><b>ประเภทภาษา</b></td>
                <td colspan="2" align=center><b>การพูด Speaking</b></td>
                <td colspan="2" align=center><b>การเข้าใจ Understanding</b></td>
                <td colspan="2" align=center><b>การเขียน Writing</b></td>
            </tr>

            <tr>
                <td colspan="2">ไทย Thai</td>
                <td colspan="2">{{$personal->thais}}</td>
                <td colspan="2">{{$personal->thail}}</td>
                <td colspan="2">{{$personal->thair}}</td>
            </tr>
            <tr>
                <td colspan="2">อังกฤษ English</td>
                <td colspan="2">{{$personal->engliss}}</td>
                <td colspan="2">{{$personal->englisl}}</td>
                <td colspan="2">{{$personal->englisr}}</td>
            </tr>
            <tr>
                <td colspan="2">อื่นๆ Other{{$personal->otherr}}</td>
                <td colspan="2">{{$personal->othes}}</td>
                <td colspan="2">{{$personal->othel}}</td>
                <td colspan="2">{{$personal->other}}</td>
            </tr>
        </tbody>
    </table>
    <table>
        <tbody>
            <tr>
                <th colspan="8" align="center">ประวัติการทำงาน Employment History</th>
            </tr>
            <tr>
                <th align="center">ชื่อสถานประกอบการ<br>List of Employed</th>
                <th align="center">ลักษณะงานที่รับผิดชอบ</th>
                <th align="center">โทร Tel.</th>
                <th align="center">ระยะงานเริ่ม Form</th>
                <th align="center">ระยะงานสิ้นสุด To</th>
                <th align="center">ตำแหน่ง Position</th>
                <th align="center">สาเหตุที่ออก Reason Leaving</th>
                <th align="center">เงินเดือนครั้งสุดท้าย <br> Last Salary</th>
            </tr>
            <tr>
                <td>
                    @if($personal->list_of_employed1 =='') ว่าง @else {{$personal->list_of_employed1}} @endif
                </td>
                <td>
                    @if($personal->job_description1 =='') - @else {{$personal->job_description1}} @endif
                </td>
                <td>
                    @if($personal->call1 =='') - @else {{$personal->call1}} @endif
                </td>
                <td>
                    @if($personal->start_job_duration1 =='') - @else {{$personal->start_job_duration1}} @endif
                </td>
                <td>
                    @if($personal->end_job_duration2 =='') - @else {{$personal->end_job_duration2}} @endif
                </td>
                <td>
                    @if($personal->position1 =='') - @else {{$personal->position1}} @endif
                </td>
                <td>
                    @if($personal->reasonLeaving1 =='') - @else {{$personal->reasonLeaving1}} @endif
                </td>
                <td>
                    @if($personal->lastsalary1 =='') - @else {{$personal->lastsalary1}} @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if($personal->list_of_employed2 =='') - @else {{$personal->list_of_employed2}} @endif
                </td>
                <td>
                    @if($personal->job_description2 =='') - @else {{$personal->job_description2}} @endif
                </td>
                <td>
                    @if($personal->call2 =='') - @else {{$personal->call2}} @endif
                </td>
                <td>
                    @if($personal->start_job_duration3 =='') - @else {{$personal->start_job_duration3}} @endif
                </td>
                <td>
                    @if($personal->end_job_duration4 =='') - @else {{$personal->end_job_duration4}} @endif
                </td>
                <td>
                    @if($personal->position2 =='') - @else {{$personal->position2}} @endif
                </td>
                <td>

                    @if($personal->reasonLeaving2 =='') - @else {{$personal->reasonLeaving2}} @endif
                </td>
                <td>
                    @if($personal->lastsalary2 =='') - @else {{$personal->lastsalary2}} @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if($personal->list_of_employed3 =='') - @else {{$personal->list_of_employed3}} @endif
                </td>
                <td>

                    @if($personal->job_description3 =='') - @else {{$personal->job_description3}} @endif
                </td>
                <td>

                    @if($personal->call3 =='') - @else {{$personal->call3}} @endif
                </td>
                <td>
                    @if($personal->start_job_duration5 =='') - @else {{$personal->start_job_duration5}} @endif
                </td>
                <td>
                    @if($personal->end_job_duration6 =='') - @else {{$personal->end_job_duration6}} @endif
                </td>
                <td>

                    @if($personal->position3 =='') - @else {{$personal->position3}} @endif
                </td>
                <td>
                    @if($personal->reasonLeaving3 =='') - @else {{$personal->reasonLeaving3}} @endif
                </td>
                <td>
                    @if($personal->lastsalary3 =='') - @else {{$personal->lastsalary3}} @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if($personal->list_of_employed4 =='') - @else {{$personal->list_of_employed4}} @endif
                </td>
                <td>

                    @if($personal->job_description4 =='') - @else {{$personal->job_description4}} @endif
                </td>
                <td>

                    @if($personal->call4 =='') - @else {{$personal->call4}} @endif
                </td>
                <td>
                    @if($personal->start_job_duration7 =='') - @else {{$personal->start_job_duration7}} @endif
                </td>
                <td>
                    @if($personal->end_job_duration8 =='') - @else {{$personal->end_job_duration8}} @endif
                </td>
                <td>

                    @if($personal->position4 =='') - @else {{$personal->position4}} @endif
                </td>
                <td>
                    @if($personal->reasonLeaving4 =='') - @else {{$personal->reasonLeaving4}} @endif
                </td>
                <td>
                    @if($personal->lastsalary4 =='') - @else {{$personal->lastsalary4}} @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if($personal->list_of_employed5 =='') - @else {{$personal->list_of_employed5}} @endif
                </td>
                <td>

                    @if($personal->job_description5 =='') - @else {{$personal->job_description5}} @endif
                </td>
                <td>

                    @if($personal->call5 =='') - @else {{$personal->call5}} @endif
                </td>
                <td>
                    @if($personal->start_job_duration9 =='') - @else {{$personal->start_job_duration9}} @endif
                </td>
                <td>
                    @if($personal->end_job_duration10 =='') - @else {{$personal->end_job_duration10}} @endif
                </td>
                <td>

                    @if($personal->position5 =='') - @else {{$personal->position5}} @endif
                </td>
                <td>
                    @if($personal->reasonLeaving5 =='') - @else {{$personal->reasonLeaving5}} @endif
                </td>
                <td>
                    @if($personal->lastsalary5 =='') - @else {{$personal->lastsalary5}} @endif
                </td>
            </tr>
            <tr>
                <td>
                    @if($personal->list_of_employed6 =='') - @else {{$personal->list_of_employed6}} @endif
                </td>
                <td>

                    @if($personal->job_description6 =='') - @else {{$personal->job_description6}} @endif
                </td>
                <td>

                    @if($personal->call3 =='') - @else {{$personal->call3}} @endif
                </td>
                <td>
                    @if($personal->start_job_duration11 =='') - @else {{$personal->start_job_duration11}} @endif
                </td>
                <td>
                    @if($personal->end_job_duration12 =='') - @else {{$personal->end_job_duration12}} @endif
                </td>
                <td>

                    @if($personal->position6 =='') - @else {{$personal->position6}} @endif
                </td>
                <td>
                    @if($personal->reasonLeaving6 =='') - @else {{$personal->reasonLeaving6}} @endif
                </td>
                <td>
                    @if($personal->lastsalary6 =='') - @else {{$personal->lastsalary6}} @endif
                </td>
            </tr>
        </tbody>
    </table>

    <table>
        <tbody>
            <tr>
                <th colspan="8" align=center>อื่นๆ</th>
            </tr>
            <tr>
                <td align=center colspan="2"><b>บุคคลที่ไม่ใช่ญาติที่ติดต่อได้</b> <br>Name</td>
                <td align=center><b>เกี่ยวข้องเป็น</b> <br>Relationship</td>
                <td align=center colspan="2"><b>สถานที่ทำงาน/ที่อยู่</b> <br>Firm Address</td>
                <td align=center><b>โทร</b> <br>Telephone</td>
                <td align=center colspan="2"><b>ตำแหน่ง</b> <br>Position</td>
            </tr>
            <tr>
                <td colspan="2">{{$personal->namecm}}</td>
                <td>{{$personal->lastnamecm}}</td>
                <td colspan="2">{{$personal->firm}}</td>
                <td>{{$personal->telecm}}</td>
                <td colspan="2">{{$personal->positioncm}}</td>
            </tr>
            <tr>
                <td colspan="2"><b>ความรู้พิเศษ</b><br>Special Ability</td>
                <td colspan="6"><b>คอมพิวเตอร์ ระบุ : </b>{{$personal->computer}} <br><b>อื่นๆ :</b> {{$personal->fax}} {{$personal->typewriter}}
                    {{$personal->dot}} คำ/นาที</td>
            </tr>
            <tr>
                <td colspan="5"><b>ในตำแหน่งที่ต้องการต้องมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ) : </b> @if ($personal->crash1 =='ขัดข้อง')
                    {{$personal->crash1}} @else {{$personal->crash1}}
                    <b> ชื่อ: </b>{{$personal->compd}} @endif <br>Can you provide a guaranty?
                </td>
                <td colspan="3"><b>สถานที่ทำงาน :</b>{{$personal->compa}}</td>
            </tr>
            <tr>
                <td colspan="8"><b>ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป :</b> {{$personal->crash2}} <br>Can you work shift by shift?</td>
            </tr>
            <tr>
                <td colspan="5"><b>ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม :</b> {{$personal->crash3}} <br>Can you rotate work position?</td>
                <td colspan="3"><b>ท่านสามารถขับรถยนต์ได้หรือไม่ :</b> {{$personal->yes}} <br>Can you drive?</td>
            </tr>
            <tr>
                <td colspan="5"><b>บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ</b> {{$personal->workk}} <br>Relative or friend working in this
                    company</td>
                <td colspan="3"><b>ท่านมีรถยนต์ส่วนตัวหรือไม่ :</b> {{$personal->owncar}} <br>Do you own a car?</td>
            </tr>
            <tr>
                <td colspan="2"><b>ท่านพร้อมทำปฏิบัติงานวันที่ :</b> {{$personal->dateworkk}} <br>Date available to start work</td>
                <td colspan="3"><b>ท่านเป็นเจ้าของรถประเภทใด :</b> {{$personal->cardec}} <br>What type of vehicle do you own?</td>
                <td colspan="3"><b>ทะเบียน :</b> {{$personal->license}} <br>License</td>
            </tr>
            <tr>
                <td colspan="8"><b>ท่านเคยให้ถูกออกจากงานหรือไม่ : </b> @if($personal->exitwork =='ไม่เคย') {{$personal->exitwork}} @else
                    {{$personal->exitwork}} <b>  เพราะ </b> {{$personal->lastsalary3}} @endif <br>Have you ever been discharged
                    from employment for any reason? <br>
                    <b>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่? : </b>{{$personal->serious_ill}} <br>Have you ever
                    been seriously ill or contracted with contagious disease? <br>
                    <b>ท่านเคยไดรับโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่? :</b> {{$personal->offense}} <br>Have
                    you ever been arrested of convicted for any offense or crime or bankrupt? <br>
                    <b>ขณะนี้คุณตั้งครรภ์หรือไม่? :</b>{{$personal->pregnant}} <br>Are you pregnant? <br>
                    <b>ทราบข่าวสารการสมัครงานจากที่ใด :</b>{{$personal->knowfrom}} &nbsp;&nbsp;
                        @if ($personal->because2 !='')
                        อื่นๆ :{{ $personal->because2 }}      
                        @else
                        -  
                        @endif <br>
                    <b>ชื่อผู้ติดต่อ กรณีฉุกเฉิน :</b> {{ $personal->contact_name }} &nbsp;&nbsp;&nbsp;&nbsp; <b>ความสัมพันธ์ :</b> {{ $personal->contact_firm }} &nbsp;&nbsp;&nbsp;&nbsp; <b>ที่อยู่ :</b> {{ $personal->contact_address }} &nbsp;&nbsp;&nbsp;&nbsp; <b>โทร :</b> {{ $personal->contact_tel }}
                </td>
            </tr>
        </tbody>
    </table>

</body>

</html>