@extends('layouts.main')
@section('content')
  <div class="content-wrapper">
        <div class="content container-fluid">
     
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
                                    @if($l->nem_enable==1)
                                    <tr>
                                  <td> {{$l->nem_thai_firstname}} </td>
                                  <td> {{$l->nem_thai_lastname}} </td>
                                
                                 <td>  
                                     
                                     


                                      @foreach ($operate_sup as $operatesup)
                                      @if($operatesup->id_posinal ==  $l->nem_id)
                                     
                                      <a href="{{url('pdfcon_sup/'.$operatesup['id'])}}" class="btn btn-success btn-xs " ><i class="fa fa-download"></i></a>
                                      @endif
                                      @endforeach








                                    
                                      
                     
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



  </div>


  @endsection