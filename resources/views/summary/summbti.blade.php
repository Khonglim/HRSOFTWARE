@extends('layouts.main')
@section('title','| MBTI')
@section('content')
<div class="content-wrapper">
        <div class="content container-fluid">
<div class="col-md-12">
        <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">รายชื่อที่ทดสอบเรียบร้อยแล้ว(MBTI)</h3>
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

        @endsection
