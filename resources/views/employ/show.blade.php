@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
               
        <div class="content container-fluid">  

                <h2 class="page-header">ข้อมูลของ {{$personal->name}}  {{$personal->lastname}} </h2>
          
                <div class="row">
                  <div class="col-md-12">
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
                                <div class="row">
                                        
                                        <div class="col-md-2">
                                                <div class="form-group {{ $errors->has('image') ? 'has-error' : '' }}" >
                                                <img src="{{URL::asset($personal->photo)}}" height="75" width="75" >
                                            </div>  
                                     </div> 
                                </div>
                                <div class="row">  
                                   <div class="col-md-2">
                                                <div class="form-group ">
                                            <label for="name">ชื่อ:</label> 
                                            {{Form::label($personal->name)}}          
                                            {{Form::label($personal->lastname)}} 
                                            
                                                </div>
                                        </div> 
                                
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                    <label >ชื่อล่น:</label> 
                                                    {{Form::label($personal->nikname)}}  
                                                </div>
                                         </div> 
                                         <div class="col-md-2">
                                                        <div class="form-group">
                                                <label >เพศ:</label>
                                                {{Form::label($personal->gender)}}  
                                                 <span class="text-danger">{{ $errors->first('gender') }}</span>
                                        </div>
                                               
                                        </div> 
                                      <div class="col-md-2">
                                                <div class="form-group">
                                                <label >วันเกิด</label>
                                                {{Form::label($personal->birthday)}}   
                                                
                                        </div>
                                </div>
                                <div class="col-md-2">
                                        <div class="form-group ">
                                         <label >สัญชาติ</label>
                                          {{Form::label($personal->nationality)}}   
                                           
                                            <span class="text-danger"></span>
                                            </div>
                                    </div> 
                             </div>
                              
                                    <div class="row">  
                                            
                                           
                                            <div class="col-md-2">
                                                    <div class="form-group" >
                                                    <label >เชื้อชาติ</label>
                                                    {{Form::label($personal->race)}}   
                                                    </div>
                                            </div> 
                                            
                                            <div class="col-md-2">
                                                    <div class="form-group" >
                                                    <label >ศาสนา</label>
                                                    {{Form::label($personal->religion)}}   
                                                    </div>
                                            </div> 
                                            <div class="col-md-2">
                                                    <div class="form-group" >
                                                    <label >อายุ</label>
                                                    {{Form::label($personal->age)}}   
                                                   
                                                    
                                                    </div>
                                            </div> 
                                            <div class="col-md-2">
                                                    <div class="form-group" >
                                                    <label >ส่วนสูง</label>
                                                    {{Form::label($personal->height)}}   
                                                    </div>
                                            </div> 
                                            <div class="col-md-2">
                                                    <div class="form-group " >
                                                    <label >น้ำหนัก</label>
                                                    {{Form::label($personal->height)}}   
                                                    </div>
                                            </div> 
                                       
                                    </div>
              
                                    <div class="row">  
                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                    <label >พี่น้องกี่คน</label>
                                                    {{Form::label($personal->brothers)}}   
                                                  
                                                    </div>
                                            </div> 
            
                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                    <label >เป็นคนที่</label>
                                                    {{Form::label($personal->number)}}   
                                                   
                                                    </div>
                                            </div>
                                            <div class="col-md-2">
                                                    <div class="form-group ">
                                                    <label >โทรศัพท์ที่ติดต่อ</label>
                                                    {{Form::label($personal->tel)}}   
                                                    
                                                    
                                                    </div>
                                            </div>
            
                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                    <label >โทรศัพท์บ้าน</label>
                                                    {{Form::label($personal->home)}}   
                                                   
                                                    </div>
                                            </div>
            
                                            <div class="col-md-2">
                                                    <div class="form-group ">
                                                    <label >โทรศัพท์มือถือ</label>
                                                    {{Form::label($personal->moblie)}}   
                                               
                                                  
                                                    </div>
                                            </div>
                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                    <label >โทรศัพท์สำนักงาน</label>
                                                    {{Form::label($personal->office)}}   
                                                    
                                                    </div>
                                            </div>
                                    </div>
                                    <div class="row">  
                                            <div class="col-md-3">
                                                    <div class="form-group {{ $errors->has('email') ? 'has-error' : '' }}">
                                                    <label>อีเมล</label>
                                                    {{Form::label($personal->email)}}   
                                                   
                                                    <span class="text-danger">{{ $errors->first('email') }}</span>
                                                    </div>
                                            </div>
            
                                            <div class="col-md-3">
                                                    <div class="form-group" >
                                                    <label >ที่อยู่ปัจจุบันที่ติดต่อได้สะดวก</label>
                                                    {{Form::label($personal->address1)}}
                                                    </div>
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="form-group" >
                                                    <label > ที่อยู่ตามบัตรประชาชน</label>
                                                    {{Form::label($personal->address2)}}
                                                    
                                                    </div>
                                            </div>
            
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                    <label >เลขบัตรประชาชน</label>
                                                    {{Form::label($personal->idcard)}}   
                                                    </div>
                                            </div>     
                                    </div>
                                    <div class="row">
                                            <div class="col-md-3">
                                                    <div class="form-group " >
                                                    <label >ออกให้ ณ อำเภอ/เขต:</label>
                                                    {{Form::label($personal->issued)}}   
                                                    
                                                    </div>
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="form-group" >
                                                    <label >จังหวัด</label>
                                                    {{Form::label($personal->province_crad)}} 
                                                    </div>
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="form-group" >
                                                    <label >วันออกบัตร</label>
                                                    {{Form::label($personal->issueddate)}}   
                                                    <span class="text-danger">{{ $errors->first('issueddate') }}</span>
                                                    </div>
                                            </div>
                                            <div class="col-md-3">
                                                    <div class="form-group {{ $errors->has('expid') ? 'has-error' : '' }}" >
                                                    <label >บัตรหมดอายุ:</label>
                                                    {{Form::label($personal->expid)}}   
                                                    <span class="text-danger">{{ $errors->first('expid') }}</span>
                                                    </div>
                                            </div>
                                    </div>
            
            
                              <div class="row">
                                    <div class="col-md-3">
                                            <div class="form-group">
                                            <label >บัตรประจำตัวผู้เสียภาษี</label>
                                            {{Form::label($personal->texid)}}   
                                           
                                            </div>
                                    </div>
                                    <div class="col-md-2">
                                            <div class="form-group" >
                                                    <label >สถานะความเป็นอยู่</label>
                                                    {{Form::label($personal->living_status)}}   
        
                                            </div>
                                        </div>
                                        <div class="col-md-2">
                                            <div class="form-group" >
                                                    <label >สถานะครอบครัว</label>
                                                    {{Form::label($personal->marital_status)}}   
                                                               
                                            </div> 
                                        </div>
            
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                        <label >กรณีแต่งงาน</label>
                                                    
                                                    @if($personal->if_marricd =='')
                                                    {{Form::label('ไม่มี')}}
                                                    @else
                                                    {{Form::label($personal->if_marricd)}}
                                                      @endif   
                                                       
                            
                                                </div> 
                                            </div>
                                            <div class="col-md-2">
                                                    <div class="form-group">
        
                                                    <label >คู่มสมรส</label>
                                                    @if($personal->spouse =='')
                                                    {{Form::label('ไม่มี')}}
                                                    @else
                                                    {{Form::label($personal->spouse)}}
                                                      @endif    
        
                                                    </div>
                                            </div>
                                        
                              </div>
                            <div class="row">
                                    <div class="col-md-4">
                                            <div class="form-group">
                                                    <label >ชื่อคู่สมรส</label>
                                                    {{Form::label($personal->name_spouse)}}   
                                            </div> 
                                        </div>
                                        <div class="col-md-3">
                                                <div class="form-group">
                                                        <label >อาชีพคู่สมรส</label>
                                                        {{Form::label($personal->spouse_occupation)}}   
                                                </div> 
                                            </div>
            
                                            <div class="col-md-3">
                                                    <div class="form-group">
                                                            <label > สถานที่ทำงาน</label>
                                                            {{Form::label($personal->firm_address)}}   
                                                    </div> 
                                                </div>
            
                                                <div class="col-md-2">
                                                        <div class="form-group">
                                                                <label >โทรศัพท์</label>
                                                                {{Form::label($personal->spouse_tel)}}   
                                                        </div> 
                                                    </div>
                                  </div> 
                                  
                                  <div class="row">
                                        <div class="col-md-2">
                                        <div class="form-group">
                                                <label >จำนวนบุตรทั้งหมด</label>
                                                {{Form::label($personal->children)}}   
                                        </div>
                                    </div>
            
                                    <div class="col-md-2">
                                            <div class="form-group">
                                                    <label >หญิง</label>
        
                                                    {{Form::label($personal->girls)}}
                                                    
                                            </div>
                                        </div>
            
                                        <div class="col-md-2">
                                                <div class="form-group">
                                                        <label >ชาย</label>
        
                                                        {{Form::label($personal->boy)}}   
                                                </div>
                                            </div>
                
                                            <div class="col-md-2">
                                                    <div class="form-group">
                                                            <label > จำนวนบุตรกำลังศึกษา</label>
                                                            {{Form::label($personal->school)}}  
                                                           
                                                    </div>
                                                </div>
            
                                                <div class="col-md-2">
                                                        <div class="form-group">
                                                                <label >จำนวนบุตรที่อายุเกิน21ปี</label>
                                                                {{Form::label($personal->over21,'คน')}}  
                                                                
                                                        </div>
                                                    </div>
                                                    <div class="col-md-2">
                                                            <div class="form-group " >
                                                            <label > สถานะทางทหาร</label>
                                                            {{Form::label($personal->military_service)}}  
                                                                  
                                                                </div> 
                                                        </div>
                                        </div>
                                        <div class="row">
                                              
            
                                                    <div class="col-md-3">
                                                            <div class="form-group" >
                                                            <label > ชื่อบิดา</label>
                                                            {{Form::label($personal->namefather)}}  
                                                        </div>
                                                    </div>
                                                        <div class="col-md-3">
                                                                <div class="form-group">
                                                                <label >นามสกุล</label>
                                                                {{Form::label($personal->lastfather)}}  
                                                            </div>
                                                        </div>
                                                            <div class="col-md-3">
                                                                    <div class="form-group" >
                                                                    <label >อาชีพ</label>
                                                                    {{Form::label($personal->occupation_father)}}  
                                                                    
                                                                </div>
                                                            </div>
                                                                <div class="col-md-3"><br>
                                                                    <div class="form-group" >
                                                                    <label >สถานะ</label>
                                                                    {{Form::label($personal->alivef)}}
                                                         
                                                                    </div>
                                                                </div>
                                        </div>
                                        <div class="row">
                                                <div class="col-md-3">
                                                        <div class="form-group" >
                                                        <label > ชื่อมารดา</label>
                                                        {{Form::label($personal->namemother)}}  
                                                       
                                                        
                                                    </div>
                                                </div>
                                                    <div class="col-md-3">
                                                            <div class="form-group" >
                                                            <label >นามสกุล</label>
                                                            {{Form::label($personal->lasrmother)}}  
                                                        </div>
                                                    </div>
                                                        <div class="col-md-3">
                                                                <div class="form-group " >
                                                                <label >อาชีพ</label>
                                                                {{Form::label($personal->occupationm)}}  
                                                                
                                                               
                                                            </div>
                                                        </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group" >
                                                                        <label >สถานะ</label>
                                                                        {{Form::label($personal->alivem)}}
                                                 
                                             </div>
                                        </div>
                                   </div>  
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
                                                    <td> {{Form::text('primary',$personal->primary,['class'=>'form-control'])}}</td>
                                                    <td>      
                                                        {{Form::text('year1',$personal->year1,['class'=>'form-control'])}}
                                                        </td>
                                                        <td>
                                                        {{Form::text('year2',$personal->year2,['class'=>'form-control'])}}
                                                        </td>
                                                    <td>{{Form::text('gpa',$personal->gpa,['class'=>'form-control'])}}</td>
                                                    <td>{{Form::text('major',$personal->major,['class'=>'form-control'])}}</td>
                                                    <td>{{Form::text('degree1',$personal->degree1,['class'=>'form-control'])}}</td>
                                                  </tr>
                                                  <tr>
                                                        <td>มัธยมศึกษา</td>
                                                        <td>{{Form::text('secondary',$personal->secondary,['class'=>'form-control'])}} </td>
                                                        <td> 
                                                        {{Form::text('year3',$personal->year3,['class'=>'form-control'])}}
                                                        </td>
                                                        <td> 
                                                        {{Form::text('year4',$personal->year4,['class'=>'form-control'])}}    
                                                        </td>
                                                        <td> {{Form::text('gpas',$personal->gpas,['class'=>'form-control'])}}</td>
                                                        <td> {{Form::text('majors',$personal->majors,['class'=>'form-control'])}}</td>
                                                        <td>{{Form::text('degree2',$personal->degree2,['class'=>'form-control'])}}</td>
                                                  </tr>
                
                                                  <tr>
                                                        <td>อาชีวะศึกษา</td>
                                                        <td>{{Form::text('vocation',$personal->vocation,['class'=>'form-control'])}}</td>
                                                        <td>
                                                        {{Form::text('year5',$personal->year5,['class'=>'form-control'])}}  
                                                        </td>
                                                        <td> 
                                                                        {{Form::text('year6',$personal->year6,['class'=>'form-control'])}}     
        
                                                        </td>
                                                        <td>{{Form::text('gpav',$personal->gpav,['class'=>'form-control'])}} </td>
                                                        <td>{{Form::text('majorv',$personal->majorv,['class'=>'form-control'])}}</td>
                                                        <td>{{Form::text('degree3',$personal->degree3,['class'=>'form-control'])}}</td>
                                                  </tr>
                
                                                  <tr>
                                                        <td>อนุปริญญา</td>
                                                        <td>{{Form::text('diploma',$personal->diploma,['class'=>'form-control'])}}</td>
                                                        <td>
                                                        {{Form::text('year7',$personal->year7,['class'=>'form-control'])}} 
                                                        </td>
                                                        <td>
                                                        {{Form::text('year8',$personal->year8,['class'=>'form-control'])}} 
                                                        </td>
                                                        <td>{{Form::text('gpad',$personal->gpad,['class'=>'form-control'])}}</td>
                                                        <td>{{Form::text('majord',$personal->majord,['class'=>'form-control'])}} </td>
                                                        <td>{{Form::text('degree4',$personal->degree4,['class'=>'form-control'])}}</td>
                                                  </tr>
                
                
                                                  <tr>
                                                        <td>ปริญญาตรี</td>
                                                        <td>{{Form::text('bachelor',$personal->bachelor,['class'=>'form-control'])}}</td>
                                                        <td>
                                                                        {{Form::text('year9',$personal->year9,['class'=>'form-control'])}} 
                                                        </td>
                                                        <td> {{Form::text('year10',$personal->year10,['class'=>'form-control'])}}    </td>
                                                        <td>{{Form::text('gpab',$personal->gpab,['class'=>'form-control'])}} </td>
                                                        <td>{{Form::text('majorb',$personal->majorb,['class'=>'form-control'])}} </td>
                                                        <td>{{Form::text('degree5',$personal->degree5,['class'=>'form-control'])}}</td>
                                                  </tr>
                
                                              
                
                                                  <tr>
                                                        <td>ปริญญาโท</td>
                                                        <td>{{Form::text('master',$personal->master,['class'=>'form-control'])}}</td>
                                                        <td> 
                                                                        {{Form::text('year11',$personal->year11,['class'=>'form-control'])}}
                                                                
                                                        </td>
                                                        <td>
                                                                        {{Form::text('year12',$personal->year12,['class'=>'form-control'])}}  
                                                        </td>
                                                        <td>{{Form::text('gpam',$personal->gpam,['class'=>'form-control'])}} </td>
                                                        <td> {{Form::text('majorm',$personal->majorm,['class'=>'form-control'])}}</td>
                                                        <td>{{Form::text('degree6',$personal->degree6,['class'=>'form-control'])}}</td>
                                                  </tr>
                
                
                                                  <tr>
                                                        <td>อื่นๆ</td>
                                                        <td> {{Form::text('otherE',$personal->otherE,['class'=>'form-control'])}}</td>
                                                        <td> 
                                                                     {{Form::text('year13',$personal->year13,['class'=>'form-control'])}}
                                                        </td>
                                                        <td>
                                                                        {{Form::text('year14',$personal->year1,['class'=>'form-control'])}}
                                                        </td>
                                                        <td> {{Form::text('gpao',$personal->gpao,['class'=>'form-control'])}}</td>
                                                        <td>{{Form::text('majoro',$personal->majoro,['class'=>'form-control'])}}</td>
                                                        <td>{{Form::text('degree7',$personal->degree7,['class'=>'form-control'])}}</td>
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
                                                            <div class="form-group {{ $errors->has('thais') ? 'has-error' : '' }}">
                                                         
                                                            {{ Form::select('thais', [
                                                                 $personal->thais=>$personal->thais,
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
                
                
                                                            <span class="text-danger">{{ $errors->first('thais') }}</span>
                                                        </div>
                                                        </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('thail') ? 'has-error' : '' }}">
                                                            {{ Form::select('thail', [
                                                                 $personal->thail=>$personal->thail, 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
                                                            <span class="text-danger">{{ $errors->first('thail') }}</span>
                                                        </div>
                                                        </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('thair') ? 'has-error' : '' }}">
                                                            
                                                            {{ Form::select('thair', [
                                                                 $personal->thair=>$personal->thair, 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
                                                            <span class="text-danger">{{ $errors->first('thair') }}</span>
                
                                                        </td>
                                                  </tr>
                                                  <tr>
                                                    <td>อังกฤษ</td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('engliss') ? 'has-error' : '' }}">
                                                         
                                                         {{ Form::select('engliss', [
                                                               $personal->engliss=>$personal->engliss, 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
                                                            <span class="text-danger">{{ $errors->first('engliss') }}</span>
                
                                                        </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('englisl') ? 'has-error' : '' }}">
                                                            {{ Form::select('englisl', [
                                                                $personal->englisl=>$personal->englisl, 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
                                                            <span class="text-danger">{{ $errors->first('englisl') }}</span>
                
                                                        </td>
                                                    <td>
                                                        <div class="form-group {{ $errors->has('englisr') ? 'has-error' : '' }}">
                                                            {{ Form::select('englisr', [
                                                                $personal->englisr=>$personal->englisr,
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
                
                                                            <span class="text-danger">{{ $errors->first('englisr') }}</span>
                                                        </td>
                                                  </tr>
                                                  <tr>
                                                    <td>อื่นๆ{{Form::text('otherr',$personal->otherr,['class'=>'form-control'])}} </td>
                                                    <td>
                                                            {{ Form::select('othes', [
                                                                 $personal->othes=>$personal->othes, 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
                                                        </td>
                                                    <td>
                                                            {{ Form::select('othel', [
                                                                $personal->othel=>$personal->othel,
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
                
                                                        </td>
                                                    <td>
                                                            {{ Form::select('other', [
                                                                $personal->other=>$personal->other, 
                                                                'ดี' => 'ดี',
                                                                'พอใช้' => 'พอใช้',
                                                                'ไม่ดี' => 'ไม่ดี'
                                                           ],null, ['class' => 'form-control']) }}
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
                                                    <td> {{Form::text('list_of_employed1',$personal->list_of_employed1,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('job_description1',$personal->job_description1,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('call1',$personal->call1,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::date('start_job_duration1',$personal->start_job_duration1,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::date('end_job_duration2',$personal->end_job_duration2,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('position1',$personal->position1,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('reasonLeaving1',$personal->reasonLeaving1,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('lastsalary1',$personal->lastsalary1,['class'=>'form-control'])}} </td>
                                                  </tr>
                                                  <tr>
                                                    <td> {{Form::text('list_of_employed2',$personal->list_of_employed2,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('job_description2',$personal->job_description2,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('call2',$personal->call2,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::date('start_job_duration3',$personal->start_job_duration3,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::date('end_job_duration4',$personal->end_job_duration4,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('position2',$personal->position2,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('reasonleaving2',$personal->reasonLeaving2,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('lastsalary2',$personal->lastsalary2,['class'=>'form-control'])}}</td>
                                                  </tr>
                                                  <tr>
                                                    <td> {{Form::text('list_of_employed3',$personal->list_of_employed3,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('job_description3',$personal->job_description3,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('call3',$personal->call3,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::date('start_job_duration5',$personal->start_job_duration5,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::date('end_job_duration6',$personal->end_job_duration6,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('position3',$personal->position3,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('reasonleaving3',$personal->reasonLeaving3,['class'=>'form-control'])}}</td>
                                                    <td> {{Form::text('lastsalary3',$personal->lastsalary3,['class'=>'form-control'])}} </td>
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
                        <div class="form-group {{ $errors->has('namecm') ? 'has-error' : '' }}">       
                                {{Form::text('namecm',$personal->namecm,['class'=>'form-control'])}}
                        
                                <span class="text-danger">{{ $errors->first('namecm') }}</span>  
                        </div>
                           </td>
                            <td>
                                        <div class="form-group {{ $errors->has('lastnamecm') ? 'has-error' : '' }}">       
                                    {{Form::text('lastnamecm',$personal->lastnamecm,['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('lastnamecm') }}</span>  
                                </div>
                            </td>
                            <td>
                                        <div class="form-group {{ $errors->has('firm') ? 'has-error' : '' }}"> 
                                    {{Form::text('firm',$personal->firm,['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('firm') }}</span>  
                                </div>
                            </td>
                            <td>
                                        <div class="form-group {{ $errors->has('telecm') ? 'has-error' : '' }}"> 
                                    {{Form::text('telecm',$personal->telecm,['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('telecm') }}</span>  
                                </div>
                           </td>
                            <td>
                                        <div class="form-group {{ $errors->has('positioncm') ? 'has-error' : '' }}"> 
                                    {{Form::text('positioncm',$personal->positioncm,['class'=>'form-control'])}}
                                    <span class="text-danger">{{ $errors->first('positioncm') }}</span>  
                                </div>
                           </td>
                          </tr>
                         
                        </tbody>
                    
                      </table>
                    </div>
                       <div class="row">      
                    <div class="col-md-5">
                            <div class="form-group">
                        <label for="name">ความรู้พิเศษ</label> 
                        คอมพิวเตอร์   ระบุ:  {{Form::text('computer',$personal->computer)}}
                                
                            </div>
                    </div> 
                    <div class="col-md-5">
                            <div class="form-group">
                                    <input type="checkbox" class="form-check-input" id="fax" name="fax" value="เครื่องโทรสาร" > เครื่องโทรสาร 
                                    <input type="checkbox" class="form-check-input" id="typewriter" name="typewriter"  value="เครื่องพิมพ์ดีดไทย" >เครื่องพิมพ์ดีดไทย
                                    {{Form::text('dot',$personal->dot)}} คำ/นาที
                        </div>
                        </div> 
        
                </div>

                <div class="row">      
                        <div class="col-md-12">
                                <div class="form-group {{ $errors->has('crash1') ? 'has-error' : '' }}">
                                        <label>ในตำแหน่งที่ต้องการต้งมีผู้ค้ำประกัน(เป็นราชการ/รัฐวิสาหกิจ)</label> &emsp;&emsp;
                                        @if($personal->crash1 == 'ขัดข้อง')
                                        {{ Form::radio('crash1','ขัดข้อง',true) }} ขัดข้อง
                                        {{ Form::radio('crash1','ไม่ขัดข้อง') }} ไม่ขัดข้อง
                                        ชื่อ:  {{Form::text('compd',$personal->compd)}} 
                                        สถานที่ทำงาน:  {{Form::text('compa',$personal->compd)}} 
                                        @else
                                        {{ Form::radio('crash1','ขัดข้อง') }} ขัดข้อง
                                        {{ Form::radio('crash1','ไม่ขัดข้อง',true) }} ไม่ขัดข้อง
                                        ชื่อ:  {{Form::text('compd',$personal->compd)}} 
                                        สถานที่ทำงาน:  {{Form::text('compa',$personal->compd)}} 
                                        @endif

                                        <br>
                                        <span class="text-danger">{{ $errors->first('crash1') }}</span>  

                                    
                                </div>
                        </div>   
                    </div>

                    <div class="row">      
                            <div class="col-md-10">
                                    <div class="form-group {{ $errors->has('crash2') ? 'has-error' : '' }}">
                                            <label>ในการปฏิบัติงานหมุนเวียนเป็นกะหมุนเวียนกันไป </label> &emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&nbsp;
                                            @if($personal->crash2 == 'ขัดข้อง')
                                             {{ Form::radio('crash2','ขัดข้อง',true) }}ขัดข้อง
                                             {{ Form::radio('crash2','ไม่ขัดข้อง') }}ไม่ขัดข้อง
                                             @else
                                             {{ Form::radio('crash2','ขัดข้อง') }}ขัดข้อง
                                             {{ Form::radio('crash2','ไม่ขัดข้อง',true) }}ไม่ขัดข้อง
                                             @endif
                                             <br>
                                             <span class="text-danger">{{ $errors->first('crash2') }}</span>  
                                    </div>
                            </div>   
                        </div>


                        <div class="row">      
                                <div class="col-md-6">
                                        <div class="form-group {{ $errors->has('crash3') ? 'has-error' : '' }}">
                                                <label>ท่านสามารถเปลี่ยนแปลงหน้าที่ตามความเหมาะสม</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                @if($personal->crash3 == 'ขัดข้อง')
                                                 {{ Form::radio('crash3','ขัดข้อง',true) }}  ขัดข้อง
                                                 {{ Form::radio('crash3','ไม่ขัดข้อง') }}ไม่ขัดข้อง
                                                 @else
                                                 {{ Form::radio('crash3','ขัดข้อง') }}  ขัดข้อง
                                                 {{ Form::radio('crash3','ไม่ขัดข้อง',true) }}ไม่ขัดข้อง
                                                 <br>
                                                 <span class="text-danger">{{ $errors->first('crash3') }}</span>  
                                                 @endif

                                            </div>
                                </div>   
                            </div>


                            <div class="row">      
                                    <div class="col-md-6">
                                            <div class="form-group {{ $errors->has('yes') ? 'has-error' : '' }}">
                                                    <label>ท่านสามารถขับรถยนต์ได้หรือไม่</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                    @if($personal->yes == 'ได้')
                                                     {{ Form::radio('yes', 'ได้',true) }}ได้
                                                     {{ Form::radio('yes', 'ไม่ได้') }}ไม่ได้
                                                     @else
                                                     {{ Form::radio('yes', 'ได้') }}ได้
                                                     {{ Form::radio('yes', 'ไม่ได้',true) }}ไม่ได้
                                                     @endif
                                                     <br>
                                                     <span class="text-danger">{{ $errors->first('yes') }}</span>  
                                                    
                                            </div>
                                    </div>   
                                </div>

                                <div class="row">      
                                        <div class="col-md-6">
                                                <div class="form-group {{ $errors->has('owncar') ? 'has-error' : '' }}">
                                                        <label>ท่านมีรถยนต์ส่วนตัวหรือไม่</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                        @if($personal->owncar == 'มี') 
                                                        {{ Form::radio('owncar','มี',true) }} มี
                                                         {{ Form::radio('owncar','ไม่มี') }}ไม่มี
                                                         @else
                                                         {{ Form::radio('owncar','มี') }} มี
                                                         {{ Form::radio('owncar','ไม่มี',true) }}ไม่มี
                                                         @endif
                                                         <br>
                                                         <span class="text-danger">{{ $errors->first('owncar') }}</span>  
        
                                                    
                                                </div>
                                        </div>   
                                    </div>
    



                                    <div class="row">      
                                            <div class="col-md-6">
                                                    <div class="form-group">
                                                            <label>บุคคลในบริษัทที่ท่านรู้จักคุ้นเคย ชื่อ:</label> {{Form::text('workk',$personal->workk)}} 
                                                        
                                                    </div>
                                            </div>   
                                        </div>
        


                                        <div class="row">      
                                                <div class="col-md-6">
                                                        <div class="form-group {{ $errors->has('dateworkk') ? 'has-error' : '' }}">
                                                                <label>ท่านพร้อมงานวันที่<label>  {{Form::date('dateworkk',$personal->dateworkk)}} 
                                                                <span class="text-danger">{{ $errors->first('dateworkk') }}</span>  
                                                        </div>
                                                </div>   
                                            </div>




                                            <div class="row">      
                                                    <div class="col-md-12">
                                                            <div class="form-group ">
                                                                    <label>ท่านเป็นเจ้าของรถประเภทใด</label> {{Form::text('cardec',$personal->cardec)}}  
                                                                    <label>ทะเบียน</label> {{Form::text('license',$personal->license)}} 
                                                                      
                                                                
                                                            </div>
                                                    </div>   
                                                </div>
                                                <div class="row">      
                                                        <div class="col-md-10">
                                                                <div class="form-group {{ $errors->has('exitwork') ? 'has-error' : '' }}">
                                                                        <label>ท่านเคยให้ถูกออกจากงานหรือไม่</label> &emsp;&emsp;&emsp;&emsp;&emsp;  
                                                                        @if($personal->exitwork == 'เคย')                                                                 
                                                                        {{ Form::radio('exitwork','เคย',true) }} เคย เพราะ{{Form::text('because',$personal->because)}}
                                                                            &emsp;&emsp;&emsp;  
                                                                            {{ Form::radio('exitwork','ไม่เคย') }}ไม่เคย 
                                                                            @else
                                                                            {{ Form::radio('exitwork','เคย') }} เคย เพราะ{{Form::text('because',$personal->because)}}
                                                                            &emsp;&emsp;&emsp;  
                                                                            {{ Form::radio('exitwork','ไม่เคย',true) }}ไม่เคย 
                                                                            @endif
                                                                            <br>
                                                                            <span class="text-danger">{{ $errors->first('exitwork') }}</span>  

                                                                </div>
                                                        </div>   
                                                    </div>
                                                    <div class="row">      
                                                            <div class="col-md-6">
                                                                    <div class="form-group {{ $errors->has('serious_ill') ? 'has-error' : '' }}">
                                                                            <label>ท่านเคยป่วยหนักและเป็นโรคร้ายแรงมาก่อนหรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                            @if($personal->serious_ill == 'เคย')
                                                                             {{ Form::radio('serious_ill','เคย',true) }}เคย
                                                                             {{ Form::radio('serious_ill','ไม่เคย') }}ไม่เคย<br>
                                                                                @else
                                                                                {{ Form::radio('serious_ill','เคย') }}เคย
                                                                             {{ Form::radio('serious_ill','ไม่เคย',true) }}ไม่เคย<br>
                                                                                @endif
                                                                             <span class="text-danger">{{ $errors->first('serious_ill') }}</span>  
                                                                            
                                                                        
                                                                    </div>
                                                            </div>   
                                                        </div>
                                                        <div class="row">      
                                                                <div class="col-md-12">
                                                                        <div class="form-group  {{ $errors->has('offense') ? 'has-error' : '' }}">
                                                                                <label>ท่านเคยไดรั้บโทษทางอาญาหรือจำคุก หรือ เป็นบุคคลล้มละลาย หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;

                                                                                @if($personal->offense == 'เคย')
                                                                                {{ Form::radio('offense','เคย',true) }}เคย
                                                                                {{ Form::radio('offense','ไม่เคย') }}ไม่เคย
                                                                                @else
                                                                                {{ Form::radio('offense','เคย') }}เคย
                                                                                {{ Form::radio('offense','ไม่เคย',true) }}ไม่เคย
                                                                                @endif
                                                                                <br>
                                                                                <span class="text-danger">{{ $errors->first('offense') }}</span>  
                                                                                
                                                                        </div>
                                                                </div>   
                                                            </div>
                                                            <div class="row">      
                                                                    <div class="col-md-6">
                                                                            <div class="form-group {{ $errors->has('pregnant') ? 'has-error' : '' }}">
                                                                                    <label>ขณะนี้คุณตั้งครรภ์หรือไม่?</label>&emsp;&emsp;&emsp;&emsp;&emsp;
                                                                                    @if($personal->pregnant == 'ใช่')
                                                                                     {{ Form::radio('pregnant','ใช่',true) }}ใช่
                                                                                    {{ Form::radio('pregnant','ไม่ใช่') }} ไม่ใช่
                                                                                    @else
                                                                                    {{ Form::radio('pregnant','ใช่') }}ใช่
                                                                                    {{ Form::radio('pregnant','ไม่ใช่',true) }} ไม่ใช่
                                                                                    @endif
                                                                                    <br>
                                                                                    <span class="text-danger">{{ $errors->first('pregnant') }}</span>  
                                                                                    
                                                                                
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
