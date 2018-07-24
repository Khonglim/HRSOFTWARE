
@extends('layouts.main')


@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">
      <div class="col-md-12">
          <br> 
          <a href="position/create" class="btn btn-success" ><i class="fa fa-plus"> เพิ่มข้อมูล</i></a>
          <br>  <br>  
          <div class="panel panel-default">
            <div class="panel-heading"> ตำแหน่ง</div>
          <div class="table-responsive">
                <table class="table table-striped b-t b-light">
                  <thead>
                    <tr>
                       <th>ID</th>
                       <th>ชื่อตำแหน่ง</th>
                       <th>ID เริ่มต้นแผนก</th>
                       <th>หมายเหตุ</th>
                       <th>เพิ่มเติ่ม</th>
                    </tr>
                  </thead>
                  <tbody>
                          @forelse($position as $l)
                             @if($l['enable']==1)
                            <tr>
                          <td> {{$l['id']}} </td>
                          <td> {{$l['position_name']}} </td>
                          <td> {{$l['Department_ID']}} </td>
                          <td> {{$l['remark']}} </td>
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
            <p>คุณต้องการลบ{{$l['position_name']}}ใช่หรือไม่!!!!</p>  
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
            <td colspan="6" > No data !!</td>
        </tr>
      @endforelse
        </tbody>
            </table>  
              </div>
            
            <footer class="panel-footer">
             
        </footer>
              <ul class="pagination pagination-sm no-margin pull-right">
      <li>
     {{ $position->links() }}
        </li>

        </ul>
      </div>
      </div>
    </div>
  </div>
  @endsection