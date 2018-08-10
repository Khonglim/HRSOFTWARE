@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
               
        <div class="content container-fluid">  

                <h2 class="page-header">ข้อมูลของ {{$personal->name}}  {{$personal->lastname}} </h2>
          
                <div class="row">
                  {{-- <div class="col-md-10"> --}}
                    <!-- Custom Tabs -->
                    <div class="nav-tabs-custom">
                      <ul class="nav nav-tabs">
                        <li class="active"><a href="#tab_1" data-toggle="tab">ประวัติส่วนตัว</a></li>
                        <li><a href="#tab_2" data-toggle="tab">ประวัติการศึกษา</a></li>
                        <li><a href="#tab_3" data-toggle="tab">ภาษา</a></li>
                        <li><a href="#tab_4" data-toggle="tab">ประวัติการทำงาน</a></li>
                        <li><a href="#tab_5" data-toggle="tab">อื่นๆ</a></li>
                       
                        <li class="pull-right"><a href="#" class="text-muted"><i class="fa fa-gear"></i></a></li>
                      </ul>
                      <div class="tab-content">
                        <div class="tab-pane active" id="tab_1">
                               
                                        <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}" >
                                                <img src="{{URL::asset($personal->photo)}}" height="85" width="85" >
                                            </div>  
                                     </div> 
                            
                                {{Form::label('ชื่อ:')}} {{$personal->name}} {{$personal->lastname}}&emsp;{{Form::label('ชื่อเล่น:')}} {{$personal->nikname}}           
                                &emsp;{{Form::label('เพศ:')}}  {{$personal->gender}}&emsp;{{Form::label('วันเกิด')}} {{$personal->birthday}}&emsp;  
                                {{Form::label('สัญชาติ:')}} {{$personal->nationality}}&emsp; {{Form::label('เชื้อชาติ:')}} {{$personal->race}}                  
                                &emsp;{{Form::label('ศาสนา:')}} {{$personal->religion}}&emsp;{{Form::label('อายุ:')}} {{$personal->age}}     
                                &emsp;{{Form::label('ส่วนสูง:')}} {{$personal->height}}
                                
                                <br><br>
                                {{Form::label('น้ำหนัก:')}} {{$personal->height}} 
                                &emsp;{{Form::label('พี่น้องกี่คน:')}} 

                                @if($personal->brothers == '')
                                ::ว่าง::
                                @else
                                {{$personal->brothers}}
                                @endif
                                &emsp; 
                                {{Form::label('เป็นคนที่:')}}  
                                @if($personal->number == '')
                                ว่าง
                                @else
                                {{$personal->number}}
                                @endif
                                &emsp; 
                                {{Form::label('โทรศัพท์บ้าน:')}} {{$personal->home}} &emsp;  {{Form::label('โทรศัพท์มือถือ:')}} {{$personal->moblie}}              
                                &emsp; {{Form::label('โทรศัพท์สำนักงาน:')}}           
                                @if($personal->office == '')
                                ::ว่าง::
                                @else
                                {{$personal->office}}
                                @endif 
                                <br><br> 
                               
                                {{Form::label('อีเมล:')}}  {{$personal->email}} 
                                &emsp;  
                                {{Form::label("ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก:")}} {{$personal->address1}}           
                                <br><br>  
                                {{Form::label("ที่อยู่ตามบัตรประชาชน:")}} {{$personal->address2}}      
                                &emsp; 
                                {{Form::label("เลขบัตรประชาชน:")}} {{$personal->idcard}}           
                                &emsp;        
                                {{Form::label("ออกให้ ณ อำเภอ/เขต:")}} {{$personal->issued}}         
                                &emsp;
                                {{Form::label("จังหวัด:")}} {{$personal->province_crad}}  
                                <br><br> 
                                {{Form::label("วันออกบัตร:")}} {{$personal->issueddate}}         
                                &emsp;
                                {{Form::label("บัตรหมดอายุ:")}} {{$personal->expid}}              
                                &emsp;  
                                {{Form::label("บัตรประจำตัวผู้เสียภาษี:")}} 
                                @if($personal->texid =='')
                                ว่าง
                                @else
                               {{$personal->texid}}
                                @endif 
                                &emsp;         
                                {{Form::label("สถานะความเป็นอยู่:")}} {{$personal->living_status}}           
                                &emsp;   
                                {{Form::label("สถานะครอบครัว:")}} {{$personal->marital_status}}   
                                &emsp;   
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
                                &emsp;
                                {{Form::label("ชื่อสมรส:")}}
                                @if($personal->name_spouse =='')
                                ว่าง
                                @else
                                {{$personal->name_spouse}}
                                @endif 

                                &emsp;
                                {{Form::label("อาชีพคู่สมรส:")}}
                                @if($personal->spouse_occupation =='')
                                ว่าง
                                @else
                                {{$personal->spouse_occupation}}
                                @endif

                                &emsp;

                                {{Form::label("สถานที่ทำงาน:")}}
                                @if($personal->firm_address =='')
                                ว่าง
                                @else
                                {{$personal->firm_address}}
                                @endif

                                &emsp;
                                
                                {{Form::label("โทรศัพท์:")}}
                                @if($personal->spouse_tel =='')
                                ว่าง
                                @else
                                {{$personal->spouse_tel}}
                                @endif

                                &emsp;

                                {{Form::label("จำนวนบุตรทั้งหมด:")}}
                                @if($personal->children =='')
                                ว่าง
                                @else
                                {{$personal->children}}
                                @endif

                                &emsp;

                                {{Form::label("หญิง:")}}
                                @if($personal->girls =='')
                                ว่าง
                                @else
                                {{$personal->girls}}
                                @endif
                                &emsp;

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

                                &emsp;

                                {{Form::label("จำนวนบุตรที่อายุเกิน21ปี:")}}
                                @if($personal->over21 =='')
                                ว่าง
                                @else
                                {{$personal->over21}}
                                @endif

                                &emsp;

                                {{Form::label("สถานะทางทหาร:")}}
                                @if($personal->military_service =='')
                                ว่าง
                                @else
                                {{$personal->military_service}}
                                @endif

                                &emsp;

                                {{Form::label("สถานะทางทหาร:")}}
                                @if($personal->military_service =='')
                                ว่าง
                                @else
                                {{$personal->military_service}}
                                @endif
                                <br><br> 

                                {{Form::label("ชื่อบิดา:")}}
                                {{$personal->namefather}}  
                                &emsp;
                                {{Form::label("นามสกุล:")}}
                                {{$personal->lastfather}}  
                                &emsp;
                                {{Form::label("อาชีพ:")}}
                                {{$personal->occupation_father}} 
                                &emsp;
                                {{Form::label("สถานะ")}}
                                {{$personal->alivef}}       

                                <br><br> 

                                {{Form::label("ชื่อมารดา:")}}
                                {{$personal->namemother}}
                                &emsp;
                                {{Form::label("นามสกุล:")}}
                                {{$personal->lasrmother}}  
                                &emsp;
                                {{Form::label("อาชีพ:")}}
                                {{$personal->occupationm}} 
                                &emsp;
                                {{Form::label("สถานะ:")}}
                                {{$personal->alivem}}     

                                       
                              </div>
                       
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_2">
                                <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>ระดับการศึกษา</th>
                                                    <th>ชื่อสถาบัน</th>
                                                    <th>เริ่มปีการศึกษา</th>
                                                    <th>จบปีการศึกษา</th>
                                                    <th>เกรดเฉลี่ย</th>
                                                    <th>สาขา</th>
                                                    <th>วุฒที่ได้รับ</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr >
                                                    <td align="center" >ประถมศึกษา</td>
                                                    <td align="center"> 
                                                                @if($personal->primary =='')
                                                                -
                                                                @else
                                                                {{$personal->primary}}
                                                                @endif
                                                
                                                
                                                </td>
                                                    <td align="center"> 
                                                         @if($personal->year1 =='')
                                                               -
                                                                @else
                                                                {{$personal->year1}}
                                                                @endif

                                                       
                                                        </td>
                                                        <td align="center">
                                                        @if($personal->year2 =='')
                                                                       -
                                                         @else
                                                                {{$personal->year2}}
                                                         @endif


                                                       
                                                        </td>
                                                    <td align="center">
                                                     @if($personal->gpa =='')
                                                                -
                                                     @else
                                                        {{$personal->gpa}}
                                                     @endif

                                                    </td>
                                                    <td align="center">
                                                @if($personal->major =='')
                                                   -
                                                @else
                                                 {{$personal->major}}
                                                 @endif             
                                                </td>
                                              <td align="center">
                                                @if($personal->degree1 =='')

                                                        -
                                                 @else
                                                    {{$personal->degree1}}
                                                 @endif     
                                        </td>
                                                  </tr>
                                                  <tr>
                                                        <td align="center">มัธยมศึกษา</td>
                                                        <td align="center">
                                                        @if($personal->secondary =='')

                                                                        -
                                                                 @else
                                                                    {{$personal->secondary}}
                                                                 @endif     
                                                                
                                                        </td>
                                                        <td align="center"> 
                                                         @if($personal->year3 =='')

                                                                        -
                                                                 @else
                                                                    {{$personal->year3}}
                                                                 @endif     
                                                                
                                                      
                                                        </td>
                                                        <td align="center">
                                                        @if($personal->year4 =='')
                                                                -
                                                                 @else
                                                                    {{$personal->year4}}
                                                                 @endif    
                                                        </td>
                                                        <td align="center"> 
                                                                        @if($personal->gpas =='')

                                                                       -
                                                                 @else
                                                                    {{$personal->gpas}}
                                                                 @endif       
                                                        
                                                        </td>
                                                        <td align="center"> 
                                                             @if($personal->majors =='')
                                                               -
                                                                 @else
                                                                    {{$personal->majors}}
                                                                 @endif                
                                                               </td>
                                                        <td align="center">
                                                                @if($personal->degree2 =='')
                                                                -
                                                                 @else
                                                                {{$personal->degree2}}
                                                                @endif     
                                                                
                                                        </td>
                                                  </tr>
                
                                                  <tr>
                                                        <td align="center">อาชีวะศึกษา</td>
                                                        <td align="center">
                                                                        @if($personal->vocation =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->vocation}}
                                                                       @endif     
                                                                       
                                                                
                                                        
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->year5 =='')
                                                                       -
                                                                        @else
                                                                       {{$personal->year5}}
                                                                       @endif   
                                                       
                                                        </td>
                                                        <td align="center"> 
                                                                        @if($personal->year6 =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->year6}}
                                                                       @endif  
                                                                           
        
                                                        </td>
                                                        <td align="center">
                                                                
                                                        @if($personal->gpav =='')
                                                        -
                                                        @else
                                                        {{$personal->gpav}}
                                                        @endif      
                                                        
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->majorv =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->majorv}}
                                                                        @endif    
                                                        
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->degree3 =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->degree3}}
                                                                        @endif 
                                                        
                                                        </td>
                                                  </tr>
                
                                                  <tr>
                                                        <td  align="center">อนุปริญญา</td>
                                                        <td align="center">
                                                                        @if($personal->diploma =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->diploma}}
                                                                        @endif   
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->year7 =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->year7}}
                                                                        @endif      
                                                       
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->year8 =='')
                                                                       -
                                                                        @else
                                                                        {{$personal->year8}}
                                                                        @endif 
                                                       
                                                        </td>
                                                        <td align="center">
                                                                        
                                                                        @if($personal->gpad =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->gpad}}
                                                                        @endif     
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->majord =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->majord}}
                                                                        @endif 
                                                                
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->degree4 =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->degree4}}
                                                                        @endif 
                                                               
                                                        
                                                        </td>
                                                  </tr>
                
                
                                                  <tr>
                                                        <td align="center">ปริญญาตรี</td>
                                                        <td align="center" >
                                                                        @if($personal->bachelor =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->bachelor}}
                                                                        @endif 
                                                               
                                                                
                                                        
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->year9 =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->year9}}
                                                                        @endif 
                                                                       
                                                        </td>
                                                        <td align="center"> 
                                                                        @if($personal->year10 =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->year10}}
                                                                        @endif 
                                                               
                                                        
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->gpab =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->gpab}}
                                                                        @endif    
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->majorb =='')
                                                                       -
                                                                        @else
                                                                        {{$personal->majorb}}
                                                                        @endif 
                                                               
                                                        </td>
                                                        <td align="center">
                                                               
                                                                        @if($personal->degree5 =='')
                                                                        -
                                                                        @else
                                                                        {{$personal->degree5}}
                                                                        @endif
                                                                
                                                        </td>
                                                  </tr>
                
                                              
                
                                                  <tr>
                                                        <td  align="center">ปริญญาโท</td>
                                                        <td align="center">
                                                       @if($personal->master =='')
                                                         -
                                                        @else
                                                       {{$personal->master}}
                                                         @endif 
                                                        </td>
                                                        <td align="center">

                                                        @if($personal->year11 =='')
                                                         -
                                                         @else
                                                        {{$personal->year11}}
                                                        @endif  

                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->year12 =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->year12}}
                                                                       @endif
                                                                        
                                                        </td>
                                                        <td align="center">
                                                                
                                                                      @if($personal->gpam =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->gpam}}
                                                                       @endif
                                                                
                                                        
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->majorm =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->majorm}}
                                                                       @endif 
                                                                
                                                                </td>
                                                        <td align="center">
                                                                        @if($personal->degree6 =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->degree6}}
                                                                       @endif  
                                                        
                                                        
                                                        </td>
                                                  </tr>
                
                
                                                  <tr>
                                                        <td align="center">อื่นๆ</td>
                                                        <td align="center"> 
                                                                        @if($personal->otherE =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->otherE}}
                                                                       @endif  
                                                              
                                                        
                                                        </td>
                                                        <td align="center"> 
                                                                        @if($personal->year13 =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->year13}}
                                                                       @endif          
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->year1 =='')
                                                                       -
                                                                        @else
                                                                       {{$personal->year1}}
                                                                       @endif     
                                                                       
                                                        </td>
                                                        <td align="center">
                                                                
                                                                        @if($personal->gpao =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->gpao}}
                                                                       @endif     
                                                                       
                                                              
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->majoro =='')
                                                                       -
                                                                        @else
                                                                       {{$personal->majoro}}
                                                                       @endif 
                                                              
                                                        
                                                        </td>
                                                        <td align="center">
                                                                        @if($personal->degree7 =='')
                                                                        -
                                                                        @else
                                                                       {{$personal->degree7}}
                                                                       @endif       
                                                        </td>
                                                  </tr>
                                                </tbody>
                                        </table>
                                </div>
                        </div>
                        <!-- /.tab-pane -->
                        <div class="tab-pane" id="tab_3">
                                <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>ประเภทภาษา</th>
                                                    <th>การพูด</th>
                                                    <th>การเข้าใจ</th>
                                                    <th>การเขียน</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td>ไทย</td>
                                                    <td>
                                                         {{$personal->thais}}  
                                                        </td>
                                                    <td>
                                                       
                                                         {{$personal->thail}} 
                                                        
                                                        </td>
                                                    <td>
                                                        
                                                {{$personal->thair}} 
                                            
                                                  </tr>
                                                  <tr>
                                                    <td>อังกฤษ</td>
                                                    <td>
                                                        {{$personal->engliss}} 
                                                        </td>
                                                    <td>
                                                        {{$personal->englisl}}     
                                                    <td>
                                                         {{$personal->englisr}}     
                                                        
                                                        </td>
                                                  </tr>
                                                  <tr>
                                                    <td>อื่นๆ {{$personal->otherr}}</td>
                                                    <td>
                                                                {{$personal->othes}}
                                                          
                                                        </td>
                                                    <td>
                                                         {{$personal->othel}}
                                                        </td>
                                                    <td>
                                                                {{$personal->other}} 
                                                            
                                                        </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                        </div> 
                        </div>

                        <div class="tab-pane" id="tab_4">
                                <div class="box-body table-responsive no-padding">
                                        <table class="table table-bordered">
                                                <thead>
                                                  <tr>
                                                    <th>ชื่อสถานที่ประกอบการ</th>
                                                    <th>ลักษณะงานที่รับผิดชอบ</th>
                                                    <th>โทร</th>
                                                    <th>ระยะงานเริ่ม</th>
                                                    <th>ระยะงานสิ้นสุด</th>
                                                    <th>ตำแหน่ง</th>
                                                    <th>สาเหตุที่ออก</th>
                                                    <th>เงินเดือนครั้งสุดท้าย</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                  <tr>
                                                    <td> 
                                                
                                                                @if($personal->list_of_employed1 == '')
                                                                  -
                                                                @else
                                                                {{$personal->list_of_employed1 }}
                                                                @endif
                                                
                                                </td>
                                                    <td> 
                                                              @if($personal->job_description1 == '')
                                                                -
                                                              @else
                                                              {{$personal->job_description1 }}
                                                              @endif
                                                
                                                </td>
                                                    <td> 
                                                             @if($personal->call1 == '')
                                                                -
                                                              @else
                                                              {{$personal->call1 }}
                                                              @endif
                                                
                                                </td>
                                                    <td>
                                                             @if($personal->start_job_duration1 == '')
                                                                -
                                                              @else
                                                              {{$personal->start_job_duration1 }}
                                                              @endif
                                                
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->end_job_duration2 == '')
                                                                -
                                                              @else
                                                              {{$personal->end_job_duration2 }}
                                                              @endif   
                                                        
                                                        
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->position1 == '')
                                                                -
                                                              @else

                                                              {{$personal->position1 }}

                                                              @endif  
                                                              
                                                              
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->reasonLeaving1 == '')
                                                                -
                                                              @else

                                                              {{$personal->reasonLeaving1 }}

                                                              @endif      
                                                      
                                                
                                                </td>
                                                    <td> 
                                                            
                                                        @if($personal->lastsalary1 == '')
                                                                -
                                                              @else

                                                              {{$personal->lastsalary1 }}

                                                              @endif 
                                                      
                                                
                                                </td>
                                                  </tr>
                                                  <tr>
                                                    <td> 
                                                                @if($personal->list_of_employed2 == '')
                                                                -
                                                              @else

                                                              {{$personal->list_of_employed2}}

                                                              @endif 
                                                       
                                                
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->job_description2 == '')
                                                                -
                                                              @else

                                                              {{$personal->job_description2}}

                                                              @endif    
                                                       
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->call2 == '')
                                                                -
                                                              @else

                                                              {{$personal->call2}}

                                                              @endif    
                                                       
                                                
                                                </td>
                                                    <td> 
                                                            
                                                                @if($personal->start_job_duration3 == '')
                                                                -
                                                              @else

                                                              {{$personal->start_job_duration3}}

                                                              @endif    
                                                        
                                                       
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->end_job_duration4 == '')
                                                                -
                                                              @else

                                                              {{$personal->end_job_duration4}}

                                                              @endif       
                                                        
                                                     
                                                
                                                </td>
                                                    <td> 
                                                        
                                                                @if($personal->position2 == '')
                                                                -
                                                              @else

                                                              {{$personal->position2}}

                                                              @endif        
                                                        
                                                        
                                                       
                                                
                                                </td>
                                                    <td>
                                                                @if($personal->reasonLeaving2 == '')
                                                                -
                                                              @else

                                                              {{$personal->reasonLeaving2}}

                                                              @endif        
                                                
                                                </td>
                                                    <td> 
                                                            
                                                                @if($personal->lastsalary2 == '')
                                                                -
                                                              @else

                                                              {{$personal->lastsalary2}}

                                                              @endif  
                                                        
                                                
                                                </td>
                                                  </tr>
                                                  <tr>
                                                    <td> 
                                                
                                                                @if($personal->list_of_employed3 == '')
                                                                -
                                                              @else

                                                              {{$personal->list_of_employed3}}

                                                              @endif  
                                                
                                                
                                                </td>
                                                    <td> 
                                                
                                                                @if($personal->job_description3 == '')
                                                                -
                                                              @else

                                                              {{$personal->job_description3}}

                                                              @endif  
                                                
                                                
                                                
                                                
                                                
                                                
                                                </td>
                                                    <td> 
                                                
                                                        @if($personal->call3 == '')
                                                                -
                                                              @else

                                                              {{$personal->call3}}

                                                              @endif  
                                                
                                                
                                                
                                                
                                                
                                                </td>
                                                    <td> 
                                                
                                                        @if($personal->start_job_duration5 == '')
                                                                -
                                                         @else

                                                              {{$personal->start_job_duration5}}

                                                              @endif  
                                                
                                                
                                                
                                                
                                                
                                                
                                                
                                                </td>
                                                    <td> 
                                                
                                                
                                                                @if($personal->end_job_duration6 == '')
                                                                -
                                                         @else

                                                              {{$personal->end_job_duration6}}

                                                              @endif  
                                                
                                                
                                                
                                                
                                                
                                                
                                                </td>
                                                    <td> 
                                                
                                                
                                                 
                                                                @if($personal->position3 == '')
                                                                -
                                                         @else

                                                              {{$personal->position3}}

                                                              @endif  
                                                
                                                
                                                
                                                
                                                
                                                </td>
                                                    <td> 
                                                
                                                
                                                                @if($personal->reasonLeaving3 == '')
                                                                -
                                                         @else

                                                              {{$personal->reasonLeaving3}}

                                                              @endif 
                                                
                                                
                                                
                                                
                                                </td>
                                                    <td> 
                                                
                                                                @if($personal->lastsalary3 == '')
                                                                -
                                                         @else

                                                              {{$personal->lastsalary3}}

                                                              @endif 
                                                
                                                
                                                
                                                
                                                </td>
                                                  </tr>
                                                </tbody>
                                              </table>
                                         </div> 
                              </div>
      


                              <div class="tab-pane" id="tab_5">

                                    <label>บุคลที่ไม่ใช่ญาติซึ่งทราบประวัติของท่านและบริษัทฯ สามารถสอบถามได้</label>

                                       <div class="box-body table-responsive no-padding">
                        <div class="form-group">
                <table class="table table-bordered">
                        <thead>
                          <tr>
                            <th>ชื่อ-นามสกุล</th>
                            <th>ความสัมพันธ์</th>
                            <th>สถานที่ทำงาน/ที่อยู่</th>
                            <th>โทรศัพท์</th>
                            <th>ตำแหน่ง</th>
                          </tr>
                        </thead>
                        <tbody>
                          <tr>
                            <td>
                        
                                {{$personal->namecm}}
                        
                               
                        </div>
                           </td>
                            <td>
                                             
                                    {{$personal->lastnamecm}}
                                  
                               
                            </td>
                            <td>
                                       
                                    {{$personal->firm}}
                                    
                              
                            </td>
                            <td>
                                        
                                    {{$personal->telecm}}
                                     
                                </div>
                           </td>
                            <td>
                                       
                                    {{$personal->positioncm}}
                                   
                                
                           </td>
                          </tr>
                         
                        </tbody>
                    
                      </table>
                    </div>
                       <div class="row">      
                    <div class="col-md-5">
                            <div class="form-group">
                        <label for="name">ความรู้พิเศษ</label> 
                        คอมพิวเตอร์   ระบุ:   @if($personal->computer == '')
                        -
                       @else
                      {{$personal->computer}}

                      @endif  
        
                                
                            </div>
                    </div> 
                    <div class="col-md-5">
                            <div class="form-group">
                                                          
                                        {{Form::label('เครื่องโทรสาร:')}}   {{$personal->dot}} 

        @if($personal->fax == '')
                        -
                       @else
                      {{$personal->fax}}

                      @endif 
                      
                      {{Form::label('เครื่องพิมพ์ดีดไทย :')}}    

        @if($personal->typewriter == '')
                        -
                       @else
                      {{$personal->typewriter}}

                      @endif 
                      {{Form::label('  คำ/นาที ')}} 
                      

                        </div>
                        </div> 
                      
                </div>

                <div class="row">      
                        <div class="col-md-12">
                                        <div class="form-group ">
                                        <label>ในตำแหน่งที่ต้องการต้งมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ)</label> &emsp;&emsp;
                                        {{$personal->crash1}}   
                                   
                                        ชื่อ:  {{$personal->compd}} 
                                        สถานที่ทำงาน:  {{$personal->compd}} 
                                </div>              
                            
                        </div>   
                    </div>

                    <div class="row">      
                            <div class="col-md-10">
                                        <div class="form-group ">
                                            <label>ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป </label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;

                                            {{$personal->crash2}} 
                                        </div> 
                                             
                                   
                            </div>   
                        </div>


                        <div class="row">      
                                <div class="col-md-6">
                                                <div class="form-group ">
                                                <label>ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                {{$personal->crash3}} 
                                               
                                            
                                        </div> 
                                            
                                </div>   
                            </div>


                            <div class="row">      
                                    <div class="col-md-6">
                                                <div class="form-group ">
                                                    <label>ท่านสามารถขับรถยนต์ได้หรือไม่</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    {{$personal->yes}} 
                                                   
                                                    
                                                </div>         
                                            
                                    </div>   
                                </div>

                                <div class="row">      
                                        <div class="col-md-6">
                                                        <div class="form-group ">
                                                        <label>ท่านมีรถยนต์หรือไม่</label>&emsp;
                                                       
                                                        {{$personal->owncar}} 
                                                         
                                          </div>   
                                        </div>   
                                    </div>
    



                                    <div class="row">      
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ:</label> {{$personal->workk}} 
                                                        
                                                    </div>
                                            </div>   
                                        </div>
        


                                        <div class="row">      
                                                <div class="col-md-6">
                                                                <div class="form-group ">
                                                                <label>ท่านพร้อมงานวันที่: <label>  {{$personal->dateworkk}} 
                                                               
                                                                        </div>   
                                                </div>   
                                            </div>
                                            <div class="row">      
                                                    <div class="col-md-12">
                                                            <div class="form-group ">
                                                                    <label>ท่านเป็นเจ้าของรถประเภทใด:</label> {{$personal->cardec}}  
                                                                    <label>ทะเบียน:</label> {{$personal->license}} 
                                                            </div>
                                                    </div>   
                                                </div>
                                                <div class="row">      
                                                        <div class="col-md-10">
                                                                <div class="form-group">
                                                                        <label>ท่านเคยให้ถูกออกจากงานหรือไม่</label> &emsp;
                                                                        
                                                                        {{$personal->exitwork}}
                                                                </div>
                                                        </div>   
                                                    </div>
                                                    <div class="row">      
                                                            <div class="col-md-6">
                                                                    <div class="form-group">
                                                                            <label>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่?</label>&emsp;&emsp;&emsp;
                                                                            {{$personal->serious_ill}}
                                                                    </div>
                                                            </div>   
                                                        </div>
                                                        <div class="row">      
                                                                <div class="col-md-12">
                                                                        <div class="form-group">
                                                                                <label>ท่านเคยไดรั้บโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                {{$personal->offense}}
                                                                                
                                                                        </div>
                                                                </div>   
                                                            </div>
                                                            <div class="row">      
                                                                    <div class="col-md-6">
                                                                            <div class="form-group">
                                                                                    <label>ขณะนี้คุณตั้งครรภ์หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                    {{$personal->pregnant}}
                                                                                    
                                                                                  
                                                                                
                                                                            </div>
                                                                    </div>   
                                                                </div>                                               
                                                           </div>    
                                  </div>
          






                        <!-- /.tab-pane -->
                      </div>
                      <!-- /.tab-content -->
                    </div>
                    <!-- nav-tabs-custom -->
                  </div>
             
                  <!-- /.col -->
                </div>






















    
  







                                    
      </div>
      
</div>

  @endsection
