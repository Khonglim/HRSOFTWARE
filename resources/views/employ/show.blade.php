@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
               
        <div class="content container-fluid">  
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
                                     <label>เงินเดือนที่ต้องการ:</label> {{$personal->salaryngg}}  &emsp;   <label>ตำแหน่งที่จะสมัคร:</label> {{$personal->positionngg}}<br><br>
                              <label>ชื่อ:</label> {{$personal->name}} {{$personal->lastname}}&emsp;  <label>ชื่อเล่น:  </label> {{$personal->nikname}}           
                                &emsp;  <label>เพศ:  </label>  {{$personal->gender}}&emsp;  <label>วันเกิด  </label> {{$personal->birthday}}&emsp;  
                                <label>สัญชาติ:  </label> {{$personal->nationality}}&emsp;   <label>เชื้อชาติ:  </label> {{$personal->race}}                  
                                &emsp;  <label>ศาสนา:</label> {{$personal->religion}}&emsp;  <label>อายุ:  </label> {{$personal->age}}     
                                &emsp;  <label>ส่วนสูง:</label> {{$personal->height}}
                                
                                <br><br>
                                <label>  น้ำหนัก:  </label>{{$personal->weight}} 
                                &emsp;  <label>พี่น้องกี่คน:</label>

                                @if($personal->brothers == '')
                                ::ว่าง::
                                @else
                                {{$personal->brothers}}
                                @endif
                                &emsp; 
                                <label>เป็นคนที่:</label>
                                @if($personal->number == '')
                                ว่าง
                                @else
                                {{$personal->number}}
                                @endif
                                &emsp; 
                              <label>โทรศัพท์บ้าน:</label> {{$personal->home}} &emsp;  <label>โทรศัพท์มือถือ:</label> {{$personal->moblie}}              
                                &emsp; {{Form::label('โทรศัพท์สำนักงาน:')}}           
                                @if($personal->office == '')
                                ::ว่าง::
                                @else
                                {{$personal->office}}
                                @endif 
                                <br><br> 
                               
                                <label>อีเมล:</label>    {{$personal->email}} 
                                &emsp;  
                                <label>ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก:</label>    {{$personal->address1}}           
                                <br><br>  
                                <label>ที่อยู่ตามบัตรประชาชน:</label>    {{$personal->address2}}      
                                &emsp; 
                                <label>เลขบัตรประชาชน:</label>     {{$personal->idcard}}           
                                &emsp;        
                                <label>ออกให้ ณ อำเภอ/เขต:</label>    {{$personal->issued}}         
                                &emsp;
                                <label>จังหวัด:</label>   {{$personal->province_crad}}  
                                <br><br> 
                                <label>วันออกบัตร:</label>    {{$personal->issueddate}}         
                                &emsp;
                                <label>บัตรหมดอายุ:</label>   {{$personal->expid}}              
                                &emsp;  
                                <label>บัตรประจำตัวผู้เสียภาษี:</label>  
                                @if($personal->texid =='')
                                ว่าง
                                @else
                               {{$personal->texid}}
                                @endif 
                                &emsp;         
                                <label>สถานะความเป็นอยู่:</label>   {{$personal->living_status}}           
                                &emsp;   
                                <label>สถานะครอบครัว:</label>       {{$personal->marital_status}}   
                                &emsp;   
                                <label>กรณีแต่งงาน:</label>     
                                @if($personal->if_marricd =='')
                                ว่าง
                                @else
                               {{$personal->if_marricd}}
                                @endif 
                                <br><br> 
                                <label>คู่มสมรส::</label>     
                                @if($personal->spouse =='')
                                ว่าง
                                @else
                               {{$personal->spouse}}
                                @endif 
                                &emsp;
                                <label>ชื่อสมรส:</label>     
                                @if($personal->name_spouse =='')
                                ว่าง
                                @else
                                {{$personal->name_spouse}}
                                @endif 

                                &emsp;
                                <label>อาชีพคู่สมรส:</label>     
                                @if($personal->spouse_occupation =='')
                                ว่าง
                                @else
                                {{$personal->spouse_occupation}}
                                @endif

                                &emsp;

                                <label>สถานที่ทำงาน:</label>       
                                @if($personal->firm_address =='')
                                ว่าง
                                @else
                                {{$personal->firm_address}}
                                @endif

                                &emsp;
                                
                                <label>โทรศัพท์:</label>    
                                @if($personal->spouse_tel =='')
                                ว่าง
                                @else
                                {{$personal->spouse_tel}}
                                @endif

                                &emsp;

                                <label>จำนวนบุตรทั้งหมด:</label>   
                                @if($personal->children =='')
                                ว่าง
                                @else
                                {{$personal->children}}
                                @endif

                                &emsp;

                                <label>หญิง:</label>   
                                @if($personal->girls =='')
                                ว่าง
                                @else
                                {{$personal->girls}}
                                @endif
                                &emsp;

                                <label>ชาย:</label>     
                                @if($personal->boy =='')
                                ว่าง
                                @else
                                {{$personal->boy}}
                                @endif
                                <br><br> 

                                <label>จำนวนบุตรกำลังศึกษา:</label>  
                                @if($personal->school =='')
                                ว่าง
                                @else
                                {{$personal->school}}
                                @endif

                                &emsp;

                                <label>จำนวนบุตรที่อายุเกิน21ปี:</label>    
                                @if($personal->over21 =='')
                                ว่าง
                                @else
                                {{$personal->over21}}
                                @endif

                                &emsp;

                                <label>สถานะทางทหาร:</label>     
                                @if($personal->military_service =='')
                                ว่าง
                                @else
                                {{$personal->military_service}}
                                @endif

                                &emsp;

                                <label>สถานะทางทหาร:</label>   
                                @if($personal->military_service =='')
                                ว่าง
                                @else
                                {{$personal->military_service}}
                                @endif
                                <br><br> 

                                <label>ชื่อบิดา:</label>   
                                {{$personal->namefather}}  
                                &emsp;
                                <label>นามสกุล:</label>            
                                {{$personal->lastfather}}  
                                &emsp;
                                <label>อาชีพ:</label>          
                                {{$personal->occupation_father}} 
                                &emsp;
                                <label>สถานะ</label>          
                                {{$personal->alivef}}       

                                <br><br> 

                                <label>ชื่อมารดา:</label>             
                                {{$personal->namemother}}
                                &emsp;

                                <label>นามสกุล:</label>           
                                {{$personal->lasrmother}}  
                                &emsp;

                                <label>อาชีพ:</label>           
                                {{$personal->occupationm}} 
                                &emsp;

                                <label>สถานะ:</label>         
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
                                                                        @if($personal->year14 =='')
                                                                       -
                                                                        @else
                                                                       {{$personal->year14}}
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
                                                  <tr>
                                                    <td> 
                                                
                                                                @if($personal->list_of_employed4 == '')
                                                                  -
                                                                @else
                                                                {{$personal->list_of_employed4 }}
                                                                @endif
                                                
                                                </td>
                                                    <td> 
                                                              @if($personal->job_description4 == '')
                                                                -
                                                              @else
                                                              {{$personal->job_description4 }}
                                                              @endif
                                                
                                                </td>
                                                    <td> 
                                                             @if($personal->call4 == '')
                                                                -
                                                              @else
                                                              {{$personal->call4 }}
                                                              @endif
                                                
                                                </td>
                                                    <td>
                                                             @if($personal->start_job_duration7 == '')
                                                                -
                                                              @else
                                                              {{$personal->start_job_duration7 }}
                                                              @endif
                                                
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->end_job_duration8 == '')
                                                                -
                                                              @else
                                                              {{$personal->end_job_duration8}}
                                                              @endif   
                                                        
                                                        
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->position4 == '')
                                                                -
                                                              @else

                                                              {{$personal->position4 }}

                                                              @endif  
                                                              
                                                              
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->reasonLeaving4 == '')
                                                                -
                                                              @else

                                                              {{$personal->reasonLeaving4 }}

                                                              @endif      
                                                      
                                                
                                                </td>
                                                    <td> 
                                                            
                                                        @if($personal->lastsalary4 == '')
                                                                -
                                                              @else

                                                              {{$personal->lastsalary4 }}

                                                              @endif 
                                                      
                                                
                                                </td>
                                                  </tr>
                                                  <tr>
                                                    <td> 
                                                
                                                                @if($personal->list_of_employed5 == '')
                                                                  -
                                                                @else
                                                                {{$personal->list_of_employed5 }}
                                                                @endif
                                                
                                                </td>
                                                    <td> 
                                                              @if($personal->job_description5 == '')
                                                                -
                                                              @else
                                                              {{$personal->job_description5 }}
                                                              @endif
                                                
                                                </td>
                                                    <td> 
                                                             @if($personal->call5 == '')
                                                                -
                                                              @else
                                                              {{$personal->call5 }}
                                                              @endif
                                                
                                                </td>
                                                    <td>
                                                             @if($personal->start_job_duration9 == '')
                                                                -
                                                              @else
                                                              {{$personal->start_job_duration9 }}
                                                              @endif
                                                
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->end_job_duration10 == '')
                                                                -
                                                              @else
                                                              {{$personal->end_job_duration10}}
                                                              @endif   
                                                        
                                                        
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->position5 == '')
                                                                -
                                                              @else

                                                              {{$personal->position5 }}

                                                              @endif  
                                                              
                                                              
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->reasonLeaving5 == '')
                                                                -
                                                              @else

                                                              {{$personal->reasonLeaving5 }}

                                                              @endif      
                                                      
                                                
                                                </td>
                                                    <td> 
                                                            
                                                        @if($personal->lastsalary5 == '')
                                                                -
                                                              @else

                                                              {{$personal->lastsalary5 }}

                                                              @endif 
                                                      
                                                
                                                </td>
                                                  </tr>
                                                  <tr>
                                                    <td> 
                                                
                                                                @if($personal->list_of_employed6 == '')
                                                                  -
                                                                @else
                                                                {{$personal->list_of_employed6 }}
                                                                @endif
                                                
                                                </td>
                                                    <td> 
                                                              @if($personal->job_description6 == '')
                                                                -
                                                              @else
                                                              {{$personal->job_description6 }}
                                                              @endif
                                                
                                                </td>
                                                    <td> 
                                                             @if($personal->call6 == '')
                                                                -
                                                              @else
                                                              {{$personal->call6 }}
                                                              @endif
                                                
                                                </td>
                                                    <td>
                                                             @if($personal->start_job_duration11 == '')
                                                                -
                                                              @else
                                                              {{$personal->start_job_duration11 }}
                                                              @endif
                                                
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->end_job_duration12 == '')
                                                                -
                                                              @else
                                                              {{$personal->end_job_duration12 }}
                                                              @endif   
                                                        
                                                        
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->position6 == '')
                                                                -
                                                              @else

                                                              {{$personal->position6 }}

                                                              @endif  
                                                              
                                                              
                                                
                                                </td>
                                                    <td> 
                                                                @if($personal->reasonLeaving6 == '')
                                                                -
                                                              @else

                                                              {{$personal->reasonLeaving6 }}

                                                              @endif      
                                                      
                                                
                                                </td>
                                                    <td> 
                                                            
                                                        @if($personal->lastsalary6 == '')
                                                                -
                                                              @else

                                                              {{$personal->lastsalary6 }}

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
                        
                               
                        
                           </td>
                            <td>
                                             
                                    {{$personal->lastnamecm}}
                                  
                               
                            </td>
                            <td>
                                       
                                    {{$personal->firm}}
                                    
                              
                            </td>
                            <td>
                                        
                                    {{$personal->telecm}}
                                     
                                
                           </td>
                            <td>
                                       
                                    {{$personal->positioncm}}
                                   
                                
                           </td>
                          </tr>
                         
                        </tbody>
                    
                      </table>
                    </div>

                    <div class="row">
                      <div class="col-md-6">
                          <div class="form-group">
                      <label>link ผลงาน</label><br>
                    

                      @if($personal->portfolio1 == '')
                      ไม่มี
               @else

               {{$personal->portfolio1}}

                    @endif 
      

                          </div>
                      </div>
                     </div>







                       <div class="row">      
                    <div class="col-md-5">
                            <div class="form-group">
                        <label >ความรู้พิเศษ</label> 
                        คอมพิวเตอร์   ระบุ:   @if($personal->computer == '')
                        -
                       @else
                      {{$personal->computer}}

                      @endif  
        
                                
                            </div>
                    </div> 
                    <div class="col-md-5">
                            <div class="form-group">
                                                          
                              <label >เครื่องโทรสาร:</label>     {{$personal->dot}} 

        @if($personal->fax == '')
                        -
                       @else
                      {{$personal->fax}}

                      @endif 
                      
                      <label >เครื่องพิมพ์ดีดไทย</label>     

        @if($personal->typewriter == '')
                        -
                       @else
                      {{$personal->typewriter}}

                      @endif 
                      <label >คำ/นาที</label>    
                      

                        </div>
                        </div> 
                      
                </div>

                <div class="row">      
                        <div class="col-md-12">
                                        <div class="form-group ">
                                        <label>ในตำแหน่งที่ต้องการต้องมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ)</label> &emsp;&emsp;
                                        {{$personal->crash1}}   
                                   
                                        ชื่อ:  {{$personal->compd}} 
                                        สถานที่ทำงาน:  {{$personal->compa}} 
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
                                                                <label>ท่านพร้อมงานวันที่: </label>  {{$personal->dateworkk}} 
                                                               
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
                                                                                <label>ท่านเคยได้รับโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;
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
                                                                <div class="row">      
                                                                  <div class="col-md-6">
                                                                          <div class="form-group">
                                                                                  <label>ทราบข่าวสารการสมัครงานจากที่ใด</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                  {{ $personal->knowfrom }}
                                                                                  @if ($personal->because2 !='')
                                                                                    อื่นๆ :{{ $personal->because2 }}      
                                                                                  @else
                                                                                    -  
                                                                                  @endif
                                                                                
                                                                              
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
