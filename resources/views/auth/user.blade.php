@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
      <div class="content container">
                  <a href="user_setting/create" class="btn btn-success"><i class="fa fa-user-plus">เพิ่มข้อมูล</i></a>
                  <br><br>
            <div class="col-md-12">
                  <div class="box">
                        <div class="box-header">
                              <h3 class="box-title">ชื่อผู้ใช้งานในระบบ</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                                    @if(auth()->user()->isAdmin_Master == 1)
                              <table id="user_setting" class="table table-bordered table-striped">
                                    <thead>
                                          <tr>

                                                <th>ชื่อผู้ใช้/username</th>


                                                <th>แก้ไขการเข้าถึงข้อมูล</th>
                                          </tr>
                                    </thead>
                                    <tbody>
                                          @foreach ($user as $item)
                                          <tr>

                                                <td>
                                                      {{$item->name}}
                                                </td>
                                                <td>

                                                      <a href="{{'user_setting/'.$item['id'].'/edit'}}" class="btn btn-warning btn-xs "><i class="fa fa-pencil"></i></a>
                                                      <button type="button" class="btn btn-danger btn-xs" data-toggle="modal" data-target="#myModal{{$item['id']}}"><i class=" fa fa-trash"></i></button>
                                                      <div id="myModal{{$item['id']}}" class="modal fade" role="dialog">
                                                            <div class="modal-dialog">
                                                                  <div class="modal-content">
                                                                        <div class="modal-header">
                                                                              <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                              <h4 class="modal-title">ลบข้อมูล</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                              {{ Form::open(['route' => ['user_setting.destroy',$item['id'], 'method' => "DELETE"] ]) }}
                                                                              <input type="hidden" name="_method" value="delete" />
                                                                              <p>คุณต้องการลบ{{$item['name']}}ใช่หรือไม่!!!!</p>
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
                                          @endforeach
                                    </tbody>
                                    <tfoot>
                                          <tr>

                                                <th>ชื่อ</th>

                                                <th>แก้ไขการเข้าถึงข้อมูล</th>
                                          </tr>
                                    </tfoot>
                              </table>


                        </div>
                        @else

                     คุณไม่มีสิทธิ์เข้าถึงหน้านี้

                     @endif



                  </div>
            </div>





        
      









      </div>
</div>
@endsection