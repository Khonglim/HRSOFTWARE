@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
        <div class="col-md-12">
            <br>
            <a href="employee/create" class="btn btn-success" ><i class="fa fa-plus"> เพิ่มข้อมูล</i></a>
            <br><br>
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
                                <a href="{{'employee/'.$l['id'].'/edit'}}" class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i></a>
                                <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$l['id']}}"><i class=" fa fa-trash"></i></button>
                  
                 
                      <div id="myModal{{$l['id']}}" class="modal fade" role="dialog">
                                <div class="modal-dialog">
   
      
                                   <div class="modal-content">
                               <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
           <h4 class="modal-title">ลบข้อมูล</h4>
         </div>
         <div class="modal-body">
             {{ Form::open(['route' => ['company.destroy',$l['id'], 'method' => "DELETE"] ]) }}
             <input type="hidden" name="_method" value="delete" / >
              <p>คุณต้องการลบ{{$l['name']}}ใช่หรือไม่!!!!</p>  
         </div>
         <div class="modal-footer">
            <button type="summit" class="btn btn-danger">ลบ</button>
            <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
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
              </footer>
            </div>
        </div>   
    </div>
  </div>
</div>

@endsection