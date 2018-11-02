@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
        <div class="content container">
     
                <div class="box"  >
                        <div class="box-header">
                          <h3 class="box-title">สรุปผลการทดลองงาน ระดับบังคับบัญชา</h3>
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
                                    @forelse($employee as $l)
                                    @foreach ($operate_sup as $operatesup)
                                    @if($operatesup->id_posinal ==  $l->nem_id)
                                    <tr>
                                  <td> {{$l->nem_thai_firstname}} </td>
                                  <td> {{$l->nem_thai_lastname}} </td>
                                
                                 <td>  
                                     
                                     


                                     
                                     
                                      <a href="{{url('pdfcon_sup/'.$operatesup['id'])}}" class="btn btn-success btn-xs " ><i class="fa fa-download"></i></a>
                                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#delete{{$operatesup->id}}"><i class=" fa fa-trash"></i></button>
                                     
                                      <div id="delete{{$operatesup->id}}" class="modal fade" role="dialog">
                                        <div class="modal-dialog">
                                          <div class="modal-content">
                                            <div class="modal-header">
                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                              <h4 class="modal-title">ลบข้อมูล</h4>
                                            </div>
                                            <div class="modal-body">
                                              {{Form::open(['url'=>'reset_sup'])}}
                                              @csrf
                                             
                                              <input type="hidden" name="nem_id" value="{{$l->nem_id}}"> 
                                              <p>คุณต้องการลบใช่หรือไม่!!!!</p>
                                            </div>
                                            <div class="modal-footer">
                                              <button type="summit" class="btn btn-danger">ลบ</button>
                                              <button type="button" class="btn btn-default" data-dismiss="modal">ยกเลิก</button>
                                            </div>
                                            {{ Form::close() }}
                                          </div>
                  
                                        </div>
                                      </div>
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                     
                                      @endif
                                      @endforeach








                                    
                                      
                     
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
                      </div>
    
    
    
    
    
    
    </div>
      </div>



  </div>


  @endsection