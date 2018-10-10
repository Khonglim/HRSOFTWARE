@extends('layouts.main')
@section('content')
<div class="content-wrapper">
  <section class="content">
    <div class="row">
      <div class="col-md-8">
         
          
          <br><br>
                  @foreach($ngg_employee as $ngg_empl)
                  <?php $code = $ngg_empl->nem_code;
                        $idcard = $ngg_empl->nem_id_card;
                        $title_tname = $ngg_empl->nem_thai_title;
                        $thai_name = $ngg_empl->nem_thai_firstname;
                        $thai_lastname = $ngg_empl->nem_thai_lastname;
                        $nickname = $ngg_empl->nem_nickname;
                        $eng_title = $ngg_empl->nem_eng_title;
                        $eng_name = $ngg_empl->nem_eng_firstname;
                        $eng_lastname = $ngg_empl->nem_eng_lastname;
                        $birthday = $ngg_empl->nem_birthday;
                        $company1 = $ngg_empl->nem_company_id;
                        $department1 = $ngg_empl->nem_department_id;
                        $position1 = $ngg_empl->nem_position_id;
                        $level1 = $ngg_empl->nem_level_id;
                        $sector1 = $ngg_empl->nem_sector_id;
                        $remark1 = $ngg_empl->nem_remark;

                  ?>
                @endforeach

        <div class="box">
          <div class="box-header">
            <h3 class="box-title">ข้อมูลพนักงาน</h3>
          </div>
          <!-- /.box-header -->
          <div class="box-body">
            <div class="row">    
                           
                   <div class="col-md-3"> 
                      <label class="control-label">รหัสพนักงาน</label> 
                    </div> 
                    <div class="col-md-2">
                      {{$code}}
                    </div>   
                    <div class="col-md-3"> 
                      <label class="control-label">เลขบัตรประจำตัวประชาชน</label>
                  </div> 
                  <div class="col-md-2">
                      {{$idcard}} 
                  </div>          
        </div>
        
<br>
            <div class="row">         
                <div class="col-md-3">
                                <label class="control-label">คำนำหน้าชื่อ(ภาษาไทย)</label> 
                </div>
                <div class="col-md-2">
                                   {{$title_tname}} 
                </div>
                <div class="col-md-3"> 
                  <label class="control-label">ชื่อ(ภาษาไทย)</label>
                  </div> 
                  <div class="col-md-2">
                     {{$thai_name}}
                  </div>   
            </div>

         <br>   
            <div class="row">
               <div class="col-md-3"> 
                    <label class="control-label">นามสกุล(ภาษาไทย)</label> 
               </div>
               <div class="col-md-2">
                   {{$thai_lastname}} 
               </div> 
               <div class="col-md-3">
                 <label class="control-label">ชื่อเล่น</label>
                </div>
                <div class="row">
                  {{$nickname}} 
                </div>
            </div>      
<br>
           
        <div class="row">
                <div class="col-md-3">
                  <label class="control-label">คำนำหน้าชื่อ(ภาษาอังกฤษ)</label>
                </div>
                <div class="col-md-2">
                  {{$eng_title}}
                </div> 
                 <div class="col-md-3">
              <label class="control-label">ชื่อ(ภาษาอังกฤษ)</label>
          </div>
          <div class="col-md-2">
            {{$eng_name}} 
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-md-3">
                <label class="control-label">นามสกุล(ภาษาอังกฤษ)</label>
          </div> 
          <div class="col-md-2">
                {{$eng_lastname}}
          </div>
          <div class="col-md-3 ">
            <label class="control-label">วันเกิด</label>
          </div>
          <div class="col-md-2">
            {{$birthday}} 
          </div>
        </div>
        <br>
          </div>
          <br>
          
          <div class="row">      
                  <div class="col-md-3">
                    <label class="control-label">Company</label>                   
                </div>
                <div class="col-md-2">
                   @foreach($ngg_company as $company)
                   @if($company->ncp_id == $company1)
                     {{$company->ncp_name}}
                       @endif
                    @endforeach
                </div>
                <div class="col-md-3"> 
                   <label class="control-label">Department</label>
                </div>
            <div class="col-md-2">
                      @foreach($ngg_department as $department)
                      @if($department->ndp_id == $department1 )
                         {{$department->ndp_name}}
                      @endif
                      @endforeach
            </div>  
          </div>
          <br>
          <div class="row">
            <div class="col-md-3">
                   <label class="control-label">Position</label> 
                </div>
            <div class="col-md-2">
                     @foreach($ngg_position as $position)
                     @if( $position->id == $position1)
                     {{$position->nps_name}}
                       @endif
                      @endforeach
            </div>
             <div class="col-md-3">
                   <label class="control-label">Level</label>    
            </div>
            <div class="col-md-2">
                     @foreach($ngg_level as $level)
                     @if($level->nlv_id == $level1)
                      {{$level->nlv_name}}
                     @endif
                    @endforeach
            </div>
          </div>
      <br>
          <div class="row">
            <div class="col-md-3"> 
              <label class="control-label">เพิ่มเติม</label>
            </div> 
            <div class="col-md-2">
              {{$remark1}}
            </div>
          </div>
          <br/>
      <br/>
      
          </div>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-6">
        {{ Html::link('nggemployee','Back',array('class ' => 'btn btn-primary')) }}
    </div>
   
  </section>
</div>
    

@endsection