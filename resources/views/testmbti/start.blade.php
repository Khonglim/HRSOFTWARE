@extends('layouts.main')
@section('content')

  <div class="content-wrapper">
    <div class="content container-fluid">
<div class="row">
        <div class="col-md-5">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">แบบประเมินบุคลิกภาพ</h3>
            </div>
          
          
              <div class="box-body">
                  <div class="col-md-7">
                <div class="form-group">
                  {{Form::open(['url'=>'start','method'=>'POST'])}}
                    {{Form::label('ชื่อ')}}   
                    {{Form::text('name','',['class'=>'form-control','required'])}}   
                    {{Form::label('นามสกุล')}}   
                    {{Form::text('lastname','',['class'=>'form-control','required'])}}   
                   
                  </div>
                  <label>หมายเหตุ:ในแต่ละข้อให้เลือกเพียงตัวเลือก "ก" หรือ "ข" เพียงตัวเลือกเดียวที่สอดคล้องกับตัวท่านมากที่สุด<br>(แม้จะชอบทั้งคู่ก็ต้องเลือกเพียงตัวเลือกเดียวเท่านั้น)
                    <br>(จับเวลา 3 นาที)
                  
                  </label>
                </div>
               

              </div>
              <!-- /.box-body -->
              <div class="box-footer">
             
                {{ Form::submit('เริ่มทำข้อสอบ',['class'=> 'btn btn-primary'])}}
              </div>
              <!-- /.box-footer -->
              {{Form::close()}}
            
          </div>
        </div>
        <div class="col-md-5">
            <div class="box box-info">
                <div class="box-header with-border">
                  <h3 class="box-title">รายชื่อที่ทดสอบเรียบร้อยแล้ว</h3>
                </div>
              
              
                  <div class="box-body">
                      <table id="testmbti" class="table table-bordered table-striped">
                          <thead>
                          <tr>
                           
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>เพิ่มเติ่ม</th>
                          </tr>
                          </thead>
                          <tbody>
                            @forelse($testmbti as $l)
                           <tr>
                             <td>
                               {{$l->name}}
                             </td>
                             <td>
                                {{$l->lastname}}
                              </td>
                              <td> <a href="{{'mbti/'.$l['id']}}" class="btn btn-primary btn-xs" ><i class="fa fa-search"></i></a>
                                  
                                </td>
                          </tr>
           
             @empty
            <tr>
            <td colspan="6" > No data !!</td>
            </tr>
              @endforelse
                          </tbody>
                          <tfoot>
                          <tr>
                            <th>ชื่อ</th>
                            <th>นามสกุล</th>
                            <th>เพิ่มเติ่ม</th>
                          </tr>
                          </tfoot>
                        </table>    
    
                  </div>
                  <!-- /.box-body -->
                  <div class="box-footer">
                
                  </div>
                  <!-- /.box-footer -->
                
                
              </div>
            </div>
      </div>










      
       
        
        

    
        
</div>
  </div>
 
  @endsection