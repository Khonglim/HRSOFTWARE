@extends('layouts.main')


@section('content')
  <div class="content-wrapper">
    <div class="content container">
     
            <div class="box"  >
                    <div class="box-header">
                      <h3 class="box-title">สรุปผล</h3>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                      <table id="company" class="table table-bordered table-striped">
                        <thead>
                        <tr>
                         
                          <th>ชื่อ</th>
                          <th>นาสกุล</th>
                          <th>เพิ่มเติ่ม</th>
                        </tr>
                        </thead>
                        <tbody>
                                @forelse($personal as $l)
                                @if($l['enable']==1)
                               <tr>
                             <td> {{$l['name']}} </td>
                             <td> {{$l['lastname']}} </td>
                            
                             <td>  
                                  <a href="{{'con_all/'.$l['id']}}" class="btn btn-primary btn-xs" ><i class="fa fa-search"></i></a>
                                 
                                	<a href="{{url('pdfcon_all/'.$l['id'])}}" class="btn btn-success btn-xs " ><i class="fa fa-download"></i></a>
                                  
                 
                   </td>
                </tr>
                @endif
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
                  </div>






</div>
  </div>
 
  @endsection