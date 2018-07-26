@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
    <div class="content container-fluid">  
    <div class="col-md-12">
        <br> 
        @if(auth()->user()->isAdmin == 1)
        <a href="department/create" class="btn btn-success" ><i class="fa fa-plus"> เพิ่มข้อมูล</i></a>
        @endif
                <br>  <br>
        <div class="panel panel-default">
          <div class="panel-heading">
           แผนก
           </div>
          <div class="table-responsive">
              <table class="table table-striped b-t b-light">
                <thead>
                  <tr>
                     <th>ID</th>
                     <th>ชื่อแผนก</th>
                     <th>ชื่อแผนก</th>
                     <th>บริษัท</th>
                     <th>หมายเหตุ</th>
                     <th>เพิ่มเติ่ม</th>
                  </tr>
                </thead>
                <tbody>
                        @forelse($department as $l)
                        <tr>
                        <td> {{$l['id']}} </td>
                        <td> {{$l['department_name']}} </td>
                        @foreach($department as $i)
                        @if($l['department_head_id']==$i['id'])
                        <td> {{$i['department_name']}} </td>
                        @break
                        @elseif($l['department_head_id']==0)
                        <td> Head Department </td>
                        @break
                        @endif
                        @endforeach
                        
                        @foreach($company as $c)
                        @if($l['company_id']==$c['id'])
                        <td> {{$c['company_Name']}} </td>
                        @endif
                        @endforeach
                        <td> {{$l['remark']}} </td>
                        <td>  
                            <a href="{{'department/'.$l['id'].'/edit'}}" class="btn btn-primary btn-xs" ><i class="fa fa-pencil"></i></a>
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
          <p>คุณต้องการลบ{{$l['department_name']}}ใช่หรือไม่!!!!</p>  
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
               {{ $department->links() }}
           </li>
         </ul>
         </div>
   </div>
 </div>
</div>
@endsection