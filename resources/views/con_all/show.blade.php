
@extends('layouts.main')

@section('content')

<div class="content-wrapper">
    <div class="content container">


<!---------------------------------------------------ทดสอบ MBTI -------------------------------------------------------->

 


<ul class="list-group">
        <li class="list-group-item">
            ผลสรุปของ {{$personal->name}} {{$personal->lastname}}
        </li>
        @foreach ($testmbti as  $testmbtis )
        @if (	 $testmbtis->id_personal == $personal->id)
    <li class="list-group-item">


        <label for="con">ผลสรุปการทดสอบ MBTI</label><br>
       
         ผลสรุป  {{ $testmbtis->conclude }} 
           {{  $testmbtis->meaning }} <br><br>
          
           <label for="con">  ผลสรุป ด้านการคิด</label><br>
         
           {{  $testmbtis->meaningtwo  }} 




    </li>
       
    @endif
    @endforeach

  



 <!----------------------------------------------------------------------------------------------------------------->


 <!---------------------------------------------------ทดสอบ DISC -------------------------------------------------------->


 @foreach ($testdisc as $testdis )
    @if (	$testdis->id_personal == $personal->id)
    <li class="list-group-item">

            <label for="con">ผลสรุปการทดสอบ DISC</label><br>
            {{ $testdis->meaning }} <br>

    </li>

    @endif
    @endforeach
 <!----------------------------------------------------------------------------------------------------------------->
</ul>
<!---------------------------------------------------ระดับบังคับบัญชา---------------------------------------->
<div class="row">
<div class="col-xs-6">
<div class="box"  >
        <div class="box-header">
          <h3 class="box-title">คะแนนประเมิน ระดับบังคับบัญชาขึ้นไป (Supervisory Level)</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
              
           <table class="table table-striped"  style="width:100%">
                   <thead>
                     <tr>
                       <th>สรุปผลคะแนน</th>
                     </tr>
                   </thead>
                   <tbody>
                         
                        @forelse($inter_sup as $inter )
                               @if (	$inter->id_personal == $personal->id &&  $inter->chioce > '20'&& $inter->chioce <'200' )
                         
                     <tr>
                       <td>
                             
                               @if($inter->chioce == '102')
                               
                              ผลรวมจากการเลือก 5 ได้ {{ $inter->score }} คะแนน
                                @endif
                               
                         
                                
                                @if($inter->chioce == '103')
                                
                               ผลรวมจากการเลือก 4 ได้ {{ $inter->score }} คะแนน
                                 @endif
                               
                                
                                 @if($inter->chioce == '104')
                                 
                                ผลรวมจากการเลือก 3 ได้ {{ $inter->score }} คะแนน
                                  @endif
                                
                                 
                                  @if($inter->chioce == '105')
                                  
                                 ผลรวมจากการเลือก 2 ได้ {{ $inter->score }} คะแนน
                                   @endif
                                  
                                   
                                   @if($inter->chioce == '106')
                                   
                                  ผลรวมจากการเลือก 1 ได้ {{ $inter->score }} คะแนน
                                    @endif
                                   
                                    @if($inter->chioce == '107')
                                   
                                    ผลรวม  {{ $inter->score }} คะแนน
                                      @endif
                       </td>
                     </tr>
                     @endif
                     @empty
                     <tr>
                     <td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
                     </tr>
                       @endforelse
                   </tbody>
                 </table>

        
   
       </div>
   
    </div>
</div>
<div class="col-xs-6">
        <div class="box"  >
                <div class="box-header">
                  <h3 class="box-title">ความคิดเห็น ระดับบังคับบัญชาขึ้นไป (Supervisory Level)</h3>
                </div>
                <!-- /.box-header -->
                <div class="box-body">
                        <table class="table table-striped"  style="width:100%">
                                <thead>
                                  <tr>
                                    <th>สรุปความคิดเห็น</th>
                                  </tr>
                                </thead>
                                <tbody>
                                      
                                        @forelse ($comment_sup as $conm )
                                        @if (	$conm->id_posinal == $personal->id && $conm->comment_interview != '' &&  $conm->chioce != '100'  &&  $conm->chioce != '101'  &&  $conm->chioce != '199'   &&  $conm->chioce != '200'  &&  $conm->chioce != '320' )
                                  <tr>
                                    <td>
                                            ข้อ {{ $conm->chioce }} จากการประเมิน
                                            มีความคิดเห็น  {{ $conm->comment_interview }}
                                    </td>
                                  </tr>
                                  @endif
                        @endforeach
                        @foreach ($comment_sup as $conm )
                        @if (	$conm->id_posinal == $personal->id && $conm->chioce > '20'   )   
                  <tr>
                    <td>
                            @if($conm->chioce == '100')
                           
                           คำแนะนำ  {{ $conm->comment_interview }} 
        
                            @endif

                            @if($conm->chioce == '101')
                           
                            ตำแหน่ง  {{ $conm->comment_interview }} 
         
                             @endif

                             @if($conm->chioce == '199')
                           
                             ความคิดเห็น  {{ $conm->comment_interview }} 
          
                              @endif

                              @if($conm->chioce == '200')
                           
                             วันที่ {{ $conm->comment_interview }} 
           
                               @endif



                               @if($conm->chioce == '320')
                           
                              ชื่อผู้ประเมิน {{ $conm->comment_interview }} 
            
                                @endif


        
                    </td>
                  </tr>
                  @endif
                  @empty
                  <tr>
                  <td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
                  </tr>
                    @endforelse
                                </tbody>
                              </table>
        
                </div>
           
               </div>
           
            </div>
        </div>
        <div class="row">
                <div class="col-xs-6">
                <div class="box"  >
                        <div class="box-header">
                          <h3 class="box-title">คะแนนประเมิน ระดับปฎิบัติการ (Operational Level)</h3>
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body">
                             
                           <table class="table table-striped"  style="width:100%">
                                   <thead>
                                     <tr>
                                       <th>สรุปผลคะแนน</th>
                                     </tr>
                                   </thead>
                                   <tbody>
                                         
                                        @forelse($con_interview as $coni )
                                               @if (	$coni->id_personal == $personal->id &&  $coni->chioce > '20' && $coni->chioce <'200' )
                                         
                                     <tr>
                                       <td>
                                             
                                               @if($coni->chioce == '105')
                                               
                                              ผลรวมจากการเลือก 5 ได้ {{ $coni->score }} คะแนน
                                                @endif
                                               
                                         
                                                
                                                @if($coni->chioce == '106')
                                                
                                               ผลรวมจากการเลือก 4 ได้ {{ $coni->score }} คะแนน
                                                 @endif
                                               
                                                
                                                 @if($coni->chioce == '107')
                                                 
                                                ผลรวมจากการเลือก 3 ได้ {{ $coni->score }} คะแนน
                                                  @endif
                                                
                                                 
                                                  @if($coni->chioce == '108')
                                                  
                                                 ผลรวมจากการเลือก 2 ได้ {{ $coni->score }} คะแนน
                                                   @endif
                                                  
                                                   
                                                   @if($coni->chioce == '109')
                                                   
                                                  ผลรวมจากการเลือก 1 ได้ {{ $coni->score }} คะแนน
                                                    @endif
                                                   
                                                    @if($coni->chioce == '102')
                                                   
                                                    ผลรวม  {{ $coni->score }} คะแนน
                                                      @endif
                                       </td>
                                     </tr>
                                     @endif
                                     @empty
                                     <tr>
                                     <td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
                                     </tr>
                                       @endforelse
                                   </tbody>
                                 </table>
                
                       
                   
                       </div>
                   
                    </div>
                </div>
                
                
                
                <div class="col-xs-6">
                        <div class="box"  >
                                <div class="box-header">
                                  <h3 class="box-title">ความคิดเห็น ระดับปฎิบัติการ (Operational Level)</h3>
                                </div>
                                <div class="box-body">
                                        <table class="table table-striped"  style="width:100%">
                                                <thead>
                                                  <tr>
                                                    <th>สรุปความคิดเห็น</th>
                                                  </tr>
                                                </thead>
                                                <tbody>
                                                      
                                                        @forelse ($comment_interview as $conm )
                                                        @if (	$conm->id_posinal == $personal->id && $conm->comment_interview != '' &&  $conm->chioce != '103'  &&  $conm->chioce != '101'  &&  $conm->chioce != '123'   &&  $conm->chioce != '169'  &&  $conm->chioce != '320' )
                                                  <tr>
                                                    <td>
                                                            ข้อ {{ $conm->chioce }} จากการประเมิน
                                                            มีความคิดเห็น  {{ $conm->comment_interview }}
                                                    </td>
                                                  </tr>
                                                  @endif
                                        @endforeach
                                        @foreach ($comment_interview as $conm  )
                                        @if (	$conm->id_posinal == $personal->id && $conm->chioce > '20' )   
                                  <tr>
                                    <td>
                                            @if($conm->chioce == '103')
                                           
                                           คำแนะนำ  {{ $conm->comment_interview }} 
                        
                                            @endif
                
                                            @if($conm->chioce == '101')
                                           
                                            ตำแหน่ง  {{ $conm->comment_interview }} 
                         
                                             @endif
                
                                             @if($conm->chioce == '169')
                                           
                                             ความคิดเห็น  {{ $conm->comment_interview }} 
                          
                                              @endif
                
                                              @if($conm->chioce == '123')
                                           
                                             วันที่ {{ $conm->comment_interview }} 
                           
                                               @endif
                
                
                
                                               @if($conm->chioce == '320')
                                           
                                              ชื่อผู้ประเมิน {{ $conm->comment_interview }} 
                            
                                                @endif
                
                
                        
                                    </td>
                                  </tr>
                                  @endif
                                  @empty
                                  <tr>
                                  <td colspan="6" >ไม่มีข้อมูลในส่วนนี้!</td>
                                  </tr>
                                    @endforelse
                                                </tbody>
                                              </table>
                        
                                </div>
                           
                               </div>
                           
                            </div>
                        </div>
                














      </div> 
</div>
   
    @endsection

  
