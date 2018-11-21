@extends('layouts.main') 
@section('content')
<div class="content-wrapper">
    <div class="content container">
    <div class="row">
      <div class="col-xs-12">
                  @if (count($errors) > 0)
                  <div class="alert alert-danger">
                      
                          @foreach ($errors->all() as $error)
                              <li>{{ $error }}</li>
                          @endforeach
                      
                  </div>
                  @endif
      <br>
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">แก้ไขอีเมลล์การส่งข้อมูลแจ้งเตือนขอกำลังคน</h3>
      </div>
      <!-- /.box-header -->
      <div class="box-body">
                  {{Form::open(['route'=>['Email_HR.update',$email_hr->id],'method'=>'PUT','files' => true,'class'=>"form-inline" ])}}
                        @csrf
                        <label for="email" class="mr-sm-2">Email address:</label>
      <input type="email" class="form-control mb-2 mr-sm-2" id="email" name="email_hr" required value="{{$email_hr->email_hr}}">
                     <br><br>
                        <button type="submit" class="btn btn-primary mb-2">บันทึก</button>
                        {{ Form::close()}}      
      

      </div>
    </div>
  </div>
    </div>

    </div>
</div>

@endsection