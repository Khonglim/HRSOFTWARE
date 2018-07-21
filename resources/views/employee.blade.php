
@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-12">
            <div class="panel panel-default">
              <div class="panel-heading">พนักงาน</div>
               <div class="table-responsive">
                  <table class="table table-striped b-t b-light">
                    <thead>
                      <tr>
                         <th>ชื่อ</th>
                         <th>นามสกุล</th>
                         <th>ชื่อเล่น</th>
                         <th>วันเกิด</th>
                         <th>เพศ</th>
                         <th>อีเมล</th>
                         <th>เพิ่มเติ่ม</th>
                      </tr>
                    </thead>
                    <tbody>
                            @forelse($employee as $l)
                               @if($l['enable']==1)
                              <tr>
                            <td> {{$l['name']}} </td>
                            <td> {{$l['lastname']}} </td>
                            <td> {{$l['nikname']}} </td>
                            <td> {{$l['birthday']}} </td>
                            <td> {{$l['sex']}} </td>
                            <td> {{$l['email']}} </td>
          <td>                        
     <button type="button" class="btn btn-info btn-xs" data-toggle="modal" data-target="#employee{{$l['id']}}"><i class="fa  fa-pencil"></i></button>
     <button type="button" class="btn  btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$l['id']}}"><i class="fa  fa-trash-o"></i></button>
     <div id="delete{{$l['id']}}" class="modal fade" role="dialog">
 <div class="modal-dialog">
                                    <!-- Modal content-->
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                        <h4 class="modal-title">ลบ  </h4>
                                      </div>
                                      <div class="modal-body">
                                          {{ Form::open(['route' => ['company.destroy',$l['id'], 'method' => "DELETE"]]) }}
                                          <input type="hidden" name="_method" value="delete" />
                                          <p>คุณต้องการลบข้อมูลใช่หรือไม่!!</p> 
                                      </div>
                                      <div class="modal-footer">
                                          {{ Form::submit('ลบ',array('class' => 'btn btn-danger ')) }}
                                        <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                      </div>
                                      {{ Form::close() }}  
                                    </div>
                                
                                  </div>
                                </div>                   
                                <div id="employee{{$l['id']}}" class="modal fade" role="dialog">
                                    <div class="modal-dialog">
                                     <!-- Modal content-->
                                     <div class="modal-content">
                                       <div class="modal-header">
                                         <button type="button" class="close" data-dismiss="modal">&times;</button>
                                          <h4 class="modal-title">แก้ไข</h4>
                                           </div>
                                           <div class="modal-body">
                                       {{Form::open(['route'=>['employee.update',$l['id']],'method'=>'PUT','files' => true,'id' => 'newModalFormE'])}}
                                       <div class="row">
                                           <div class="col-md-2">
                                             {{Form::label('name','ชื่อ')}}
                                           </div>
                                             <div class="col-md-5">
                                               <div class="form-group ">
                                                   {{Form::text('name',$l['name'],['class'=>'form-control','id' => 'name'])}}
                                                 <span class="text-danger"></span>
                                                 </div>
                                             </div>
                                           </div>
                                           <div class="row">
                                             <div class="col-md-2">
                                               {{Form::label('lastname','นามสกุล')}}
                                             </div>
                                               <div class="col-md-5">
                                                 <div class="form-group">
                                                     {{Form::text('lastname',$l['lastname'],['class'=>'form-control','id' => 'lastname'])}}
                                                   <span class="text-danger"></span>
                                                   </div>
                                               </div>
                                             </div>
                                           <div class="row">
                                             <div class="col-md-2">
                                               {{Form::label('nikname','ชื่อเล่น')}}
                                             </div>
                                               <div class="col-md-5">
                                                 <div class="form-group ">
                                                     {{Form::text('nikname',$l['nikname'],['class'=>'form-control','id' => 'nikname'])}}
                                                   <span class="text-danger"></span>
                                                   </div>
                                               </div>
                                             </div>  
                                             <div class="row">
                                               <div class="col-md-2">
                                                 {{Form::label('birthday','วันเกิด')}}
                                               </div>
                                                 <div class="col-md-5">
                                                   <div class="form-group ">
                                                       {{Form::date('birthday',$l['birthday'],['class'=>'form-control','id' => 'birthday'])}}
                                                     <span class="text-danger"></span>
                                                     </div>
                                                 </div>
                                               </div>   
                         
                                               <div class="row">
                                                 <div class="col-md-2">
                                                   {{Form::label('sex','Sex')}}
                                                 </div>
                                                   <div class="col-md-5">
                                                     <div class="form-group ">
                                                       {{ Form::radio('sex', 'Male') }}Male
                                                       {{ Form::radio('sex', 'Female') }}Female
                                                         <span class="text-danger"></span>
                                                       </div>
                                                   </div>
                                               </div>
                                               <div class="row">
                                                 <div class="col-md-2">
                                                   {{Form::label('email','อีเมล')}}
                                                 </div>
                                                   <div class="col-md-5">
                                                     <div class="form-group">
                                                         {{Form::email('email',$l['email'],['class'=>'form-control','id' => 'email'])}}
                                                       <span class="text-danger"></span>
                                                       </div>
                                                   </div>
                                                 </div> 
                                           </div>
                                           <div class="modal-footer">
                                              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                              {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                                              </div>
                                              {{ Form::close() }}  
                                      </div>
                              </div>
                         </div>
                      </td>
                   </tr>
                @endif
             @empty
             <tr>
              <td colspan="9" > No data !!</td>
               </tr>
                             @endforelse
                    </tbody>
              </table> 
         
      </div>
              <footer class="panel-footer">
                <div class="row">
                    <div class="col-sm-5">
                        <!-- Trigger the modal with a button -->
        <button type="button" class="btn btn-info" data-toggle="modal" data-target="#myModal">เพิ่ม</button>
  <!-- Modal -->

  <div id="myModal" class="modal fade" role="dialog">
  

    <div class="modal-dialog">
        
      <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">&times;</button>
             <h4 class="modal-title">แก้ไข</h4>
              </div>
              <div class="modal-body">
              
                  {{Form::open(['url'=>'employee','files' => true,'enctype'=>'multipart/form-data','id' => 'addFormE'])}}
                  <div id="email">
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      <ul>
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      </ul>
                  </div>
               
              @endif 
            </div>

          <div class="row">
              <div class="col-md-2">
                {{Form::label('name','ชื่อ')}}
              </div>
                <div class="col-md-5">
                  <div class="form-group ">
                      {{Form::text('name','',['class'=>'form-control','id' => 'name'])}}
                    <span class="text-danger"></span>
                    </div>
                </div>
              </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('lastname','นามสกุล')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group">
                        {{Form::text('lastname','',['class'=>'form-control','id' => 'lastname'])}}
                      <span class="text-danger"></span>
                      </div>
                  </div>
                </div>
              <div class="row">
                <div class="col-md-2">
                  {{Form::label('nikname','ชื่อเล่น')}}
                </div>
                  <div class="col-md-5">
                    <div class="form-group ">
                        {{Form::text('nikname','',['class'=>'form-control','id' => 'nikname'])}}
                      <span class="text-danger"></span>
                      </div>
                  </div>
                </div>  
                <div class="row">
                  <div class="col-md-2">
                    {{Form::label('birthday','วันเกิด')}}
                  </div>
                    <div class="col-md-5">
                      <div class="form-group ">
                          {{Form::date('birthday','',['class'=>'form-control','required'])}}
                        <span class="text-danger"></span>
                        </div>
                    </div>
                  </div>   

                  <div class="row">
                    <div class="col-md-2">
                      {{Form::label('sex','Sex')}}
                    </div>
                      <div class="col-md-5">
                        <div class="form-group" >
  
                          {{ Form::radio('sex', 'Male') }}Male
                          {{ Form::radio('sex', 'Female') }}Female
                          
                          </div>
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-2">
                      {{Form::label('email','อีเมล')}}
                    </div>
                      <div class="col-md-5">
                        <div class="form-group">
                            {{Form::email('email','',['class'=>'form-control','id'=>'email'])}}
                            
                          </div>
                      </div>
                    </div> 
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                {{ Form::submit('Seve',['class'=> 'btn btn-primary'])}}
                </div>
                {{ Form::close() }}  

           </div>
        </div>
      </div>
    </div>
   </div>
   </div>      
</div>
</div>
</div>

@endsection