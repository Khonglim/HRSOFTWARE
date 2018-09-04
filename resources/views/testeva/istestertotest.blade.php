@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <style type="text/css">
    th{
      font-size: 18px;
      background-color: #83b8fc;
        color: black;
    }
    td{
      font-size: 18px;
    }
    p{
      color: red;
    }
    div.box-header{
      text-align: center;
      font-size:35px;


    }

  </style>

  

 <section class="content">
  <div class="row">
      <div class="col-xs-10">
        <div class="box">
          <div class="box-header" >
            <h3 class="box-title" >เลือกผู้ถูกประเมิน</h3>
           
          </div>
          <!-- /.box-header -->
          <div class="box-body">

                      @foreach ($ngg_employee as $ngg_employees)

                      @if(($ngg_employees->nem_code ==  $id_employee =  $_POST["id_employee"]))
                 
 <table class="table table-bordered table-striped">
              <thead>
                
                 <tr>
                  <th style="text-align: center;height: 70px; display: none;">
                     {{Form::label('id_employee1',$ngg_employees->nem_code)}}
                     {{Form::label('id_number1',$ngg_employees->nem_nickname)}}
                     {{Form::label('id_number2',$ngg_employees->nem_id)}}
                  </th>
                </tr>
                <tr>
                  <th colspan="5" style="text-align: center;width: 50%;height: 70px;">
                  รายชื่อผู้ถูกประเมิน
                  </th>
                   <th colspan="5" style="text-align: center;width: 50%;height: 70px;">
                 เลือก
                  </th>
                </tr>
                

             </thead>

@foreach($employeetotest as $emp)
             <tbody>
             
                    @foreach($formfor as $forms)

                  @if($ngg_employees->nem_id == $emp->nee_is_employee && $forms->id==$emp->nee_id_form )

                   
                @foreach($ngg_employee as $emp2)      
                   
 
                @if($emp->nee_by_employee == $emp2->nem_id && $ngg_employees->nem_id == $emp->nee_is_employee && $forms->id==$emp->nee_id_form  )
                 
                {{Form::open(['url'=>'starttest','method'=>'POST'])}}
                 <tr>
                    <td colspan="5" style="text-align: center;width: 50%;height: 70px;">
                      {{Form::label('คุณ','คุณ')}}
                   {{Form::label('id_employee1',$emp2->nem_nickname)}}
                   
                    </td>
                    <td style="display: none;">
                      
                   {{Form::text('nee_id2',$emp->nee_id),['class'=>'form-control','required']}}
                   {{Form::text('nee_id1',$emp2->nem_id),['class'=>'form-control','required']}}
                   {{Form::text('id_employee',$ngg_employees->nem_nickname,['class'=>'form-control','required'])}}
                   {{Form::text('nee_id',$ngg_employees->nem_id,['class'=>'form-control','required'])}}
                   {{Form::text('forms_id',$forms->id,['class'=>'form-control','required'])}}
                    </td>
                    
                    <td th colspan="5" style="text-align: center;width: 50%;height: 70px;">
                    @if($emp->nee_recheck == true)
                    {{ Form::submit('เริ่มทำแบบประเมิน',['class'=> 'btn btn-primary'])}}
                    @else
                    <span><i class="fa fa-check fa-lg" aria-hidden="true" style="color: #35ff16"></i></span>
                    @endif
                  
                    </td>
                   
                  </tr> 
 {{Form::close()}}
                @endif

                @endforeach
                
               
                  @endif

                    @endforeach

             </tbody>

            @endforeach
             <tfoot>
            
             </tfoot>

            </table>
                    

                      @endif
                     
                      @endforeach
           
            <br><br>
           
            <br><br>
         </div>
        </div>
      </div>
    </div>


</section>
</div>
 
  @endsection