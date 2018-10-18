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
<?php    $i=0; $j=0; $k=0;?>
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

                      @if(($ngg_employees->nem_code ==  $emm_id))
                 
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
                 
              

                @if($forms->form == 'leader' && $i==0)
                 <tr>
                   <th colspan="5" style="text-align: center;width: 50%;height: 70px; background-color: #b7eeff;">{{Form::label('forms_name',$forms->form)}}
                   </th>
                </tr>
               <?php    $i++;?>
                @elseif($forms->form == 'officer' && $j==0)
                <tr>
                   <th colspan="5" style="text-align: center;width: 50%;height: 70px; background-color: #b7eeff;">{{Form::label('forms_name',$forms->form)}}
                   </th>
                </tr>
               <?php    $j++;?>
                @elseif($forms->form == 'manager' && $k==0)
                <tr>
                   <th colspan="5" style="text-align: center;width: 50%;height: 70px; background-color: #b7eeff;">{{Form::label('forms_name',$forms->form)}}
                   </th>
                </tr>
                <?php    $k++;?>
                @endif
               

                 <tr>

                    <td colspan="5" style="text-align: center;width: 50%;height: 70px;">
                      {{Form::label('คุณ','คุณ')}}
                   {{Form::label('id_employee1',$emp2->nem_thai_firstname)}}
                    </td>
                  
                    <td rowspan="2" colspan="5" style="text-align: center;width: 50%;height: 70px;">
                    @if($emp->nee_recheck == true)

                    <a href="{{'starttestv2/'.$forms->id}}" class="btn btn-xs " ><input type="submit" value="เริ่มทำแบบประเมิน" id="mySubmit" class="btn btn-primary"></a>

                    @else
                    <span><i class="fa fa-check fa-lg" aria-hidden="true" style="color: #35ff16"></i></span>
                    @endif
                  
                    </td>
                   
                  </tr> 
 
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